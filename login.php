<?php
require_once "api/api.php";
$errors = array();

if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($con, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong email/password combination");
        }
    }
  }
?>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Sign in</title>
</head>

<body>
    <div class="login">
        <p class="sign" align="center">Sign in</p>
        <form class="form1" action='mainPage.php' method="post">
            <input class="un " type="text" name="email" align="center" placeholder="Email">
            <input class="pass" type="password" name="password" align="center" placeholder="Password">
            <button class="submit" align="center" name="login_user">Sign in</button>
    </div>

</body>

</html>