<?php
include "../config.php";
include "../common/heads.php";
session_start();
$_SESSION["PAGE"] = "truck";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");
$dock = 'home';
$me = $_SESSION['ID'];
?>

    <div class="container shadow p-0">
		<input type="hidden" id="drvv" value="<?php echo $_SESSION['ID'];?>">
        <div style="display: flex; flex-direction: row;">

            <!--side-bar-->
            <?php
            include "../common/sideBar.php";
            ?>

            <!---main--->
            <div class="main" style="padding-top: 8vh;">
				<!--Locate Me-->
                <?php //include_once "../common/locateMe.php"; ?>
                
                <!--Orders-->
                <?php
                if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `orders` WHERE status = 2 OR status = 3 AND driver = '$me' "))>0){ 
					$sqlLive = "SELECT * FROM `orders` INNER JOIN `customers` ON orders.user = customers.userId WHERE status = 2 OR status = 3 AND orders.driver = '$me' " ;
					$liveData = mysqli_fetch_array(mysqli_query($conn, $sqlLive));
				echo "
				<input type='hidden' id='ordd' value='".$liveData['orderId']."'>
                <div class='flexc align-items-center p-3' id=''>
					<div class='flexc border shadow p-3 mb-3' style='width: 95%; max-width: 700px; border-radius: 8px; background-color: rgb(189, 254, 189);'>
						<div class='flexr justify-content-space-between'>
							<div class='flexc' style='width: 100%;'>
								<h4 style='margin: 0;'>".$liveData['orderName']."</h4>
								<p>".$liveData['user']."</p>
							</div>
							<div class='flexc' style='width: fit-content; height: 10px;'>
								<a href='tel:".$liveData['phone']."' class='call flexr shadow mb-2'>
									<i class='bi bi-telephone-fill' style='font-size: 16px; color: azure;'></i>
									call
									<p>+91 ".$liveData['phone']."</p>
								</a>
							</div>
						</div>
						";
						$imgA1 = strtok($liveData['photos'], ","); 
						echo "
						<img src='".$imgA1."' style='width: 100%; max-width: 500px; height: 300px; margin: 4px 0px; align-self: center;'>
						<h3 style='width: 100%; text-align: center; padding-top: 1rem;'>";
						switch ($liveData['status']){
							case 2:
								echo "Order is ready to pick up!";
								break;
							case 3:
								echo "Order is ready to deliver!";
								break;
							case 4:
								echo "Order has been delivered!";
								break;
						}
						echo "</h3>
						<div class='nonee row ps-4 pe-4 '>
							<label for='vrCd' class='col-8 p-2 text-center form-control'>1 + 9</label>
							<input type='text' class='col-4 form-control mb-2' maxlength='4' minlength='4' id='vrCd' placeholder='Enter the verification code'>
						</div>
						<button class='btn btn-success mb-3' id='ordNext' type='button'>Done</button>
						<div class='flexr status-bar'>
							<div class='flexc'>
								<span class='bar bar-sta "; if ($liveData['status'] >= 2){ echo "bar-active"; } echo "'></span>
								<span class='bar-dot "; if ($liveData['status'] >= 2){ echo "dot-active"; } echo "'></span>
								<p class='p-active'>".$liveData['orderFrom']."</p>   
							</div>
							<div class='flexc' style='justify-content: space-between;'>
								<span class='bar "; if ($liveData['status'] >= 3){ echo "bar-active"; } echo "'></span>
								<p  class='p-active'>23km</p>    
							</div>
							<div class='flexc'>
								<span class='bar bar-end "; if ($liveData['status'] >= 4){ echo "bar-active"; } echo "'></span>
								<span class='bar-dot "; if ($liveData['status'] >= 4){ echo "dot-active"; } echo "'></span>
								<p class='text-right "; if ($liveData['status'] >= 4){ echo "p-active"; } echo "'>".$liveData['orderTo']."</p> 
							</div>
						</div>
					</div>
                </div>
                "; }
                ?>
				<div class="flexc align-items-center p-3" id="ads">

                    <hr>
                    <!--other availabe shiping request-->
                    <div id="othersL" style="padding: 4px; margin: 0px; max-width: 700px; width: 95%;"></div>
                </div>

                <div style="display: flex; flex-direction: column; justify-content: center; width: 100%;">
                    <h3 style="text-align: center; padding-top: 5rem;"><b>Shippit</b></h3>
                    <div class="default-truck">
                        <div class="flexc">
                           <input type="text" class="form-control mb-2" name="local" value="<?php if(isset($_SESSION['LOCAL'])){ echo $_SESSION['LOCAL'];} ?>" id="local" placeholder="current location" list="localList">
							<datalist id="localList">
								<option id="lsLocal" value=""></option>
							</datalist>
							<script src="../common/localArea.js"></script>
							<script>
							$(document).ready(function(){
								$("#local").change(function(){
									var lnm = $("#local").val();
									$.ajax({
										url: "../common/locateMe.php",
										type: "POST",
										data: {lnm:lnm},
										success: function(data){
											console.log(data);
										}
									});
								});
							});
							</script>
                            <!--<button type="submit" class="btn btn-success"><i class="bi bi-geo-alt" style="color: white;"></i> Update Location</button>-->
                        </div>
                        <img src="../media/giphy-truck2.gif" alt="" >
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
			$.ajax({
				url: "indexUpdates.php",
				type: "POST",
				success: function(data){
					$("#ads").html(data);
				}
			});
		}
		setInterval(function(){
			$.ajax({
				url: "indexUpdates.php",
				type: "POST",
				success: function(data){
					$("#ads").html(data);
				}
			});
		},2000);
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
					data: {order:order}, 
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
