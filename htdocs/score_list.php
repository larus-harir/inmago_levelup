<?php

$connect = mysql_connect("localhost","kimcw","1234"); 
mysql_select_db("kimcw_db", $connect); 
if ($mode == "insert"){ 
    $sum = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
    $avg = $sum/5;
    $sql = "insert into stud_score (name, sub1, sub2, sub3, sub4, sub5, sum, avg) values";
    $sql.= "('$name', $sub1, $sub2, $sub3, $sub4, $sub4, $sum, $avg)";

    $result = mysql_query($sql, $connect);
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
    <h3>1) ���� �Է� �ϱ�</h3>
    <form action="score_list.php?mode=insert" method='post'>
        <table width="720" border="1" cellpadding="5">
            <tr>
                <td> �̸� : <input type="text" size="6" name="name">&nbsp;
                    ����1 : <input type="text" size="3" name="sub1">&nbsp;
                    ����2 : <input type="text" size="3" name="sub2">&nbsp;
                    ����3 : <input type="text" size="3" name="sub3">&nbsp;
                    ����4 : <input type="text" size="3" name="sub4">&nbsp;
                    ����5 : <input type="text" size="3" name="sub5">
                </td>
                <td align="center">
                    <input type="submit" value="�Է�">
                </td>
            </tr>
        </table>
    </form>
<p>
<h3>2) ���� ��� �ϱ�</h3> 
<p>
    <a href ="score_list.php?mode=big_first">[������ ���]

    </a> 
    <a href ="score_list.php?mode=small_first">
        [�������� ���]
    </a>
</p>
<p>
    <table width="720" border="1" cellpadding="5">
        <tr align="center" bgcolor="#eeeeee">
            <td>��ȣ</td>
            <td>�̸�</td>
            <td>����1</td>
            <td>����2</td>
            <td>����3</td>
            <td>����4</td>
            <td>����5</td>
            <td>�հ�</td>
            <td>���</td>
            <td>&nbsp;</td>
        </tr>
<?php

// if ($mode == "big_first")
//     $sql = "select * from stud_score order by sum desc";
// else if ($mode == "small_first")
//     $sql = "select * from stud_score order by sum";
// else 
    $sql = "select * from stud_score";

$result = mysql_query($sql);

$count = 1;

while ($row = mysql_fetch_array($result)){
    $avg = round($row[avg], 1);

    $num = $row[num];

    echo ("<tr align='center'>
        <td> $count </td>
        <td> $row[name] </td>
        <td> $row[sub1] </td>
        <td> $row[sub2] </td>
        <td> $row[sub3] </td>
        <td> $row[sub4] </td>
        <td> $row[sub5] </td>
        <td> $row[sum] </td>
        <td> $avg </td>
        <td> <a href='score_delete.php?num=$num'>[����]</a></td>
        </tr>
        ");

    $count++;
}


$name = array();
$sub1 = array();
$sub2 = array();
$sub3 = array();
$sub4 = array();
$sub5 = array();
$sum = array();
$avg = array();
$num = array();

for($i = 1; $i<=5-1; $i++){
    $sqlll = "select * from stud_score where num=$i";
    $result = mysql_query($sqlll);
    $row = mysql_fetch_array($result);

    $name[$i]=$row[name];
    $sub1[$i]=$row[sub1];
    $sub2[$i]=$row[sub2];
    $sub3[$i]=$row[sub3];
    $sub4[$i]=$row[sub4];
    $sub5[$i]=$row[sub5];
    $sum[$i]=$row[sum];
    $avg[$i]=$row[avg];
    $num[$i]=$row[num];

    for($j = 1; $j<=$i-1-i; $j++){

        if($avg[$j]<$avg[$j+1]){
            $temp = $num[$j];
            $num[$j] = $num[$j+1];
            $num[$j+1] = $temp;
        }
    }
}

echo "�̸� ����1 ����2 ����3 ����4 ����5 �հ� ��� ���� <br>";
for($i = 1; $i<=5; $i++){
    echo "$name[$i],
    $sub1[$i], 
    $sub2[$i], 
    $sub3[$i], 
    $sub4[$i], 
    $sub5[$i], 
    $sum[$i], 
    $avg[$i], 
    $num[$i]
    <br>";
}

mysql_close();

?>

</table>

