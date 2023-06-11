<?php
$deptname = $_POST['dept'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "employee";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error)
    die("Connection not established " . $conn->connect_error);
else
{
    $sql = "select * from emp where emp_dept = '$deptname'";

    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        
        while($row = $result->fetch_assoc())
        {
            echo "Employe Id : " .$row['emp_id'] . " Employee Name : " . $row['emp_name'] . " Employee Salary : " . $row['emp_salary'] . " Employee Department : " . $row['emp_dept'] . "<br>";
        }
    }
    else
    {
        echo "No record Found<br>";
    }
}
$conn->close();
?>
