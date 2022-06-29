<?php
    $a=setcookie("userid", "kdhong");
    $b=setcookie("username", "홍길동", time()+60);

    if($a and $b){
        echo "쿠키 'userid'와 'username' 생성완료! <br>";
        echo "쿠키 'username'은 60초(1분)간 지속됨!";
    }
?>
<head>
    <meta charset="UTF-8">
</head>