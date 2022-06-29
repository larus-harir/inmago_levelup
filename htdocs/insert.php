<head>
    <meta charset="UTF-8">
</head>
<?php
$connect = mysql_connect("localhost","ojuha","1234");
mysql_select_db("ojuha_db", $connect);

$sql = "insert into biz_card (num, name, company, tel, hp, address)";
$sql .= " values (1, '김형주', '이엔에스컴퍼니', '032-862-2600', ";
$sql .= " '010-6359-0617', '인천광역시 미추홀구')";

$result = mysql_query($sql);
if ($result) 
    echo "레코드 삽입 완료!";
else
    echo "레코드 삽입 실패! 에러 확인 요망!";

mysql_close($connect);
?>
