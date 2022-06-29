<?php

echo "
<html>
<body>
<table border='1' width='100%'>";

for($i = 1; $i <= 9; $i++){
    echo "<tr align='center'>";
    for($j = 2; $j <= 9; $j++){
        $num = $i * $j;
        echo"<td> $j x $i = $num </td>";
    }
    echo "</tr>";
}

echo "
    </table>
    </body>
    </html>
";


?>