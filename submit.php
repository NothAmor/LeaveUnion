<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<?php
header("Content-Type: text/html; charset=UTF-8");
require_once("db.php");

$name = $_POST["name"];
$phone = $_POST["phone"];
$building = $_POST["building"];
$chamber = $_POST["chamber"];
$fname = $_POST["fname"];
$fri_yn = $_POST["fri_yn"];
$sat_yn = $_POST["sat_yn"];

if($con->connect_error){
	die('<div class="alert alert-danger" role="alert">连接失败<br />'.$con->connect_error);
}
echo '<div class="alert alert-success" role="alert">连接数据库成功!<br />';

if($building == "1") {
	$sql = "INSERT INTO information1(name,phone,building,chamber,fname,fri_yn,sat_yn) VALUES('$name','$phone','$building','$chamber','$fname','$fri_yn','$sat_yn')";
} else if($building == "3") {
	$sql = "INSERT INTO information3(name,phone,building,chamber,fname,fri_yn,sat_yn) VALUES('$name','$phone','$building','$chamber','$fname','$fri_yn','$sat_yn')";
} else if($building == "5") {
	$sql = "INSERT INTO information5(name,phone,building,chamber,fname,fri_yn,sat_yn) VALUES('$name','$phone','$building','$chamber','$fname','$fri_yn','$sat_yn')";
}

if($con->query($sql)===true){
	echo '数据提交成功！</div>';
}else {
	echo '数据提交失败，请联系系统管理员</div>'.$con->error;
}
$con->close();

?>