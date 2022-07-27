<?php
session_start();
include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");

date_default_timezone_set("Asia/Dhaka");

$model = $_POST['model'];
$rc = $_POST['rcn'];
$ins = $_POST['ins'];
$pol = $_POST['pol'];
$oil = $_POST['oil'];
$rcPhoto = $_FILES['rcPhoto'];
$insPhoto = $_FILES['insPhoto']; 
$polPhoto = $_FILES['polPhoto'];
$frontPhoto = $_FILES['frontPhoto'];
$sidePhoto = $_FILES['sidePhoto'];

$orderId = date('ymdhms');
$user = $_SESSION['ID'];

//rc path
$extInfo = pathinfo($rcPhoto['name']);
$rcPath = "../uploads/RC-" . date('ydimshA') . "." . $extInfo['extension']; 

//ins path
$extInfo = pathinfo($insPhoto['name']);
$insPath = "../uploads/IN-" . date('ydimshA') . "." . $extInfo['extension']; 

//pol path
$extInfo = pathinfo($polPhoto['name']);
$polPath = "../uploads/PO-" . date('ydimshA') . "." . $extInfo['extension']; 

//front path
$extInfo = pathinfo($frontPhoto['name']);
$frontPath = "../uploads/FR-" . date('ydimshA') . "." . $extInfo['extension']; 

//side path
$extInfo = pathinfo($sidePhoto['name']);
$sidePath = "../uploads/SD-" . date('ydimshA') . "." . $extInfo['extension']; 

$sql = "INSERT INTO `truck` (`rc`, `model`, `insurance`, `polution`, `oil`, `rcPhoto`, `insPhoto`, `polPhoto`, `frontPhoto`, `sidePhoto`, `request`, `owner`) 
VALUES ('$rc', '$model', '$ins', '$pol', '$oil', '$rcPath', '$insPath', '$polPath', '$frontPath', '$sidePath', '1', '$user' )";

if(mysqli_query($conn, $sql)){
	//copy file
	copy($rcPhoto['tmp_name'], $rcPath);
	copy($insPhoto['tmp_name'], $insPath);
	copy($polPhoto['tmp_name'], $polPath);
	copy($frontPhoto['tmp_name'], $frontPath);
	copy($sidePhoto['tmp_name'], $sidePath);
	echo 1;
}else{
	echo 2;
}

?>
