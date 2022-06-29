<head>
    <meta charset="UTF-8">
</head>
<?php

    $arr[0] = 78;
    $arr[1] = 83;
    $arr[2] = 97;
    $arr[3] = 88;
    $arr[4] = 78;

    $sum = 0;
    for($i = 0; $i<4; $i++){
        $sum = $sum + $arr[$i];
    }

    $avg = $sum/5;

    echo "과목점수 : ";
    for($i = 0; $i<4; $i++){
        echo "
            $arr[$i]
        ";
    }

    echo "
        <br>
        합계 : $sum , 평균 : $avg
    ";

?>