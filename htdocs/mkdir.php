<head>
    <meta charset="UTF-8">
</head>
<?php 

$dirName = "test3";
// $_POST["ReqData"];

$makeDir = mkdir($dirName, '777');

if($makeDir){
	echo $dirName." 폴더 생성 완료!";
}
else {
	echo $dirName." 폴더 생성 실패!";
}

?>