<?php
require_once "connection.php";
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: index.php");
}

// Broadcast an email to all professors reminding them to submit their book request(s)
if (isset($_POST['broadcast'])) {
    $to_email = "";
    $subject = "Reminder to submit book requests for this semester";
    $message = "Hello Professor,

        This email is to serve as a reminder to submit your book requests for this semester using the system built for COP-4710 as a final project! Please use the included link below to access the site. If you feel you have received this email in error, feel free to disregard this email.
        
        https://localhost/DataBaseFinal/
    ";
    $headers = "From: cop4710finalproject@gmail.com";

    $query = "SELECT email FROM users WHERE (isProfessor = 1)";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result)) {
        $to_email = $row['email'];
        mail($to_email, $subject, $message, $headers);
    }
}

?>
<html>

<head>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/mainPageStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Staff Page</title>
</head>

<body>
    <div class="mainBox">
        <p class="sign" align="center">Welcome Staff Member</p>
        <p class="sign" align="center">Please choose from the following options</p>
        <form class="form1" method="post">
            <button class="mainPageButtons" name="broadcast" align="center">Broadcast reminder email to all professors</button>
            </br>
        </form>
        <form class="form1" action='individualRequest.php' method="post">
            <button class="mainPageButtons" align="center">Send individual invitation to a professor</button>
            </br>
        </form>
        <p class="link" align="center"><a href="./changePassword.php">Want to change your Password?</p>
        <p class="link" align="center"><a href="./signUp.php">Sign up a new user</p>
    </div>
</body>

</html>