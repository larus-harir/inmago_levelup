<?php
$connect = mysql_connect("localhost","imsc","1234");
mysql_select_db("imsc_db", $connect);

$tot = $kor+$eng+$math;
$avg = $tot/3;
if($avg >= 90){
    $grade="A";
}else if($avg >= 80){
    $grade="B";
}else if($avg >= 70){
    $grade="C";
}else if($avg >= 60){
    $grade="D";
}else{
    $grade="F";
}

$sql = "insert into sungjuk (num, name, kor, eng, math, tot, avg, grade)";
$sql .= " values ($num, '$name', $kor, $eng, $math, $tot, $avg, '$grade')";

$result = mysql_query($sql);
if ($result) 
    echo "���ڵ� ���� �Ϸ�!";
else
    echo "���ڵ� ���� ����! ���� Ȯ�� ���!";

mysql_close($connect);
?>
