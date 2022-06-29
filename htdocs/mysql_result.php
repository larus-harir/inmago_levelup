<?php
$connect = mysql_connect("localhost","kimgj","1234");
$db_con = mysql_select_db("kimgj_db", $connect);

$sql = "select * from membership where address like '%�λ�%' order by age";
$result = mysql_query($sql,$connect);
$records = mysql_num_rows($result);
$fields=mysql_num_fields($result);

$number = 1;
?>

<h2>mysql_result()�� �̿��� ������ �б�</h2>
<table width= "800" border="1" cellpadding="10">
<tr align="center">
    <td bgcolor="#cccccc">�Ϸù�ȣ</td>
    <td bgcolor="#cccccc">���̵�</td>
    <td bgcolor="#cccccc">������ȣ</td>
    <td bgcolor="#cccccc">�̸�</td>
    <td bgcolor="#cccccc">�ּ�</td>
    <td bgcolor="#cccccc">��ȭ��ȣ</td>
    <td bgcolor="#cccccc">����</td>
</tr>
<?
for ($i = 0; $i < $records; $i++){
   echo "<tr>";
   echo "<td> $number </td>";
      for ($j = 0; $j < $fields; $j++) {
         $data = mysql_result($result, $i, $j);
         echo "<td> $data </td>";
      }
echo "</tr>";
$number++;
}

mysql_close();
?>
</table>