<head>
    
</head>
<?php
$connect = mysql_connect("localhost","kimgj","1234");
mysql_select_db("kimgj_db", $connect);

$ip = $_SERVER['REMOTE_ADDR'];

$sql = "insert into memberTBL (id, name, passwd, passwd_confirm, gender, phone1, phone2, phone3, address, movie, book, shop, sport, intro, userIp)";
$sql .= " values ('$id', '$name', '$passwd', '$passwd_confirm', '$gender', $phone1, $phone2, $phone3, '$address', '$movie', '$book', '$shop', '$sport', '$intro', '$ip')";

$result = mysql_query($sql);
if ($result) 
    echo "���ڵ� ���� �Ϸ�!";
else
    echo "���ڵ� ���� ����! ���� Ȯ�� ���!";

mysql_close($connect);
?>
