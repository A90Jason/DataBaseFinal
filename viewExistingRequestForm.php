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
        <form class="form1" method="post">
            <input class="un" type="text" placeholder="Book Title" />
            <button class="submit1" value="Submit">Add Book(s)</button><p><p>
            <button class="submit1" action="addBooksForm.php" value="Submit">Delete Book(s)</button><p><p>
            <button class="submit1" value="Submit">Delete Request Form</button>
            <p class="link" align="center"><a href="./mainPage.php">Back</p></a>
          </form>
      </div>

        <h1 class= "table-header" align="center"> List of Books </h1>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Book Title</th>
                    <th>Author Name</th>
                    <th>Edition</th>
                    <th>Publisher</th>
                    <th>ISBN</th>
                    <th>UserID</th>
                    <th>BookId</th>
                </tr>
            </thead>
            
            <?php

                require_once "connection.php";
        
                $sql = "SELECT * FROM books";
                $result = $con-> query($sql);

                if ($result-> num_rows)
                {
                
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['bookTitle'] . "</td>";
                        echo "<td>" . $row['authorName'] . "</td>";
                        echo "<td>" . $row['edition'] . "</td>";
                        echo "<td>" . $row['publisher'] . "</td>";
                        echo "<td>" . $row['isbn'] . "</td>";
                        echo "<td>" . $row['userID'] . "</td>";
                        echo "<td>" . $row['bookID'] . "</td>";
                    }


                    echo "</table";
                }
                else
                {
                    echo "0 results";
                }

                $con-> close();


                ?>

        
</table>

</body>

</html>