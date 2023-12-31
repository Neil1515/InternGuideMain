// sidebar.js

function showHomepage() {
    console.log("Homepage clicked");
    // Use AJAX to fetch and load the content of adminhomepage.php
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Update the content of allContent-section
            document.getElementById("main-content").innerHTML = xhr.responseText;
        }
    };
    xhr.open("GET", "adminView/adminhomepage.php", true);
    xhr.send();
}

function showManageUsers() {
    console.log("Manage Users clicked");

    // Use AJAX to fetch and load the content of manageusers.php
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Update the content of allContent-section
            document.getElementById("main-content").innerHTML = xhr.responseText;
        }
    };
    xhr.open("GET", "adminView/adminmanageusers.php", true);
    xhr.send();
}



function showManageAccount() {
    console.log("Manage Account clicked");
     // Use AJAX to fetch and load the content of adminmanageaccount.php
     var xhr = new XMLHttpRequest();
     xhr.onreadystatechange = function () {
         if (xhr.readyState == 4 && xhr.status == 200) {
             // Update the content of allContent-section
             document.getElementById("main-content").innerHTML = xhr.responseText;
         }
     };
     xhr.open("GET", "adminView/adminmanageaccount.php", true);
     xhr.send();
}

function showManageDepartment() {

    console.log("Manage Department clicked");
     // Use AJAX to fetch and load the content of adminmanagedepartment.php
     var xhr = new XMLHttpRequest();
     xhr.onreadystatechange = function () {
         if (xhr.readyState == 4 && xhr.status == 200) {
             // Update the content of allContent-section
             document.getElementById("main-content").innerHTML = xhr.responseText;
         }
     };
     xhr.open("GET", "adminView/adminmanagedepartment.php", true);
     xhr.send();
}
