<?php

    $a = 2;
    $b = 6;
    $c = 9;

    if($a > $b){
        if($a > $c){
            $max1 = $a;
            if($b > $c){
                $max2 = $b;
                $max3 = $c;
            }else{
                $max2 = $c;
                $max3 = $b;
            }
        }
    }

    if($b > $a){
        if($b > $c){
            $max1 = $b;
            if($a > $c){
                $max2 = $a;
                $max3 = $c;
            }else{
                $max2 = $c;
                $max3 = $a;
            }
        }
    }

    if($c > $a){
        if($c > $b){
            $max1 = $c;
            if($a > $b){
                $max2 = $a;
                $max3 = $b;
            }else{
                $max2 = $b;
                $max3 = $a;
            }
        }
    }

    echo "
        $a , $b , $c <br>
        $max1 , $max2 , $max3
    ";

?>