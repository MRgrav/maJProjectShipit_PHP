<?php

//include_once "../config.php";
include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");

$Id = $_POST['Id'];
$pwd = $_POST['pwd'];


session_start();
session_unset();
$lgn_c = "SELECT * FROM `admin` WHERE BINARY AID = '$Id' && BINARY PWD = '$pwd' ";
$num = mysqli_num_rows(mysqli_query($conn, $lgn_c));
if ($num >= 1){
	echo 1;
	//$_SESSION['ID'] = $Id;
	//$_SESSION['USER'] = "customers";
	$_SESSION['log'] = "yes";
	//$PIC = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `customers` WHERE BINARY userId = '$Id' "));
	//$_SESSION['PROFILE'] = $PIC['profile'];
}else{
	echo 0;
}

?>
