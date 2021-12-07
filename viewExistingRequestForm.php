<html>

<head>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>View Book Request Form</title>
</head>

<body>
    <div class="login1">
        <p class="sign" align="center">Existing Request Form Page</p>
            <form class="form1" action='addBooksForm.php' method="post">
                <button class="submit1" value="Submit">Add Book(s)</button>
                <p><p>
            </form>
            <form class="form1" action='deleteBooksForm.php' method="post">
                <button class="submit1" value="Submit">Delete Book(s)</button>
                <p><p>
            </form>
            <form class="form1" action='deleteRequestForm.php' method="post">
                <button class="submit1" value="Submit">Delete Request Form</button>
                <p><p>
            </form>
            <p class="link" align="center"><a href="./mainPage.php">Back</p></a>
    </div>

        <h1 class= "table-header" align="center"> List of Books </h1>
            <p class="link" align="center"><a href="./fallBooks.php">Fall Books</p>
            <p class="link" align="center"><a href="./springBooks.php">Spring Books</p>
            <p class="link" align="center"><a href="./summerBooks.php">Summer Books</p>


</body>

</html>