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
?>
<html>

<head>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/mainPageStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Professor Page</title>
</head>

<body>
    <div class="mainBox">
        <p class="sign" align="center">Welcome Professor</p>
        <p class="sign" align="center">Please choose from the following options</p>
        <form class="form1" action='newBookRequestForm.php' method="post">
            <button class="mainPageButtons" align="center">Fall book request form</button>
            <p> </p>
        </form>
        <form class="form1" action='newBookRequestForm.php' method="post">
            <button class="mainPageButtons" align="center">Spring book request form</button>
            <p> </p>
        </form>
        <form class="form1" action='newBookRequestForm.php' method="post">
            <button class="mainPageButtons" align="center">Summer book request form</button>
            <p> </p>
        </form>
        <form class="form1" action='viewExistingRequestForm.php' method="post">
            <button class="mainPageButtons" align="center">View existing request form</button>
            <p> </p>
        </form>
        <p class="link" align="center"><a href="./changePassword.php">Want to change your Password?</p>
    </div>
    </form>
</body>

</html>