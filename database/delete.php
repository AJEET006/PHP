<?php

$username="root";
$servername="localhost";
$password="aieee@12345";
$database="php";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("sorry unable to connect with database");
}
 $query="delete from `person` where email='adesh@gmail.com'";
 $result = mysqli_query($conn,$query);
 if($result)
 {
     echo "<pre>updated successfully </pre>";
 }
 else
 echo "<pre> could not updated </pre>";
 echo "<br>";
 $affected_rows = mysqli_affected_rows($conn); //counting the number of rows from table
 echo $affected_rows;
?>