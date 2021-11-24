<?php
$email = $password = "";
$email_err = $password_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("location: mainPage.php");
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
        <form class="form1" action='mainPage.php' metohd="post">
        <input class="un " type="text" name="email" align="center" placeholder="Email">
        <input class="pass" type="password" name="password" align="center" placeholder="Password">
        <button class="submit" align="center" value="Submit">Sign in</button>
    </div>

</body>

</html>