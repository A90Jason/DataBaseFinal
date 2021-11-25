<?php
require_once "api/api.php";

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>
<html>

<head>
    <link rel="stylesheet" href="css/mainPageStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Main Page</title>
</head>

<body>
<div class="mainBox">
        <p class="sign" align="center">Welcome Professor</p>
        <p class="sign" align="center">Please choose the following options...</p>
        <form class="form1" action='newBookRequestForm.php' method="post">
            <button class="mainPageButtons" align="center">New book request form</button>
            <p>  </p>
        </form>
        <form class="form1" action='viewExistingRequestForm.php' method="post">
            <button class="mainPageButtons" align="center">View existing request form</button> 
            <p>  </p>
        </form>
        <form class="form1" action='addBookRequestForm.php' method="post">
            <button class="mainPageButtons" align="center" >Add book request form</button> 
            <p>  </p>
        </form>
        <form class="form1" action='deleteBookRequest.php' method="post">
            <button class="mainPageButtons"align="center">Delete book request</button> 
            </div> 
        </form>
</body>

</html>
  

