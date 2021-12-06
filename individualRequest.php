<?php
require_once "connection.php";
$to_email = "";
$subject = "Invitation to submit book requests for this semester";
$message = "Hello Professor,

    This email is to serve as an invitation to use the book request system built for COP-4710 as a final project! Please use the included link below to access the site, or to create an account if this is your first time using the system. If you feel you have received this email in error, feel free to disregard this email.
    
    https://localhost/DataBaseFinal/signUp.php
";
$headers = "From: cop4710finalproject@gmail.com";

if (isset($_POST['sendEmail'])) {
    $to_email = mysqli_real_escape_string($con, $_POST['email']);
    $result = mail($to_email, $subject, $message, $headers);
}
?>
<html>

<head>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/mainPageStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Individual Request Page</title>
</head>

<body>
    <div class="mainBox">
        <p class="sign" align="center">Invite Professor to create book requests</p>
        <form class="form1" method="post">
            <input class="un " type="text" name="email" align="center" placeholder="Professor to Email">
            <button class="submit" align="center" name="sendEmail">Send email</button>
        </form>
        <p class="link" align="center"><a href="./staffPage.php">Back</p>
    </div>
</body>

</html>