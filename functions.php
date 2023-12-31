<!-- functions.php -->
<?php
// Initialize the loginError variable
$loginError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a valid database connection here
    $servername = 'localhost';
    $db_id = 'root';
    $db_password = '';
    $db_name = 'internguidedb';

    // Attempt to connect to the database
    $con = mysqli_connect($servername, $db_id, $db_password, $db_name);

    // Check for connection errors
    if (mysqli_connect_error()) {
        die('Connection failed: ' . mysqli_connect_error());
    }

    // Handle form submission
    $id = mysqli_real_escape_string($con, $_POST['id']); // Use mysqli_real_escape_string for input validation
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Perform SQL query to validate user credentials using prepared statement
    $query = "SELECT * FROM tbladmin WHERE id = ? AND password = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ss", $id, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        // Valid credentials, redirect to adminDashboard.php
        header('Location: adminform/adminDashboard.php');
        exit();
    } else {
        // Invalid credentials, set loginError to true
        $loginError = true;
    }

    // Close the database connection
    mysqli_close($con);
}
?>
