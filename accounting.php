<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="job1234.css">
</head>

<body>
<div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">MaCJo</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="jobs.php">JOBS</a></li>
                    <li><a href="reviews.php">REVIEWS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <h1>ACCOUNTING STAFF</h1>
    <div class="tab">
    <button class="tablinks" onmouseover="openCity(event, 'Company')">Company</button>
    <button class="tablinks" onmouseover="openCity(event, 'Location')">Location</button>
    <button class="tablinks" onmouseover="openCity(event, 'Qualification')">Qualification</button>
    <button class="tablinks" onmouseover="openCity(event,'Requirements')">Requirements</button>
    <button class="tablinks" onmouseover="openCity(event,'Benefits')">Benefits</button>
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

    <div id="Qualification" class="tabcontent">
        <h3>Qualification</h3>
        <p>●   23 y/o above</p>
        <p>●   Graduate of any 4yrs course </p>
        <p>●   Know how to process BIR Docs</p>
        <p>●   Computer literature</p>
    </div>

    <div id="Requirements" class="tabcontent">
        <h3>Requirements</h3>
        <p>●   Resume</p>
        <p>●   Certification or Licenses</p>
        <p>●   Analytical Skills</p>
    </div>

    <div id="Benefits" class="tabcontent">
        <h3>Benefits</h3>
        <p>●   Health Insurances</p>
        <p>●   Paid time off</p>
        <p>●   Proffesional Development</p>
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
