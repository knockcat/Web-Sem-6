<?php

$book_title = $_POST['title'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "Library";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error)
{
    echo "Database Connection Failed ! <br>" . $conn->connect_error;
}
else
{

    $sql = "SELECT * FROM `lib` WHERE `btitle` = '$book_title';";

    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "Book Id = " . $row['bid'] . " Book Accession Number = " . $row['bacc'] . " Book Title = " . $row['btitle'] . " Book Author = " . $row['bauth'] . " Book Edition = " . $row['bedi'] . " Book Publisher = " . $row['bpub'] . " <br>";
        }
    }
    else
    {
        echo "No Record Found <br>";
    }

    $conn->close();

    echo "<br><br>";

    echo "<a href = 'index.html'>Enter New Record</a>; OR ";
    echo "<a href = 'search.html'>Search a Book</a>";

}

?>