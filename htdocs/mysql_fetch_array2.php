<?php
$connect = mysql_connect("localhost","kimgj","1234");
$db_con = mysql_select_db("kimgj_db", $connect);

$sql = "select * from membership;";
$result = mysql_query($sql, $connect);

$number = 1;
?>

<h2>mysql_fetch_array()를 이용한 데이터 읽기</h2>
<table width= "800" border="1" cellpadding="10">
<tr align="center">
    <td bgcolor="#cccccc">일련번호</td>
    <td bgcolor="#cccccc">아이디</td>
    <td bgcolor="#cccccc">이름</td>
    <td bgcolor="#cccccc">주소</td>
</tr>

<?php
    while($row = mysql_fetch_array($result)){
        echo    "
        <tr>
            <td>$number</td>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[address]</td>
        </tr>
        ";
        $number++;
    }
?>