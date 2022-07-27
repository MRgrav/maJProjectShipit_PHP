<?php
include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");
session_start();

$lcl = $_SESSION['LOCAL'];
$id = $_SESSION['ID'];

//for live bettings
$result2 = mysqli_query($conn, "SELECT * FROM `orders` INNER JOIN `offer` ON orders.orderId = offer.orderID WHERE orders.status = 1 AND offer.truck = '$id' AND orders.nearby = '$lcl' ");
if (mysqli_num_rows($result2) > 0){
	echo "
	<b style='width: 95%; max-width: 660px;'>My Deals</b>";
	while ($data2 = mysqli_fetch_assoc($result2)){
		echo "
		<a href='./offer.php?order=".$data2['orderId']."' class='flexr align-items-end Offer-active'>
			<div class='flexc'>
				<h4 class='pb-2 ' style='margin: 0;'>".$data2['orderName']."</h4>
				<p>".$data2['orderFrom'].", ".$data2['orderDist']."</p>
				<p>My Offer : <b style='font-size: 18px; color: red;'>".$data2['price']."/-</b></p>
			</div>
			<div class='flexc' style='align-items: flex-end;'>
				<p class='pb-2'>".$data2['user']."</p>
				<p>Best Offer</p>";
		$ordID = $data2['orderId'];
		$minData = mysqli_fetch_array(mysqli_query($conn, "SELECT MIN(price) As min FROM `offer` WHERE offer.orderID = '$ordID' "));	
		echo "	<p><b style='color: orangered; font-size: 20px;'>".$minData['min']."/-</b></p>
			</div>
		</a>
		";
	}
}

//for new orders
$result = mysqli_query($conn, "SELECT * FROM `orders` WHERE status = 1 AND nearby = '$lcl' ");
if (mysqli_num_rows($result) > 0){
	echo "<b style='width: 95%; max-width: 660px;'>Others</b>";
	while($data = mysqli_fetch_assoc($result)){
		echo "
		<a href='./offer.php?order=".$data['orderId']."' class='flexr Offer-other'>
			<div class='flexc'>
				<h5>".$data['orderName']."</h5>
				<div class='flexr' style='justify-content: space-between;'>
					<p>".$data['orderFrom']."</p>
					<i class='p-2 pe-3 bi bi-arrow-right'></i>
					<p class='text-right'>".$data['orderTo']."</p>
				</div>
			</div>
		</a>
		";
	}
}
?>
