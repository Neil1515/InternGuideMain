<!-- managedeans.php -->
<?php

$servername = "localhost";
$username = "root";  // Corrected variable name
$password = "";      // You may need to set a password here if you've configured one
$dbname = "internguidedb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from 'tbldean' table
$sql = "SELECT `id`, `fname`, `lname`, `department`, `image`, `password`, `status` FROM `tbldean`";
$result = $conn->query($sql);

// Fetch data from the result set
$deansData = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $deansData[] = $row;
    }
}

$conn->close();
?>

<link rel="stylesheet" type="text/css" href="//adminform/includes/adminstyles.css">

<div class="allContent-section">
    <div class="header">
        <h2>Manage Users > All Dean</h2>
        <div class="button-container">
             <!-- button to open the modal -->
    <button class="action-button" onclick="openModal()">
        <img src="images/adduser.png" alt="Adduser" class="button-icon"> Add Dean
    </button>
    <!-- button to back -->
    <button class="action-button" onclick="back()">
        <img src="images/backimage.png" alt="Back" class="button-icon"> Back
    </button>
</div>


<!-- Modal for adding dean details -->
<div id="addDeanModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>

        <form id="addDeanForm" method="post" enctype="multipart/form-data" onsubmit="submitDeanForm(); return false;">
            <!-- Form fields go here -->
            <h2>ADD DEAN DETAILS</h2>
            <div class="form-group">
                <label for="deanId">Dean ID:</label>
                <input type="text" id="deanId" name="deanId" required>
                <label for="department">Department:</label>
                <input type="text" id="department" name="department" required>
            </div>

            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" required>
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" required>
            </div>

            <div class="imageform-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            
            <!-- Add other form fields as needed -->
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
<div class="user-table-container">
    <table class="user-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Department</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the fetched data and populate the table rows
            foreach ($deansData as $dean) {
                echo "<tr>";
                echo "<td>{$dean['id']}</td>";
                echo "<td>{$dean['fname']}</td>";
                echo "<td>{$dean['lname']}</td>";
                echo "<td>{$dean['department']}</td>";
                echo "<td>{$dean['status']}</td>";
                echo "<td><button class='edit-button' onclick='editDean({$dean['id']})'>";
                echo "<img src='images/edit.png' alt='Edit' class='button-icon'> Edit";
                echo "</button></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>


<script src="includes/js/script.js"></script>

