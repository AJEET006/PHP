<?php
    echo "welcome to the database connectivity in php <br>";
    $username="root";
    $servername="localhost";
    $password="aieee@12345";
    $database="php";
    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        die("sorry unable to connect with database");
    }
    echo "connection build successfully";
    $sql = "create table Person(id int primary key auto_increment,email varchar(50),password varchar(50))";
    //creating a database with name php
    $result = mysqli_query($conn,$sql);
?>