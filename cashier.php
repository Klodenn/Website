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
    <h1>CASHIER</h1>
    <div class="tab">
    <button class="tablinks" onmouseover="openCity(event, 'Company')">Company</button>
    <button class="tablinks" onmouseover="openCity(event, 'Location')">Location</button>
    <button class="tablinks" onmouseover="openCity(event, 'Qualification')">Qualification</button>
    <button class="tablinks" onmouseover="openCity(event,'Requirements')">Requirements</button>
    <button class="tablinks" onmouseover="openCity(event,'Benefits')">Benefits</button>
  </div>

    <div id="Company" class="tabcontent">
        <h3>Company</h3>
        <img src="pics/sm.png" alt="">
        <p>Super Market</p>
    </div>

    <div id="Location" class="tabcontent">
        <h3>Location</h3>
        <img src="pics/map1.png" alt="Map Image">
        <p>Light and Hope Overseas Placement Agency Unit 205 LMD Bldg.</p>
    </div>

    <div id="Qualification" class="tabcontent">
        <h3>Qualification</h3>
        <p>●   Applicants must have pleasing personality</p>
        <p>●   Male and Female only</p>
        <p>●   With or Without Experience</p>
        <p>●   Can communicate easily</p>
    </div>

    <div id="Requirements" class="tabcontent">
        <h3>Requirements</h3>
        <p>●   Update Resume with 2x2 picture</p>
        <p>●   Job Application</p>
        <p>●   Proficient in computing</p>
    </div>

    <div id="Benefits" class="tabcontent">
        <h3>Benefits</h3>
        <p>●   Health Insurance</p>
        <p>●   OverTime Pay</p>
        <p>●   Bonuses</p>
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
