<?php
$connect = mysql_connect("localhost","kimgj","1234");
$db_con = mysql_select_db("kimgj_db", $connect);

$sql = "select * from membership where address like '%�λ�%' order by age";
$result = mysql_query($sql,$connect);
$fields=mysql_num_fields($result);
$number = 1;
?>

<h2>mysql_fetch_row()�� �̿��� ������ �б�</h2>
<table width= "800" border="1" cellpadding="10">
<tr align="center">
    <td bgcolor="#cccccc">�Ϸù�ȣ</td>
    <td bgcolor="#cccccc">���̵�</td>
    <td bgcolor="#cccccc">�����ȣ</td>
    <td bgcolor="#cccccc">�̸�</td>
    <td bgcolor="#cccccc">�ּ�</td>
    <td bgcolor="#cccccc">��ȭ��ȣ</td>
    <td bgcolor="#cccccc">����</td>
</tr>
<?
while ( $row = mysql_fetch_row($result)) {
echo "<tr>";

echo "<td> $number </td>";

for ($i=0; $i < $fields; $i++) {
    echo "<td> $row[$i] </td>";
}
echo "</tr>";

$number++;
}

mysql_close();
?>
</table>