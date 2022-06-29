<head>
    <meta charset="UTF-8">
</head>

<?php

    $num = 5;

    for($i = 1; $i<=100; $i++){
        if($i%5==0){
            $sum = $sum + $i;
        }
    }

    echo "1과 100사이에 있는 5의 배수의 합계 : $sum <br>";

    for($i = 1; $i<=100; $i++){
        if($i%2==0 || $i%3==0){
            $sum2 = $sum2 + $i;
        }
    }
    echo "2의 배수와 3의 배수의 합 : $sum2 <br>";

    for($i = 1; $i<=100; $i++){
        if($i%2==0 && $i%3==0){
            $sum3 = $sum3 + $i;
        }
    }
    echo "2의 배수이면서 3의 배수인 수의 합 : $sum3";

?>