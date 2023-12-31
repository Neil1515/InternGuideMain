<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Web Portal</h2>
        <?php
        // Include the logic for handling the form submission
        include('functions.php');

        // Display an error message if login attempt was unsuccessful
        if ($loginError) {
            echo '<p style="color: red;"> Invalid Login Credentials</p>';
        }
        ?>
        <form action="" method="post">
            <div class="logo-container">
                <img src="images/uclmlogo.jpg" alt="Logo" class="logo">
            </div>
            <h3>InternGuide</h3>
            <div class="id-container">
                <label for="id">ID number:</label><br>
            </div>
            <input type="text" id="id" name="id"><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
