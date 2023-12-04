<?php
function uploadData()
{
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $feedback = isset($_POST['feedback']) ? $_POST['feedback'] : '';

    //Submitting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "feedback";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role"alert" <strong>Connection Failed</strong> </div>' . mysqli_connect_error();
    } else {
        $sql = "INSERT INTO `storedfeedbacks` (`email`, `feedBack`, `date`) VALUES (?, ?, current_timestamp())";

        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $email, $feedback);

            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role"alert" <strong>Success!</strong> Feedback is submitted from ' . $email . ' Thank you!! </div>';
            } else {
                echo '<div class="alert alert-warning alert-dismissible fade show" role"alert" <strong>Error uploading data</strong></div>' . mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo '<div class="alert alert-warning alert-dismissible fade show" role"alert" <strong>Error preparing statement</strong></div>' . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="review.css">
    <title>Documents</title>
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

        <!-- PHP -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Processing form submission
            uploadData();
        }
        ?>

        <div class="container mt-5">
            <br><br><br><br><br><br>
            <h1>Job Information Reviews</h1>
            <h2>Please Enter your email and feedback</h2>
            <form action="review.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="feedback" class="form-label">Enter your Feedback</label>
                    <textarea class="form-control" name="feedback" id="feedback" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</body>

</html>
