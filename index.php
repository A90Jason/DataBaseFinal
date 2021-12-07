<?php
require_once "connection.php";
session_start();
$errors = array();

// Check if new instance of website (create auto-generated super-admin)
$query = "SELECT * FROM users";
$result = mysqli_query($con, $query);
$rowCount = mysqli_num_rows($result);
if ($rowCount == 0) {
    // No accounts made, create super-admin
    $tempPassword = md5('test');
    $query = "INSERT INTO users (name, email, password, admin, isProfessor) VALUES 
            ('Super Admin', 'test', '$tempPassword', '1', '0')";
    mysqli_query($con, $query);
}

if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "email is required");
        // TODO: Derrick - Use CSS to make this error prettier
        $error = current($errors);
        echo $error;
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
        // TODO: Derrick - Use CSS to make this error prettier
        $error = current($errors);
        echo $error;
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT isProfessor FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($con, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            $row = mysqli_fetch_assoc($results);
            if ($row['isProfessor'] == 1) {
                header('location: mainPage.php');
            } else {
                header('location: staffPage.php');
            }
            exit();
        } else {
            array_push($errors, "Wrong email/password combination");
            // TODO: Derrick - Use CSS to make this error prettier
            $error = current($errors);
            echo $error;
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
        <form class="form1" method="post">
            <input class="un " type="text" name="email" align="center" placeholder="Email">
            <input class="pass" type="password" name="password" align="center" placeholder="Password">
            <button class="submit" align="center" name="login_user">Sign in</button>
    </div>

</body>

</html>