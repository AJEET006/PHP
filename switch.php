<?php
    $num=30;
    switch($num)
    {
        case 12:
            echo "less than ". $num."<br>";
            break;
        case 30:
            echo "equal to ". $num."<br>";
            break;
        case 35:
            echo "greater than " . $num."<br>";
            break;
        default:
            echo "executed properly"."<br>";
    }
?>