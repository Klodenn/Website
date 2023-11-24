<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="topnav">
    <a class="active" href="home.php">Home</a>
    <a href="find_a_jobs.php">Find a Jobs</a>
    <a href="about.php">About</a>
    <a href="reviews.php">Reviews</a>
    <a href="contact.php">Contact</a>
</div>

<header>
    <h1>Mabini CareerSeek: <br> Finding Job Information System</h1>
</header>

<br><br><br><br><br><br>

<main>
    <div class="container">
        <?php
        // You can use a loop to generate multiple cards dynamically
        for ($i = 0; $i < 5; $i++) {
            echo '<div class="card"></div>';
        }
        ?>
    </div>
</main>

<br><br><br><br><br><br><br><br><br><br><br><br>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Mabini CareerSeek, All Rights Reserved</p>
</footer>

</body>
</html>
