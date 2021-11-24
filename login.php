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
    <div class="main">
        <p class="sign" align="center">Sign in</p>
        <form class="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input class="un " type="text" name="email" align="center" placeholder="Email" <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
            <span class="invalid-feedback"><?php echo $email_err; ?></span>
            <input class="pass" type="password" name="password" align="center" placeholder="Password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
            <button class="submit" align="center" value="Submit">Sign in</button>
    </div>

</body>

</html>