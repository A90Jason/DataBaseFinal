<?php
require_once "connection.php";

if (isset($_POST['add_book'])) {
    $bookTitle = mysqli_real_escape_string($con, $_POST['bookTitle']);
    $author = mysqli_real_escape_string($con, $_POST['author']);
    $edition = mysqli_real_escape_string($con, $_POST['edition']);
    $publisher = mysqli_real_escape_string($con, $_POST['publisher']);
    $isbn = mysqli_real_escape_string($con, $_POST['isbn']);

    $query = "INSERT INTO books(bookTitle, authorsName, edition, publisher, isbn) 
            VALUES('$bookTitle', '$author', '$edition', '$publisher', '$isbn')";
    
    mysqli_query($con, $query);
}
?>
<html>

<head>
    <link rel="stylesheet" href="css/newBookRequestFormStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>New Book Request Form</title>
</head>

<body>
    <div class="new_book_request_form_box">
    <p class="sign" align="center">New Book Request to Form</p>
        <form class="form1" method="post">
        <input class="un " type="text" name="bookTitle" align="center" placeholder="Book Title">
        <input class="un " type="text" name="author" align="center" placeholder="Author">
        <input class="un " type="text" name="edition" align="center" placeholder="Edition">
        <input class="un " type="text" name="publisher" align="center" placeholder="Publisher">
        <input class="un " type="text" name="isbn" align="center" placeholder="ISBN">
        <button class="submit" align="center" name="add_book">Submit</button>
        <p class="link" align="center"><a href="./mainPage.php">Back</p>
    </div>

</body>

</html>