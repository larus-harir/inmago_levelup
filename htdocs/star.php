<?php

    for($i = 1; $i<=10; $i++){
        for($j = 1; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }

    echo"<br>";

    for($i = 10; $i>=1; $i--){
        for($j = $i; $j>=1; $j--){
            echo "*";
        }
        echo "<br>";
    }

?>