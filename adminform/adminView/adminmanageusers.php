<!-- adminmanageusers.php -->

<?php
// Your PHP logic to retrieve and process user data goes here
?>
<link rel="stylesheet" type="text/css" href="//adminform/includes/adminstyles.css">

<div class="allContent-section">
    <h2>Manage Users</h2>
    
    <div class="user-category">
        <div class="user" onclick="showUserDetails('dean')">
            <img src="images/deanimage1.png" alt="Dean Image">
            <p>Dean</p>
        </div>
        
        <div class="user" onclick="showUserDetails('internCoordinator')">
            <img src="images/internCoordinatorimage.png" alt="Internship Coordinator Image">
            <p>Internship Coordinator</p>
        </div>
        
        <div class="user" onclick="showUserDetails('internStudent')">
            <img src="images/studentimage.png" alt="Intern Student Image">
            <p>Intern Student</p>
        </div>
        
        <div class="user" onclick="showUserDetails('hte')">
            <img src="images/hteimage.png" alt="HTE Image">
            <p>HTE</p>
        </div>
    </div>
</div>

<script src="includes/js/script.js"></script>
