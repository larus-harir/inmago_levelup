<head>
    <meta charset="UTF-8">
</head>
<?php
    $num=2;
    echo "
    <html>
    <body>
    <h3>2단 구구단표 만들기</h3>
    <table border='1' width='100'>";

    $b=1;
    while ($b<=9){
        $c = $a * $b;
        echo "<tr><td align='center'>$num x $b = $c</td></tr>"; 
        $b++; 
    }
    
    echo "
        </table>
        </body>
        </html>
    ";
?>