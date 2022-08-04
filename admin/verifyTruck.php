<?php

include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");

if (isset($_GET['uTr'])){
	$rc = $_GET['uTr'];
	$sql = "UPDATE `truck` SET request = '2' WHERE rcPhoto = '$rc' ";
	echo $sql;
	$res = mysqli_query($conn, $sql);
	if ($res){
		echo 1;
	}else{
		echo 0;
	}
	header("location:trucks.php");
}else{
	header("location:index.php");
}
?>
