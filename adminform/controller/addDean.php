<!-- addDean.php -->
<?php
$servername = "localhost";
$username = "root";  // Replace with your database username
$password = "";      // Replace with your database password
$dbname = "internguidedb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form data (add validation logic)
    // Collect form data
    $deanId = $_POST['deanId'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $department = $_POST['department'];

    // Automatically set password, status, and save the image
    $password = "Uclm-" . $deanId;
    $status = "Active";

    // Image handling (add logic for file uploads)
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    // Check if the ID is already taken
    $checkIdQuery = "SELECT * FROM tbldean WHERE id = '$deanId'";
    $result = $conn->query($checkIdQuery);

    if ($result->num_rows > 0) {
        // In case of an error
        header('Content-Type: application/json');
        echo json_encode(array("error" => "ID already taken. Please choose a different ID."));
        exit; // Terminate the script
    } else {
        // ID is not taken, proceed with inserting data
        $sql = "INSERT INTO tbldean (id, fname, lname, department, password, status, image) 
                VALUES ('$deanId', '$fname', '$lname', '$department', '$password', '$status', '$image')";

        if ($conn->query($sql) === TRUE) {
            // In case of success
            header('Content-Type: application/json');
            echo json_encode(array("success" => "Dean added successfully"));
        } else {
            // In case of an error
            header('Content-Type: application/json');
            echo json_encode(array("error" => "Error adding dean. Please try again later."));
        }

        exit; // Terminate the script
    }
}

$conn->close();
?>
