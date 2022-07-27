<?php
include "../common/heads.php";
include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");
session_start();
if (isset($_GET['order'])){
	$ordID = $_GET['order'];
}else{
	header("location:index.php");
}
$result = mysqli_query($conn, "SELECT * FROM `orders` INNER JOIN `customers` ON orders.user = customers.userId WHERE orders.orderId = '$ordID' ");
//inner join voters on candidates.cid = voters.regn
if (mysqli_num_rows($result) != 1){
	echo "
	<script>
		Swal.fire({
		  icon: 'error',
		  title: 'No Order Found!',
		  showConfirmButton: false,
		  timer: 1500
		})
		setTimeout(function(){
			history.back();
		}, 1400);
	</script>
	";
}
$data = mysqli_fetch_array($result);
?>

    <div class="container shadow p-0">
        <div style="display: flex; flex-direction: row;">

            <!--side-bar-->
            <?php
            include "../common/sideBar.php";
            ?>
            
            <!---main--->
            <div class="main">
                <div style="padding: 10px 0px; padding-top: 8vh;">
                    <div class="gen-page" style="align-items: flex-start;">
                        <div class="flexr" style="width: 100%; justify-content: space-between;">
                            <div class="flexr align-items-center">
                                <i class="bi bi-chevron-left" style="cursor: pointer;" onclick="history.back()"></i> 
                                <p style="font-size: 115%; color:rgb(57, 57, 57); margin: 0px;">My Order</p>
                            </div>
                            <div class="flexr nonee align-items-center">
                                <label for="sort" style="padding: 0 1rem; font-size: 16px;">sort</label>
                                <select name="" id="sort" style="width: max-content;">
                                    <option value="">Rating</option>
                                    <option value="">A - Z</option>
                                    <option value="">Z - A</option>
                                    <option value="">New - Old</option>
                                    <option value="">Old - New</option>
                                </select>
                            </div>
                        </div>

                        <hr>
                        <div class="pre-OVimg flexr align-items-start justify-content-center">
                            <div class="OVimg-group">
								<?php	$imgA1 = strtok($data['photos'], ","); ?>
                                <img class="OVimg" src="<?php echo $imgA1; ?>" id="mImg" alt="" width="300px" height="300px">
                                <div class="OVimg-group2">
									<?php
									while ($imgA1 !== false)
									{
										echo "<img class='selectableImg' src='".$imgA1."'>";
										$imgA1 = strtok(",");
									}  		
									?>
								</div>
								<script>
								$(".selectableImg").click(function(){
									$(".OVimg").attr('src', $(this).attr('src'));
									//var srcC = Imm.attr('src');
									//console.log(Imm);
									//$("")
								});
								</script>
                            </div>              
                                         
                            
                            <div class="orderDesc">
                                <div class="flexr justify-content-space-between">
                                    <div class="flexc" style="width: 100%;">
                                        <p style="font-weight: 500; font-size: 20px;"><?php echo $data['orderName'];?></p>
                                        <p><?php echo $data['userId'];?></p>
                                    </div>
                                    <div class="flexc p-2" style="width: fit-content;">
                                        <a href="tel:<?php echo $data['phone'];?>" class="call flexr shadow mb-2">
                                            <i class="bi bi-telephone-fill" style="font-size: 16px; color: azure;"></i>
                                            call
                                            <p>+91 <?php echo $data['phone'];?></p>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="flexc" >
                                    <div id="betLoad" style="height: 200px; overflow-y: auto; border: 1px solid rgb(121, 121, 121);">
                                        <!-- load table-->
                                    </div>
                                    <div class="flexr">
                                        <input type="text" placeholder="Give your best offer" id="offerAmount" class="form-control shadow" style="border-radius: 0px 0px 0px 6px;" onkeypress="return event.charCode>=48 && event.charCode<=57">
                                        <button type="submit" class="btn btn-success shadow" value="<?php echo $ordID;?>" id="offer" type="submit" style="width: 100px; border-radius: 0px 0px 6px 0px;">offer</button>
                                    </div>
                                </div>
                                <script>
                                $(document).ready(function(){
									$("#offer").click(function(e){
										e.preventDefault();
										const amt = $("#offerAmount").val();
										const ord = $("#offer").val();
										
										$.ajax({
											url: "../common/orderBack.php",
											type: "POST",
											data: {amt:amt, ord:ord},
											success: function(res){
												console.log(ord, amt, res);
												if (res == 1){
													reloadOffer();
													console.log(res);
													$("#offerAmount").val('');
												}
												if (res == 5){
													console.log(res);
													Swal.fire({
														icon: 'warning',
														title: 'Sorry, You can not offer!',
														text: "Add a truck soon.",
														showConfirmButton: true,
														//confirmButtonText: 'Add Truck',
														showCancelButton: true
													}).then((result) => {
														if(result.isConfirmed){
														setTimeout(function(){
															location.href="../truck/addTruck.php";
														}, 500);
													}
													});
												}
											},
											error: function(res){
												console.log(res);
											}
										});
									});
									
								});
                                </script>
                            
                                <span class="p-1"></span>
                                <details class="mb-3">
                                    <table  style="margin-left: 2rem;">
                                        <tr>
                                            <td>weight</td><td style="padding: 0 10px;">:</td><td><?php echo $data['orderWegt'];?> KG</td>
                                        </tr>
                                        <tr>
                                            <td>Size</td><td style="padding: 0 10px;">:</td><td><?php echo $data['orderSize'];?> feet</td>
                                        </tr>
                                    </table>
                                </details>
                                <b style="color: rgb(57, 57, 57); font-size: 14px;">Pick up Address</b>
                                <address class="mb-3">
                                    <?php echo $data['orderFrom'];?>
                                </address>
                                <b style="color: rgb(57, 57, 57); font-size: 14px;">Delivery Address</b>
                                <address class="mb-3">
                                    <?php echo $data['orderTo'];?>
                                </address>
                                <p>Distance : <?php echo $data['orderDist'];?> km</p>
                            </div>
                        </div>     
                    </div>
                </div>


                <!--foooter-->
                <?php
                include "../common/foot.php";
                ?>
            </div>
        </div>
    </div>
    <script>
	function reloadOffer(){
		//will reload latest offer
		const ord = $("#offer").val();
		$.ajax({
			url: "../common/orderBack.php",
			type: "POST",
			data: {ord:ord},
			success: function(res){
				$("#betLoad").html(res);
			}
		});
	}
    function launc(){
		reloadOffer();
	}
	setInterval(reloadOffer, 1000);
    </script>

<!--dock-->
<?php
include "../common/dock.php";
?>
</body>
</html>
