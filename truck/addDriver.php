<?php
include "../common/heads.php";
$page = 'truck';
$id = $_SESSION['ID'];
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `drivers` WHERE driverId = '$id' "));
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
                        <form id="update-form" style="width: 100%; display: flex; flex-direction: column; align-items: center;">
							<div class="profile-updater container-fluid">
								<div class="flexr" style="width: 100%; justify-content: space-between; padding: 0px 10px;">
									<div class="flexr align-items-center">
										<i class="bi bi-chevron-left" onclick="history.back()" style="cursor: pointer;"></i>
										<p style="font-size: 115%; color:rgb(57, 57, 57); margin: 0px;">Driver's information</p>
									</div>
								</div>
                                <div>
                                    <img id="profImg" src="<?php echo $data['profile'];?>" alt="profile picture">
                                    <input type="file" name="profile" id="prof-Pic" value="null" accept="image/jpg, image/png, image/jpeg" capture style="display: none;">
                                    <label for="prof-Pic"><i class="bi bi-camera"></i></label>
                                </div>
                                <script>
								let imgIn = document.getElementById('prof-Pic');
                                $("#prof-Pic").on("change", function() {
									for (i of imgIn.files){
										let reader = new FileReader();
										reader.onload = () => {
											profImg.setAttribute("src",reader.result);
										}
										reader.readAsDataURL(i);
									}
								});
                                </script>
                                <b><?php echo $data['driverId'];?></b> 
                            </div>
                            <div class="flexc p-1" style="max-width: 700px;">
                                    <div class="flexr frm-v">
                                        <label>Full Name</label>
                                        <input type="text" name="Fname" value="<?php echo $data['name'];?>" required>
                                    </div>
                                    <div class="flexr frm-v">
                                        <label>Driving License No.</label>
                                        <input type="text" name="dl" value="<?php echo $data['license'];?>" required readonly>
                                    </div>
                                    <div class="flexr frm-v">
                                        <label>Date of Birth</label>
                                        <input type="date" name="dob" value="<?php echo $data['dob'];?>" required>    
                                    </div>
                                    <div class="flexr frm-v">
                                        <label>Gender</label>
                                        <select name="gender" value="<?php echo $data['gen'];?>">
                                            <option value="Male" <?php
                                             if ($data['gen'] == 'Male') { echo "selected";}
                                             ?>>Male</option>
                                            <option value="Female" <?php
                                             if ($data['gen'] == 'Female') { echo "selected";}
                                             ?>>Female</option>
                                            <option value="Others" <?php
                                             if ($data['gen'] == 'Others') { echo "selected";}
                                             ?>>Others</option>
                                        </select>
                                    </div>
                                    
                                    <div class="flexc ps-4 pe-4">
										<label>Upload docs</label>
										<div class="flexr p-2 flex-wrap">
											<div class="col-sm p-2">
												<img id="dlImg" src="<?php echo $data['dl_photo'];?>" class="border p-1 w-100" style="height: 100%; max-height: 160px; object-fit: cover;">
												<input id="dl" type="file" name="dl_photo" hidden accept="image/png, image/jpg, image/jpeg" capture>
												<label class="form-control form-control-sm stringFit" for="dl">Driving License (jpg/png/jpeg)</label>
											</div>
											<div class="col-sm p-2">
												<img id="pobImg" src="<?php echo $data['dob_photo'];?>" class="border p-1 w-100" style="height: 100%; max-height: 160px; object-fit: cover;">
												<input id="pob" type="file" name="dob_photo" value="null" hidden accept="image/png, image/jpg, image/jpeg" capture>
												<label class="form-control form-control-sm stringFit" for="pob">Proof of Date of Birth (jpg/png/jpeg)</label>
											</div>
											<p style="color: red; font-size: 12px;">*proof of date of birth : Aadhaar/PAN</p>
										</div>
										<script>
											let reader = new FileReader();
											let imgA = document.getElementById('dl');
											$("#dl").on("change", function() {
												for (i of imgA.files){
													reader.onload = () => {
														dlImg.style.display = "block";
														dlImg.setAttribute("src",reader.result);
													}
													reader.readAsDataURL(i);
												}
											});
											let imgB = document.getElementById('pob');
											$("#pob").on("change", function() {
												for (i of imgB.files){
													reader.onload = () => {
														pobImg.style.display = "block";
														pobImg.setAttribute("src",reader.result);
													}
													reader.readAsDataURL(i);
												}
											});
										</script>
                                    </div>
                                    <div class="flexr frm-v">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" maxlength="10" minlength="10" value="<?php echo $data['phone'];?>" required onkeypress="return event.charCode>=48 && event.charCode<=57">    
                                    </div>
                                    <div class="flexr frm-v">
                                        <label>Email</label>
                                        <input type="email" name="mail" value="<?php echo $data['mail'];?>" required>    
                                    </div>                                                                        
                                    <div class="flexr frm-v">
                                        <label>Password</label>
                                        <input type="Password" placeholder="create password" id="pd1rv" name="pwd" minlength="6" maxlength="6">
                                        <span style="width: 200px;"></span>
                                        <input type="text" placeholder="confirm password" id="pd2rv" minlength="6" maxlength="6">
                                        <p id="pwdN" class="nonee w-100 text-center" style=" color: red; font-size: 12px;">Password not matching</p>
                                        <script>
											function checkMt(){
												var pwa = document.getElementById("pd1rv").value;
												var pwb = document.getElementById("pd2rv").value;
												if (pwa.match(pwb)){
													document.getElementById("pd2rv").style.border = "1px solid rgba(0,125,0,0.4)";
													console.log(pwa);
													document.getElementById("pwdN").style.display = "none";
												}else{
													document.getElementById("pd2rv").style.border = "1px solid red";
													console.log(pwb);
													document.getElementById("pwdN").style.display = "block";
												}
											}
											
											pd2rv.addEventListener("input", checkMt());
                                        </script>
                                    </div>
                                    <button class="w-100 btn btn-success shadow" id="signup" type="Submit" value="Submit">Submit</button>
                            </div>
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

	}
	$(document).ready(function(){
		console.log($("#dl").val());
		$("#dl").on("change", function(){ console.log($("#dl").val()); });
		$("#update-form").submit(function(event){
			event.preventDefault();
			console.log(this);
			$.ajax({
				url: "updateDriver.php",
				type: "POST",
				data: new FormData(this),
				contentType: false,
				processData: false,
				success: function(data2){
					if (data2 == 1){
						Swal.fire({
						  icon: 'success',
						  title: 'Data updated!',
						  showConfirmButton: false,
						  text: 'Reloading fresh data!',
						  timer: 1680,
						  timerProgressBar: true
						})
						setTimeout(function(){
							location.reload();
						}, 1500);
					}else{
						Swal.fire({
						  icon: 'error',
						  title: 'Something is wrong',
						  showConfirmButton: true,
						  confirmButtonText: 'Try Again'
						})
					} 
					console.log(data2);
				
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
