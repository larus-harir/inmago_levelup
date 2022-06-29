<?php
$connect = mysql_connect("localhost","imsc","1234");
$db_con = mysql_select_db("imsc_db", $connect);

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

$sql = "select * from sungjuk;";
$result = mysql_query($sql, $connect);

?>
<table width= "800" border="1" cellpadding="10">
<tr align="center">
    <td bgcolor="#cccccc">번호</td>    
    <td bgcolor="#cccccc">이름</td>
    <td bgcolor="#cccccc">국어</td>
    <td bgcolor="#cccccc">영어</td>
    <td bgcolor="#cccccc">수학</td>
    <td bgcolor="#cccccc">합산</td>
    <td bgcolor="#cccccc">평균</td>
    <td bgcolor="#cccccc">등급</td>
</tr>
<?php
while ( $row = mysql_fetch_array($result)) 
{
echo "
<tr>
    <td> $row[num] </td>
    <td> $row[name] </td>
    <td> $row[kor] </td>
    <td> $row[eng] </td>
    <td> $row[math] </td>
    <td> $row[tot] </td>
    <td> $row[avg] </td>
    <td> $row[grade] </td>
</tr>
";
}

mysql_close();
?>
</table>