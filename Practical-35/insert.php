<?php

$book_accno = $_POST['acc_no'];
$book_title = $_POST['title'];
$book_author = $_POST['author'];
$book_edition = $_POST['edition'];
$book_publisher = $_POST['publisher'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "Library";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error)
{
    echo "Database Connection Failed ! <br>" . $conn->connect_error;
}
else
{
    $sql = "INSERT INTO `lib` (`bid`, `bacc`, `btitle`, `bauth`, `bedi`, `bpub`) VALUES (NULL, '$book_accno', '$book_title', '$book_author', '$book_edition', '$book_publisher');";

    $result = $conn->query($sql);

    // echo "The data you entered " . $book_accno . " " . $book_title . " " . $book_author . " " . $book_edition . " " . $book_publisher . "<br>";

    if($result == TRUE)
    {
        echo "Record Inserted <br>";

        echo "<a href = 'index.html'>Enter New Record</a>; OR ";
        echo "<a href = 'search.html'>Search a Book</a>";
    }
    else
    {
        echo "Record Insertion Failed! <br>" . $result->connect_error;
    }

    $conn->close();
}

?>