<head>
    <meta charset="UTF-8">
</head>

<?php
$connect = mysql_connect("localhost","kimgj","1234");
mysql_select_db("kimgj_db", $connect);

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
$sql = "insert into sunjuk (num, name, kor, eng, math, tot, avg, grade)";
$sql .= " values ($num, '$name', $kor, $eng, $math, $tot, $avg, '$grade')";


$result = mysql_query($sql);
if ($result) 
    echo "레코드 삽입 완료!";
else
    echo "레코드 삽입 실패! 에러 확인 요망!";

mysql_close($connect);
?>
