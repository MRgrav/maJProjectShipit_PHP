<?php
include "../common/heads.php";
session_start();
if (isset($_GET['order'])){
	$ordID = $_GET['order'];
}else{
	header("location:index.php");
}
$conn = mysqli_connect("localhost", "root", "", "majPro");
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
                               
                            </div>
                        </div>

                        <hr>
                        <input type='hidden' id='ordd' value="<?php echo $data['orderId']; ?>">
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
								});
								</script>
                            </div>                         
                            
                            <div class="orderDesc">
                                <p style="font-weight: 500; font-size: 20px;"><?php echo $data['orderName'];?></p>
                                <p  class="mb-3" style="color: rgb(57, 57, 57);"><?php echo $data['userId'];?></p>
                                <input type="hidden" id="drvv" value="<?php echo $_SESSION['ID'];?>">
                                
                                <h3 style="width: 100%; text-align: center;">Pick Your Order Soon!</h3>
                                <div class="flexc" style="align-items: center;">
                                    <div class="flexr justify-content-center row" style="flex-wrap: wrap; max-width: 425px; width: 100%;" >
                                        <div class="col p-1">
											<button class="btn btn-success shadow" id='ordNext' type='button' style="width: 100%;">Done</button>
                                        </div>
                                        <div class="col p-1">
											<a href="tel" class="call flexr shadow" style="width: 100%">
												<i class="bi bi-telephone-fill" style="font-size: 16px; color: azure;"></i>
												call
												<p>+91 <?php echo $data['phone'];?></p>
											</a>
                                        </div>
                                    </div>
                                </div>

                                <span class="p-1"></span>
                                <p class="mb-1">Status : out for pick up</p> 
                                <div class="flexr status-bar">
                                    <div class="flexc">
                                        <span class="bar bar-sta <?php if($data['status'] >= 2){ echo "bar-active"; } ?>"></span>
                                        <span class="bar-dot <?php if($data['status'] >= 2){ echo "dot-active"; } ?>"></span>
                                        <p class="p-active"><?php echo $data['orderFrom'];?></p>    
                                        <!--<p>10:30 am</p>-->
                                    </div>
                                    <div class="flexc" style="justify-content: space-between;">
                                        <span class="bar <?php if($data['status'] >= 3){ echo "bar-active"; } ?>"></span>
                                        <p class="p-active">23km</p>    
                                    </div>
                                    <div class="flexc">
                                        <span class="bar bar-end <?php if($data['status'] >= 4){ echo "bar-active"; } ?>"></span>
                                        <span class="bar-dot <?php if($data['status'] >= 4){ echo "dot-active"; } ?>"></span>
                                        <p class="text-right <?php if($data['status'] >= 4){ echo "p-active"; } ?>"><?php echo $data['orderTo'];?></p>    
                                        <!--<p>2.10 pm</p>-->
                                    </div>
                                </div>
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
                                   <?php echo $data['orderFrom']; ?>
                                </address>
                                <b style="color: rgb(57, 57, 57); font-size: 14px;">Delivery Address</b>
                                <address class="mb-3">
                                   <?php echo $data['orderTo']; ?>
                                </address> 
                                <div class="flexr align-items-center">
									<a class="btn btn-info shadow" target="_blank" href="https://www.google.com/maps/dir/<?php echo $data['orderFrom']."/".$data['orderTo'];?>">Get Direction<i class="ps-1 bi bi-geo-alt-fill text-white"></i></a>
									<p class="ps-2" style="color: gray;">Google Map</p>
									</div>
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
    function launc(){
		$("#inp1").val('');
	}
	$(document).ready(function(){
		
		$("#ordNext").on("click", function(e){
			e.preventDefault();
			const order = $("#ordd").val();
			const drv = $("#drvv").val();
			console.log(drv);
			console.log("a");
			Swal.fire({
			  title: 'Are you sure?',
			  text: "You want to proceed next!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes'
			}).then((result) => {
			  if (result.isConfirmed) {
				  $.ajax({
					url: "../customers/orderConfirm.php",
					type: "POST",	
					data: {order:order, drv:drv}, 
					success: function(res){
						console.log(res);
							if (res == 1) {
								 Swal.fire({
								  title: 'Order Proceed!',
								  icon: 'success',
								  timer: 1500,
								  showConfirmButton: false
								});
								setTimeout(function(){
									location.reload(true);
								},1200);
							}
							if (res == 3) {
								Swal.fire({
								  title: 'Order Delivered!',
								  icon: 'success',
								  timer: 1500,
								  showConfirmButton: false
								});
								setTimeout(function(){
									location.reload(true);
								},1200);
							}
							if (res == 2) {
								Swal.fire({
								  title: 'Sorry!',
								  icon: 'error',
								  timer: 1500,
								  showConfirmButton: false
								});
							}
					}
				})
			  }
			})
		});
	});
    </script>

<!--dock-->
<?php
include "../common/dock.php";
?>
</body>
</html>
