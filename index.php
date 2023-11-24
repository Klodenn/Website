<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="explore.css">
</head>
<body>
    <header>
        <h1>Finding Job Information System</h1>
    </header>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <main>
        <div class="centered-button">
            <?php
                function explore() {
                    // Change the window location to the home page
                    echo 'Explore button clicked! Explore na teh walang pamasahe';
                    // You can redirect to 'home.html' using header function if needed
                    // header('Location: home.html');
                }
            ?>
            <button onclick="explore()">Explore</button>
        </div>
    </main>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
