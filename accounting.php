<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="accounting.css">
</head>

<body>
    <div class="topnav">
        <a class="active" href="home.php">Home</a>
        <a href="find_a_jobs.php">Find a Jobs</a>
        <a href="about.php">About</a>
        <a href="reviews.php">Reviews</a>
        <a href="contact.php">Contact</a>
    </div>

    <h1>ACCOUNTING STAFF</h1>
    <div class="tab">
        <button class="tablinks" onmouseover="openCity(event, 'Company')">Company</button>
        <button class="tablinks" onmouseover="openCity(event, 'Location')">Location</button>
        <button class="tablinks" onmouseover="openCity(event, 'Description')">Description</button>
    </div>

    <div id="Company" class="tabcontent">
        <h3>Company</h3>
        <img src="pics/step.png" alt="STEP INC. Logo">
        <p>Skills and Talent Employment Pool, Inc(STEP INC.)</p>
    </div>

    <div id="Location" class="tabcontent">
        <h3>Location</h3>
        <img src="pics/lima.jpg" alt="LIMA Technology Center Image">
        <p>LIMA Technology Center</p>
    </div>

    <div id="Description" class="tabcontent">
        <h3>Description</h3>
        <p>*23 y/o above</p>
        <p>*Graduate of any 4yrs course </p>
        <p>*Know how to process BIR Docs</p>
        <p>*Computer literature</p>
    </div>

    <script>
        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the link that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

</body>

</html>
