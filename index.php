<?php 
require_once "api/api.php";

// initializing variables
$name = "";
$email = "";
$errors = array();
// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }


  $query = "INSERT INTO users(name, email, password, admin) 
        VALUES('$name', '$email', '$password_1', '0')";
  
   mysqli_query($con, $query);
  $_SESSION['email'] = $email;
}
?>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Sign Up</title>
</head>

<body>
    <div class="main">
        <p class="sign" align="center">Sign Up</p>
        <form class="form1" method="post">
            <input class="un " type="text" name="name" align="center" placeholder="Name">
            <input class="un " type="text" name="email" align="center" placeholder="Email">
            <input class="pass" type="password" name="password_1" align="center" placeholder="Password">
            <input class="pass" type="password" name="password_2" align="center" placeholder="Confirm Password">
            <button class="submit" align="center" type="submit" name="reg_user">Sign Up</button>
            <p class="link" align="center"><a href="./forgotPassword.php">Forgot Password?</p>
            <p class="link" align="center"><a href="./login.php">Login Here</p>
    </div>
</body>

</html>