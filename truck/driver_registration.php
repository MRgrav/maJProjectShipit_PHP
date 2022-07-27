<?php

//include_once "../config.php";

date_default_timezone_set("Asia/Dhaka");

include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");

$Id = $_POST['Id'];
$fname = $_POST['Fname'];
$phone = $_POST['ph'];
$mail = $_POST['ml'];
$pwd = $_POST['pwd'];
$dl = $_POST['drivingL'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

if (isset($_FILES['profile'])){
	$profile = $_FILES['profile']['name'];
	$pathinfo3 = pathinfo($profile);
	$extension3 = $pathinfo3['extension'];
	$new_name3 = "IMG" . date('dmyhiA') . "." . $extension3;
	$Path_pr = "../uploads/" . $new_name3;
}

if (isset($_FILES['dl_photo'])){
	$dl_photo = $_FILES['dl_photo']['name'];
	$pathinfo1 = pathinfo($dl_photo);
	$extension1 = $pathinfo1['extension'];
	$new_name1 = "DL-" . date('dmyhiA') . "." . $extension1;
	$Path_dl = "../uploads/" . $new_name1;
}

if (isset($_FILES['dob_photo'])){
	$dob_photo = $_FILES['dob_photo']['name'];
	$pathinfo2 = pathinfo($dob_photo);
	$extension2 = $pathinfo2['extension'];
	$new_name2 = "DB-" . date('dmyhiA') . "." . $extension2;
	$Path_db = "../uploads/" . $new_name2;
}

//check for duplicate entry
$sql_D = "SELECT * FROM `drivers` WHERE driverId = '$Id' ";
$sql_C = "SELECT * FROM `customers` WHERE userId = '$Id' ";

$st = 0;

if(mysqli_num_rows(mysqli_query($conn, $sql_D)) > 0 || mysqli_num_rows(mysqli_query($conn, $sql_C)) > 0){
	echo 2;
}else{
	$sql = "INSERT INTO `drivers` (`driverId`, `name`, `phone`, `mail`, `license`, `dob`, `gen`, `pwd`, `profile`, `dl_photo`, `dob_photo`, `status`) VALUES ('$Id', '$fname', '$phone', '$mail', '$dl', '$dob', '$gender', '$pwd', '$Path_pr', '$Path_dl', '$Path_db', '$st') ";
	$result = mysqli_query($conn, $sql);

	if($result){
		copy($_FILES['profile']['tmp_name'], $Path_pr);
		copy($_FILES['dl_photo']['tmp_name'], $Path_dl);
		copy($_FILES['dob_photo']['tmp_name'], $Path_db);
		echo 1;
	}else{
		echo 0;
	}
}

?>
