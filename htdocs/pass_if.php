<head>
    <meta charset="UTF-8">
</head>
<?php
    $result = "불합격";
    if($pil >=70 && $sil >=80){
        $result = "합격";
    }

    echo "
        필기점수 : $pil, 실기점수 : $sil <br>
        결과 : $result
    ";

?>