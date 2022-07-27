<?php

date_default_timezone_set("Asia/Dhaka");
session_start();
$id = $_SESSION['ID'];
include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");
$sql = "UPDATE `truck` SET ";
	
//checking changed files
if ($_FILES['insPhoto']['name'] != ''){
	$insPhoto = $_FILES['insPhoto'];
	$extInfo = pathinfo($insPhoto['name']);
	$insPath = "../uploads/IN-" . date('ydimshA') . "." . $extInfo['extension']; 
	$sql = $sql . "insPhoto = '$insPath' ";
	copy($insPhoto['tmp_name'], $insPath);
}
if ($_FILES['polPhoto']['name'] != ''){
	$polPhoto = $_FILES['polPhoto'];
	$extInfo = pathinfo($polPhoto['name']);
	$polPath = "../uploads/PO-" . date('ydimshA') . "." . $extInfo['extension'];
	$sql = $sql . "polPhoto = '$polPath' ";
	copy($polPhoto['tmp_name'], $polPath);
}
if ($_FILES['frontPhoto']['name'] != ''){
	$frontPhoto = $_FILES['frontPhoto'];
	$extInfo = pathinfo($frontPhoto['name']);
	$frontPath = "../uploads/FR-" . date('ydimshA') . "." . $extInfo['extension'];
	$sql = $sql . "frontPhoto = '$frontPath' ";
	copy($frontPhoto['tmp_name'], $frontPath);
}
if ($_FILES['sidePhoto']['name'] != ''){
	$sidePhoto = $_FILES['sidePhoto'];
	$extInfo = pathinfo($sidePhoto['name']);
	$sidePath = "../uploads/SD-" . date('ydimshA') . "." . $extInfo['extension'];
	$sql = $sql . "sidePhoto = '$sidePath' ";
	copy($sidePhoto['tmp_name'], $sidePath);
}
if (isset($_POST['f'])){ 
	$val = $_POST['f'];
	$name = $_POST['fd'];
	switch($name){
		case 'ins':
			$name = "insurance";
			break;
		case 'pol':
			$name = "polution";
			break;
		case 'ins':
			$name = "oil";
			break;
	}
	$sql = $sql . " `$name` = '$val' ";
}


$sql = $sql . " WHERE owner = '$id' ";
if (mysqli_query($conn, $sql)){
	echo 1;
}else{
	echo 2;
}

//echo $sql;
?>
