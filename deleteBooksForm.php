<?php
require_once "connection.php";

// Add BOOK
if (isset($_POST['delete_book'])) {
    $bookTitle = mysqli_real_escape_string($con, $_POST['bookTitle']);

    $query = "DELETE FROM books WHERE bookTitle='$bookTitle'";
    
    mysqli_query($con, $query);
}
?>
<html>

<head>
    <link rel="stylesheet" href="css/newBookRequestFormStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Add Book Request Form</title>
</head>

<body>
    <div class="new_book_request_form_box">
        <p class="sign" align="center">Delete Book Form</p>
        <form class="form1" method="post">
        <input class="un " type="text" name="bookTitle" align="center" placeholder="Book Title">
        <button class="submit" align="center" name="delete_book">Submit</button>
        <p class="link" align="center"><a href="./mainPage.php">Back</p>
        </form>
    </div>

</body>

</html>