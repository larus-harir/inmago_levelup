<?php
$connect = mysql_connect("localhost","kimcw","1234");
mysql_select_db("kimcw_db", $connect);

$sql = "delete from stud_score where num = $num"; 
mysql_query($sql, $connect);

mysql_close($connect);

Header("Location:score_list.php"); 
?>