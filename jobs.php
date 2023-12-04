<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="your_script.js" defer></script>
    <title>Your Page Title</title>
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
                <li><a href="review.php">REVIEWS</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="h1">
        <h1 style="text-align:center">Available Jobs</h1>
        <div class="parallax"></div>

        <div>
            <input type="text" id="jobSearchInput" placeholder="Search for a job title">
            <button onclick="searchJob()">Search</button>
        </div>

        <div style="height:1000px;background-color:rgb(146, 138, 138);font-size:15px">
            <br><h3>Discover the secrets to finding a great job with our easy-to-follow CareerSeekers Guide.
                Whether you're just starting out or looking for a change, this guide is here to help you at every step.
                Learn how to search for jobs online, create a standout resume, and connect with people who can help your career.
                With practical tips and clear advice, this guide is your key to success in today's competitive job market</h3>

            <section class="momo">
        <a href="maintenance.php">
            <img src="pics/jobb1.jpg" >
        </a>

        <a href="service.php">
            <img src="pics/jobb2.jpg" >
        </a>

        <a href="cashier.php">
            <img src="pics/cashier.png" >
        </a>

        <a href="production.php">
            <img src="pics/jobb3.jpg" >
        </a>

        <a href="accounting.php">
            <img src="pics/jobb4.jpg" >
        </a>

        <a href="bagger.php">
            <img src="pics/jobb5.jpg" >
        </a>

        <a href="ComNur.php">
            <img src="pics/jobb6.jpg" >
        </a>

        <a href="cusass.php">
            <img src="pics/jobb7.jpg" >
        </a>

        <a href="stocle.php">
            <img src="pics/jobb8.jpg" >
        </a>

        <a href="welder.php">
            <img src="pics/jobb.9.jpg" >
        </a>

        <a href="srs.php">
            <img src="pics/jobb10.jpg" >
        </a>

        <a href="epson1.php">
            <img src="pics/jobb11.jpg" >
        </a>

        <a href="epson2.php">
            <img src="pics/jobb12.jpg" >
        </a>

        <a href="epson3.php">
            <img src="pics/jobb13.jpg" >
        </a>

        <a href="work.php">
            <img src="pics/jobb13.jpg" >
        </a>

        <a href="work1.php">
            <img src="pics/jobb13.jpg" >
        </a>

        <a href="work2.php">
            <img src="pics/jobb13.jpg" >
        </a>

        <a href="work3.php">
            <img src="pics/jobb13.jpg" >
        </a>

        <a href="work4.php">
            <img src="pics/jobb13.jpg" >
        </a>
        
        <a href="work5.php">
            <img src="pics/jobb13.jpg" >
        </a>

        <a href="work6.php">
            <img src="pics/jobb13.jpg" >
        </a>

        
        
    </section>
    <script>
    function searchJob() {
        var jobTitle = document.getElementById("jobSearchInput").value.toLowerCase();
        var availableJobs = ["maintenance", "service", "cashier", "production", "accounting", "bagger", "comnur", "cusass", "stocle", "welder", "srs", "epson1", "epson2", "epson3", "work", "work1", "work2", "work3", "work4", "work5", "work6"];
        var jobSection = document.querySelector(".momo");

        if (availableJobs.includes(jobTitle)) {
            // Display job details in the momo section
            jobSection.innerHTML = `
                <div class="momo">
                    <a href="${jobTitle}.php">Browse</a>
                </div>
            `;
        } else {
            alert("Job title not found. Please try another job.");
        }
    }
</script>

</div>

</body>
</html>
