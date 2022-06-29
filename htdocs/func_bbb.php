<?php

    function bbb($a, $b, $c){
        $d = $a + $b - $c;
        return $d;
    }
 
    $i=500; 
    $j=200;
    $k=300;
    $m = bbb($i, $j, $k);
    //인자를 더 추가하는건 결과에 영향이 없지만
    //인자가 부족하면 오류발생

    echo $m;

?>