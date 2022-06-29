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
    <h3>1) 성적 입력 하기</h3>
    <form action="score_list.php?mode=insert" method='post'>
        <table width="720" border="1" cellpadding="5">
            <tr>
                <td> 이름 : <input type="text" size="6" name="name">&nbsp;
                    과목1 : <input type="text" size="3" name="sub1">&nbsp;
                    과목2 : <input type="text" size="3" name="sub2">&nbsp;
                    과목3 : <input type="text" size="3" name="sub3">&nbsp;
                    과목4 : <input type="text" size="3" name="sub4">&nbsp;
                    과목5 : <input type="text" size="3" name="sub5">
                </td>
                <td align="center">
                    <input type="submit" value="입력">
                </td>
            </tr>
        </table>
    </form>
<p>
<h3>2) 성적 출력 하기</h3> 
<p>
    <a href ="score_list.php?mode=big_first">[성적순 출력]

    </a> 
    <a href ="score_list.php?mode=small_first">
        [성적역순 출력]
    </a>
</p>
<p>
    <table width="720" border="1" cellpadding="5">
        <tr align="center" bgcolor="#eeeeee">
            <td>번호</td>
            <td>이름</td>
            <td>과목1</td>
            <td>과목2</td>
            <td>과목3</td>
            <td>과목4</td>
            <td>과목5</td>
            <td>합계</td>
            <td>평균</td>
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
        <td> <a href='score_delete.php?num=$num'>[삭제]</a></td>
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

echo "이름 과목1 과목2 과목3 과목4 과목5 합계 평균 석차 <br>";
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

