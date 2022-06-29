<?php
$connect = mysql_connect("localhost","kimgj","1234");
$db_con = mysql_select_db("kimgj_db", $connect);

$sql = "select * from membership;";
$result = mysql_query($sql, $connect);

$number = 1;
?>
<h2>�� mysql_fetch_array()�� �̿��� ������ �б�</h2>
<table width= "800" border="1" cellpadding="10">
<tr align="center">
    <td bgcolor="#cccccc">�Ϸù�ȣ</td>
    <td bgcolor="#cccccc">���̵�</td>
    <td bgcolor="#cccccc">�̸�</td>
    <td bgcolor="#cccccc">������ȣ</td>
    <td bgcolor="#cccccc">�ּ�</td>
    <td bgcolor="#cccccc">��ȭ��ȣ</td>
    <td bgcolor="#cccccc">����</td>
</tr>
<?php
while ( $row = mysql_fetch_array($result)) 
{
echo "
<tr>
    <td> $number </td>
    <td> $row[id] </td>
    <td> $row[name] </td>
    <td> $row[post_num] </td>
    <td> $row[address] </td>
    <td> $row[tel] </td>
    <td> $row[age] </td>
</tr>
";
$number++;
}

mysql_close();
?>
</table>