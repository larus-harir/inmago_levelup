<head>
    <meta charset="UTF-8">
</head>

<?php

    $num = array(15, 13, 9, 7, 6, 12, 19, 30, 28, 26);
    $count = 10;

    echo "정렬 전 : ";
    for($i=0; $i<10; $i++){
        echo "$num[$i] ";
    }

    echo "<br>";

    for($i=0; $i<10; $i++){
        for($j=0; $j<=$i; $j++){
            if($num[$j]>$num[$j+1]){
                $temp = $num[$j];
                $num[$j]=$num[$j+1];
                $num[$j+1]=$temp;
            }
        }
    }

    echo "버블정렬 후 : ";
    for($i=0; $i<10; $i++){
        echo "$num[$i] ";
    }

?>