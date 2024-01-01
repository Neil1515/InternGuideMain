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
  
 // Function to open the modal
function openModal() {
    document.getElementById("addDeanModal").style.display = "block";
}

// Function to close the modal
function closeModal() {
    document.getElementById("addDeanModal").style.display = "none";
}

// Function to submit the dean form
function submitDeanForm() {
    // Collect form data
    var deanId = document.getElementById('deanId').value;
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;
    var department = document.getElementById('department').value;
    var image = document.getElementById('image').value;

    // Check if any field is empty
    if (!deanId || !fname || !lname || !department || !image) {
        alert("Please fill in all details.");
        return;
    }

    // Create FormData and submit the form
    var formData = new FormData(document.getElementById('addDeanForm'));

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                try {
                    var response = JSON.parse(xhr.responseText);

                    if (response.error) {
                        alert(response.error);
                    } else {
                        closeModal();  // Close the modal on success
                    }
                } catch (error) {
                    console.error("Error parsing JSON response: " + error);
                }
            } else {
                // If there was an error, show an alert
                alert("Error: " + xhr.responseText);
            }
        }
    };

    xhr.open("POST", "controller\\addDean.php", true);
    xhr.send(formData);
}


function editDean(deanId) {
  // Logic for editing dean with the given ID
  console.log("Edit dean with ID: " + deanId);
}