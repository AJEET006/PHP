<?php
    function avgMarks($marksArray)
    {
        $sum=0;
        $i=0;
        foreach($marksArray as $marks)
        {
            $sum+=$marks;
            $i++;
        }
        echo count($marksArray)." <br>";
        echo $i."<br>";
        // return $sum/count($marksArray);
        return $sum/$i;
    }

    // $arr = array(12,23,85,65,14,26,59);
    $arr = [12,23,85,65,14,26,59];
    $avg = avgMarks($arr);
    echo "avaerage maeks of Ajeet <br> $avg "
?>