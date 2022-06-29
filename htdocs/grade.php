<head>
    <meta charset="UTF-8">
</head>

<?php

    $sum = $kor+$eng+$math;
    $avg = $sum / 3;

    if($avg >= 95) {
        $grade = "A+";
    }elseif($avg >= 90){
        $grade = "A";
    }elseif($avg >= 85) {
        $grade = "B+";
    }elseif($avg >= 80) {
        $grade = "B";
    }elseif($avg >= 75) {
        $grade = "C+";
    }elseif($avg >= 70) {
        $grade = "C";
    }elseif($avg >= 65) {
        $grade = "D+";
    }elseif($avg >= 60) 
    {$grade = "D";
    }else {
        $grade = "F";
    }

    echo "
        국 : $kor , 영 : $eng , 수 : $math <br>
        총합 : $sum <br>
        평균 : $avg <br>
        등급 : $grade 
    ";

?>