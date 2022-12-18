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

    $sql="select * from `person`";
    //creating a database with name php
    $result = mysqli_query($conn,$sql);
    echo "<br>";
    $num= mysqli_num_rows($result);
    //way to fetch the data by every row with mysqli_fetch_assoc();
    // if($num>0)
    // {
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    //     $row=mysqli_fetch_assoc($result);
    //     echo var_dump($row);
    //     echo "<br>";
    // } 
    $no=1;
    echo "<pre>id       email            password </pre><br>";
    while($row=mysqli_fetch_assoc($result))
    {
       
        echo "<pre>".$no."    ".$row['email']."     ".$row["password"]."</pre>";
        echo "<br>";
        $no++;
    }

    //updating the rows
    $query="update `person` set email='adesh@gmail.com' where id=5";
    $result = mysqli_query($conn,$query);
    if($result)
    {
        echo "<pre>updated successfully </pre>";
    }
    else
    echo "<pre> could not updated </pre>";
    echo "<br>";
    $affected_rows = mysqli_affected_rows($conn);

    echo $affected_rows;



?>