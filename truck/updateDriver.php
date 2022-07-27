<?php
date_default_timezone_set("Asia/Dhaka");
session_start();
$id = $_SESSION['ID'];
include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");
$name = $_POST['Fname'];
$dl = $_POST['dl'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];

//echo $profile['name'];

$sql = "UPDATE `drivers` SET name = '$name', license = '$dl', dob = '$dob', gen = '$gender', ";

//checking files 
if (isset($_POST['pwd'])){
	$pwd = $_POST['pwd'];
	$sql = $sql . "pwd = '$pwd', ";
}

//checking changed files
if ($_FILES['profile']['name'] != ''){
	$profile = $_FILES['profile'];
	$extInfo = pathinfo($profile['name']);
	$profilePath = "../uploads/" . date('ydimshA') . "." . $extInfo['extension']; 
	$sql = $sql . "profile = '$profilePath', ";
	copy($profile['tmp_name'], $profilePath);
}
if ($_FILES['dl_photo']['name'] != ''){
	$dl_photo = $_FILES['dl_photo'];
	$extInfo = pathinfo($dl_photo['name']);
	$dlPath = "../uploads/DL-" . date('ydimshA') . "." . $extInfo['extension'];
	$sql = $sql . "dl_photo = '$dlPath', ";
	copy($dl_photo['tmp_name'], $dlPath);
}
if ($_FILES['dob_photo']['name'] != ''){
	$dob_photo = $_FILES['dob_photo'];
	$extInfo = pathinfo($dob_photo['name']);
	$dobPath = "../uploads/DB-" . date('ydimshA') . "." . $extInfo['extension'];
	$sql = $sql . "dob_photo = '$dobPath', ";
	copy($dob_photo['tmp_name'], $dobPath);
}

//update
$sql = $sql . " phone = '$phone', mail = '$mail' WHERE driverId = '$id' ";
if (mysqli_query($conn, $sql)){
	echo 1;
}else{
	echo 2;
}
?>
