<?php
include "../common/heads.php";
$page = 'truck';
session_start();
include "../config.php";
$conn = mysqli_connect("$HOST", "$USER", "$PASS", "$PROJ");
$id = $_SESSION['ID'];
if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `truck` WHERE owner = '$id' ")) > 0){
	$sql = "SELECT * FROM `drivers` INNER JOIN `truck` ON drivers.driverId = truck.owner WHERE drivers.driverId = '$id' ";
} else {
	$sql = "SELECT * FROM `drivers` WHERE driverId = '$id' ";
}
$data = mysqli_fetch_array(mysqli_query($conn, $sql));
//$num = mysqli_num_rows(mysqli_query($conn, $sql));
?>

    <div class="container shadow p-0">
        <div style="display: flex; flex-direction: row;">

            <!--side-bar-->
            <?php
            include "../common/sideBar.php";
            ?>

            <!---main--->
            <div class="main">
                <div style="padding: 10px 0px;">
                    <div class="profile-page">
                        <form id="truck" style="width: 100%; display: flex; flex-direction: column; align-items: center;">
							<div class="profile-updater container-fluid">
								<div class="flexr" style="width: 100%; justify-content: space-between; padding: 0px 10px;">
									<div class="flexr align-items-center">
										<i class="bi bi-chevron-left" onclick="history.back()" style="cursor: pointer;"></i>
										<p style="font-size: 115%; color:rgb(57, 57, 57); margin: 0px;">Truck's Information</p>
									</div>
								</div>
                                <div style="padding: 0;">
                                    <img id="prof-truck" src="<?php echo $data['profile'];?>" alt="profile picture">
                                </div>
                                <b><?php echo $id;?></b> 
                            </div>
                            
                            <!--Request for truck-->
                            <?php
                            if ($data['request'] == 1){
                            ?>
                            <div class="w-100 text-center shadow border m-3" style="max-width: 700px; padding: 7rem 0.1rem; border-radius: 20px;">
								<h3>Your request is under process.</h3>
								<p class="pt-2">Please, recheck again for updates!</p>
                            </div>
                            <?php } else {
								if ($data['request'] == 3) {
							?>
							<script>
								Swal.fire({
								  icon: 'error',
								  title: 'Your request has been canceled',
								  showConfirmButton: true,
								  confirmButtonText: 'Try Again'
								})
							</script><?php } ?>
                            <div class="flexc justify-content-center w-100" style="max-width: 700px;">
                                    <div class="flexr frm-v">
                                        <label for="">Truck Model Name</label>
                                        <input type="text" name="model" <?php if($data['model']){ echo "readonly value='".$data['model']."'";}?> required>
                                    </div>
                                    <div class="flexr frm-v">
                                        <label for="">Registration No.</label>
                                        <input type="text" id="rcId" name="rcn" <?php if($data['rc']){ echo "readonly value='".$data['rc']."'";}?> required>
                                        <span style="width: 150px;"></span>
                                        <div class="tr-form-fill">
											<img id="rcImg" src="<?php echo $data['rcPhoto'];?>" class="ifImg border p-1 w-100" style="height: 100%; max-height: 200px; object-fit: cover;">
											<input id="rc" type="file" name="rcPhoto" <?php if($data['rcPhoto']){ echo "disabled";}?> hidden accept="image/png, image/jpg, image/jpeg" capture>
											<label class="form-control form-control-sm stringFit" for="rc">Registration Card (jpg/png/jpeg)</label>
										</div>
                                    </div>
                                    <div class="flexr frm-v">
                                        <label for="">Insurance Policy No.</label>
                                        <input type="text" class="chngI" name="ins" <?php echo "value='".$data['insurance']."'";?> required>
                                        <span style="width: 150px;"></span>
                                        <div class="tr-form-fill">
											<img id="ipImg" src="<?php echo $data['insPhoto'];?>" class="ifImg border p-1 w-100" style="height: 100%; max-height: 200px; object-fit: cover;">
											<input id="ip" class="chngF" type="file" name="insPhoto" hidden accept="image/png, image/jpg, image/jpeg" capture required>
											<label class="form-control form-control-sm stringFit" for="ip">Insurance Policy (jpg/png/jpeg)</label>
										</div>
                                    </div>
                                    <div class="flexr frm-v">
                                        <label for="">Polution Certificate No.</label>
                                        <input type="text" name="pol" class="chngI" value="<?php echo $data['polution'];?>" required>
                                        <span style="width: 150px;"></span>
                                        <div class="tr-form-fill">
											<img id="poImg" src="<?php echo $data['polPhoto'];?>" class="ifImg border p-1 w-100" style="height: 100%; max-height: 200px; object-fit: cover;">
											<input id="po" class="chngF" type="file" name="polPhoto" hidden accept="image/png, image/jpg, image/jpeg" capture required>
											<label class="form-control form-control-sm stringFit" for="po">Polution Certificate(jpg/png/jpeg)</label>
										</div>
                                    </div>
                                    
                                    <script>
											reader = new FileReader();
											let imgA = document.getElementById('rc');
											$("#rc").on("change", function() {
												for (i of imgA.files){
													reader.onload = () => {
														rcImg.style.display = "block";
														rcImg.setAttribute("src",reader.result);
													}
													reader.readAsDataURL(i);
												}
											});
											let imgB = document.getElementById('ip');
											$("#ip").on("change", function() {
												for (i of imgB.files){
													reader.onload = () => {
														ipImg.style.display = "block";
														ipImg.setAttribute("src",reader.result);
													}
													reader.readAsDataURL(i);
												}
											});
											let imgC = document.getElementById('po');
											$("#po").on("change", function() {
												for (i of imgC.files){
													reader.onload = () => {
														poImg.style.display = "block";
														poImg.setAttribute("src",reader.result);
													}
													reader.readAsDataURL(i);
												}
											});
									</script>
                                    
                               <div class="flexr frm-v">
								   <label for="">Oil</label>
								   <select class="chngI" name="oil" id="" required>
										<option value="" <?php
											if($data['oil']==""){ echo "selected";}
                                        ?>>--select</option>
										<option value="Petrol" <?php
											if($data['oil']=="Petrol"){ echo "selected";}
                                        ?>>Petrol</option>
                                        <option value="Diesel" <?php
											if($data['oil']=="Diesel"){ echo "selected";}
                                        ?>>Diesel</option>
                                    </select>
                                </div>
                                <hr>
                                <div class="row w-100" style="max-width: 700px; padding: 0px 8px;">
                                    <p class="col-12" style="margin: 0;">Upload Photo</p>
                                    <label for="a_truck" class="col-sm-6 p-3">
                                        <img src="<?php echo $data['frontPhoto'];?>" class="tr-form-img" id="atImg">
                                        <p class="pt-1">Front View</p>
                                    </label>
                                    <label for="b_truck" class="col-sm-6 p-3">
                                        <img src="<?php echo $data['sidePhoto'];?>" class="tr-form-img" id="btImg">
                                        <p class="pt-1">Side View</p>
                                    </label>
                                    <div class="nonee">
                                        <input type="file" class="chngF"name="frontPhoto" id="a_truck" accept="image/png, image/jpg, image/jpeg" capture required>
                                        <input type="file" class="chngF" name="sidePhoto" id="b_truck" accept="image/png, image/jpg, image/jpeg" capture required>
                                    </div>
                                    <script>
											reader = new FileReader();
											let imga = document.getElementById('a_truck');
											$("#a_truck").on("change", function() {
												for (i of imga.files){
													reader.onload = () => {
														//atImg.style.display = "block";
														atImg.setAttribute("src",reader.result);
													}
													reader.readAsDataURL(i);
												}
											});
											let imgb = document.getElementById('b_truck');
											$("#b_truck").on("change", function() {
												for (i of imgb.files){
													reader.onload = () => {
														//btImg.style.display = "block";
														btImg.setAttribute("src",reader.result);
													}
													reader.readAsDataURL(i);
												}
											});
                                    </script>
                                </div>
                            </div>
							<?php } ?>
							<div class="flexr w-100 justify-content-end p-2">
								<?php
								if (!isset($data['request'])) { //requested
									echo "<button class='btn btn-success m-1 new' type='submit'>Submit</button>";
								}else {	}
								?>
							</div>
                            <!--<button class="btn btn-success mt-1" style="max-width: 200px; align-self: flex-end;">Submit</button>-->
                        </form>

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
		
		let reader = new FileReader();
	}
	$(document).ready(function(){
		if ($(".ifImg").attr("src") == ""){
			$(this).hide();
		}else{
			$(this).show();
		}
		$("#truck").submit(function(e){
			e.preventDefault();
			
			var formdata = new FormData(this);
			console.log(formdata);
			$.ajax({
				url: "truckAddin.php",
				type: "POST",
				data: formdata,
				contentType: false,
				processData: false,
				success: function(data2){ 
					if (data2 == 1){
						Swal.fire({
						  icon: 'success',
						  title: 'Request Submitted!',
						  showConfirmButton: false
						}).then(()=>{
							location.reload();
						})
					}else{
						Swal.fire({
						  icon: 'error',
						  title: 'Something is wrong',
						  showConfirmButton: true,
						  confirmButtonText: 'Try Again'
						}).then(()=>{
							location.reload();
						})
					}
					console.log(data2);
				}
			});
		});
		$("#truck").change(function(e){
			e.preventDefault();
			var frm = new FormData(this);
			
			console.log(frm);
			$.ajax({
				url: "updateTruck.php",
				type: "POST",
				data: frm,
				contentType: false,
				processData: false,
				success: function(res){
					if (res == 1){
						Swal.fire({
						  icon: 'success',
						  title: 'Photo Updated!',
						  showConfirmButton: false,
						  timer: 1600,
						  timerProgressBar: true
						})
						setTimeout(function(){
							location.reload();
						}, 1600);
					}else{
						Swal.fire({
						  icon: 'error',
						  title: 'Something is wrong',
						  text: 'try again!',
						  showConfirmButton: false,
						  timer: 1600
						})
						setTimeout(function(){
							location.reload();
						}, 1600);
					}
				}
			});
		});

		$(".chngI").on("blur", function(){
			let f = $(this).val();
			let fd = $(this).attr("name");
			console.log(f);
			$.ajax({
				url: "updateTruck.php",
				type: "POST",
				data: {f:f, fd:fd},
				success: function(res){
					console.log(res);
					if (res != 1){
						Swal.fire({
						  icon: 'error',
						  title: 'Something is wrong',
						  showConfirmButton: false,
						  timer: 1600
						})
					}
				}
			}); 
		}); 
	}); 
    </script>

<!--dock-->
<?php
include "../common/dock.php";
?>

</body>
</html>
