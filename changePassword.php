<?php
require_once "connection.php";
session_start();
$errors = array();

if (isset($_POST['changePassword'])) {
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $passwordConfirm = mysqli_real_escape_string($con, $_POST['passwordConfirm']);

    if (empty($password) || empty($passwordConfirm)) {
        array_push($errors, "password fields are required");
        $error = current($errors);
        echo $error;
    }

    if ($password != $passwordConfirm) {
        array_push($errors, "password fields must match");
        $error = current($errors);
        echo $error;
    }

    if (count($errors) == 0 && !empty($_SESSION['email'])) {
        $password = md5($password);
        $email = $_SESSION['email'];
        $query = "UPDATE users SET password = '$password' WHERE email = '$email'";
        $results = mysqli_query($con, $query);

        header("location: mainPage.php");
    } else if (empty($_SESSION['email'])) {
        // technically should not ba able to reach this point
        array_push($errors, "Session variable \"email\" is empty; make sure you're logged in!");
        $error = current($errors);
        echo $error;
    }
}

?>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Forgot Password</title>
</head>

<body>
    <div class="changePassword">
        <p class="sign" align="center">Change Password</p>
        <form class="form1" method="post">
            <input class="un" type="password" name="password" align="center" placeholder="New Password">
            <input class="un" type="password" name="passwordConfirm" align="center" placeholder="Confirm Password">
            <button class="submit" align="center" name="changePassword">Change Password</button>
            <p class="link" align="center"><a href="./mainPage.php">Back</p> 
    </div>
     
</body>

</html>