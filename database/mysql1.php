<?php
    echo "welcome to the database connectivity in php <br>";
    $username="root";
    $servername="localhost";
    $password="aieee@12345";

    $conn = mysqli_connect($servername,$username,$password);

    if(!$conn)
    {
        die("sorry unable to connect with database");
    }
    echo "connection build successfully";
    $sql = "create database php";
    //creating a database with name php
    $result = mysqli_query($conn,$sql);
    echo "<br>";
    echo var_dump($result);


?>