<head>
    <meta charset="UTF-8">
</head>
<?php

    $age = 830;

    $timeOver = "no";

    $card = "no";

    $youkong = "yes";

    if($age<3){
        $fee = "무료";
    }elseif(($age>=3 && $age <=13) || ($timeOver =="yes")){
        $fee = "4000원";
    }elseif(($age >= 14 && $age <=18) || ($age >= 70) || ($youkong == "yes") || ($card == "yes")){
        $fee="8000원";
    }else{
        $fee = "10000원";
    }

    echo "
    복지카드 소지 : $card <br>
    국가유공자증 소지 : $youkong <br>
    17시 10분 이후 입장 : $timeOver <br>
    나이 : $age 세<br><br>
    입장료 : $fee
    ";

?>