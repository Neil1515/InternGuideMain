// script.js //
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";  
    document.getElementById("main-content").style.marginLeft = "250px";
    document.getElementById("main").style.display="none";
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";  
    document.getElementById("main").style.display="block";  
}

function showUserDetails(userType) {
    console.log("Clicked on " + userType);

    // Declare the xhr variable once
    var xhr = new XMLHttpRequest();

    // Use a switch statement to determine which user type was clicked
    switch (userType) {
        case 'dean':
            // Use AJAX to fetch and load the content of managedeans.php
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the content of allContent-section
                    document.getElementById("main-content").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "adminmanageusers\\managedeans.php", true);
            xhr.send();
            break;
        case 'internCoordinator':
            // Use AJAX to fetch and load the content of manageinterncoordinator.php
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the content of allContent-section
                    document.getElementById("main-content").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "adminmanageusers\\manageinterncoordinator.php", true);
            xhr.send();
            break;
        case 'internStudent':
            // Use AJAX to fetch and load the content of manageinternstudents.php
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the content of allContent-section
                    document.getElementById("main-content").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "adminmanageusers\\manageinternstudents.php", true);
            xhr.send();
            break;
        case 'hte':
            // Use AJAX to fetch and load the content of managehte.php
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the content of allContent-section
                    document.getElementById("main-content").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "adminmanageusers\\managehte.php", true);
            xhr.send();
            break;
        default:
            console.log("Unknown user type");
    }
}

