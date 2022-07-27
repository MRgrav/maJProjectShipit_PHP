<?php
$login = 1;
include_once "../common/heads.php";
?>

	<div class="flexr w-100 justify-content-center align-items-center" style="height: 100vh;">
		<form class="border p-3 shadow text-center" id="driver_signup">
			<div class="flexr justify-content-center align-items-end" style="margin-top: -70px;">
				<img id="profImg2" src="../media/user.png" alt="profile picture" height="100px" width="100px" class="shadow" style="border: 2px solid white; border-radius: 70px; object-fit: cover;">
                <input type="file" name="profile" id="prof-Pic" accept="image/jpg, image/png, image/jpeg" capture style="display: none;">
                <label for="prof-Pic"><i class="bi bi-camera"></i></label>
			</div>
			<script>
				let imgIn = document.getElementById('prof-Pic');
				$("#prof-Pic").on("change", function() {
					for (i of imgIn.files){
						let reader = new FileReader();
						reader.onload = () => {
							profImg2.setAttribute("src",reader.result);
						}
						reader.readAsDataURL(i);
					}
				});
			</script>
			
			<h2 class="p-2"><b>Signup</b></h2>
			
			
				<!--page 1-->
				<div class="p-2 border" id="pg-A">
					<div class="row p-2 mt-3">
						<div class="col-sm-3"><label class="w-100 text-start" for="Id">User Name </label></div>
						<div class="col-sm-8 offset-sm-1"><input id="Id" name="Id" class="form-control" placeholder="unique user name" type="text" required></div>
					</div>
					
					<div class="row p-2 mt-1">
						<div class="col-sm-3"><label class="w-100 text-start" for="Fname">Full Name </label></div>
						<div class="col-sm-8 offset-sm-1"><input id="Fname" name="Fname" class="form-control" placeholder="Full Name" type="text" required></div>
					</div>
					
					<div class="row p-2 mt-1">
						<div class="col-sm-3"><label class="w-100 text-start" for="ph">Phone Number </label></div>
						<div class="col-sm-8 offset-sm-1"><input id="ph" name="ph" class="form-control" placeholder="10 digit phone number" type="text" required onkeypress="return event.charCode>=48 && event.charCode<=57" maxlength="10" minlength="10"></div>
					</div>
					
					<div class="row p-2 mt-1">
						<div class="col-sm-3"><label class="w-100 text-start" for="mail">Email Id </label></div>
						<div class="col-sm-8 offset-sm-1"><input id="mail" name="ml" class="form-control" placeholder="email id" type="text" required minlength="4"></div>
					</div>
					
					<div class="row p-2 mt-1">
						<div class="col-sm-3"><label class="w-100 text-start">Password </label></div>
						<div class="col-sm-8 offset-sm-1"><input id="pd11rv" name="pwd" minlength="6" maxlength="6" class="form-control" type="password" required placeholder="6 digit password"></div>
						<div class="col-sm-3"></div>
						<div class="col-sm-8 offset-sm-1 mt-2"><input id="pd21rv" minlength="6" maxlength="6" class="form-control" type="text" required placeholder="confirm password"></div>
						<div class="col-sm-3"></div>
						<p id="pwdN" class="nonee w-100 text-center mt-1" style=" color: red; font-size: 12px;">Password not matching</p>
					</div>
					<div class="row p-2 mt-2 wrap-reverse">
						<div class="col-sm p-2"><a class="w-100 btn btn-outline-danger" href="./login.php">cancel</a></div>
						<div class="col-sm p-2"><button class="w-100 btn btn-primary" id="next-pg">Next</button></div>
					</div>
				</div>
			
				<!--page 2-->
				<div class="p-2 border" id="pg-B">
					<div class="row p-2 mt-3">
						<div class="col-sm-5"><label class="w-100 text-start" for="DL">Driving License </label></div>
						<div class="col-sm-7"><input id="DL" name="drivingL" class="form-control" placeholder="unique user name" type="text" required></div>
					</div>
					
					<div class="row p-2 mt-3">
						<div class="col-sm-5"><label class="w-100 text-start" for="dob">Date of Birth </label></div>
						<div class="col-sm-7"><input id="dob" name="dob" class="form-control" placeholder="" type="date" required></div>
					</div>
					
					<div class="row p-2 mt-3">
						<div class="col-sm-5"><label class="w-100 text-start" for="gnd">Gender </label></div>
						<div class="col-sm-7">
							<select class="form-control" name="gender" id="gnd" required>
								<option value="" selected disabled>--select--</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Others">Others</option>
							</select>
						</div>
					</div>
					<div class="row p-2 mt-3 wrap-reverse">
						<div class="col-sm p-2"><button class="w-100 btn btn-outline-primary" id="back-pg">Back</button></div>
						<div class="col-sm p-2"><button class="w-100 btn btn-primary" type="button" id="final-pg">Next</button></div>
					</div>
				</div>
				
				<!--page 3-->
				<div class="p-2 border"  id="pg-C">
					<div class="row p-2 mt-2">
						<label class="col-sm-3 text-start">Upload docs</label>
						<div class="flexr flex-wrap">
							<div class="col-sm-6 p-2">
								<img id="dlImg" src="" class="border p-1 w-100" style="display: none; height: 100%; max-height: 180px; object-fit: cover;">
								<input id="dl" type="file" name="dl_photo" hidden accept="image/png, image/jpg, image/jpeg" capture requiored>
								<label class="form-control form-control-sm stringFit" for="dl">Driving License (jpg/png/jpeg)</label>
							</div>
							<div class="col-sm-6 p-2">
								<img id="pobImg" src="" class="border p-1 w-100" style="display: none; height: 100%; max-height: 180px; object-fit: cover;">
								<input id="pob" type="file" name="dob_photo" hidden accept="image/png, image/jpg, image/jpeg" capture required>
								<label class="form-control form-control-sm stringFit" for="pob">Proof of Date of Birth (jpg/png/jpeg)</label>
							</div>
						</div>
						<p style="color: red; font-size: 12px; padding: 0px 15px;">*proof of date of birth : Aadhaar/PAN</p>
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
					<div class="w-100 p-1 ps-4 text-start"><input id="readyForm" type="checkbox" class="me-3"><label for="readyForm">Form is completed and ready to submit.</label></div>
					<div class="row p-2 mt-3 wrap-reverse">
						<div class="col-sm p-2"><button class="w-100 btn btn-outline-primary" id="back-pgB">Back</button></div>
						<div class="col-sm p-2"><button class="w-100 btn btn-success" type="submit" id="Submit" value="Submit">Submit</button></div>
					</div>
				</div>
			
			
		</form>
	</div>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
		function launc(){
			$("#pg-A").fadeIn();
			$("#pg-B").hide();
			$("#pg-C").hide();
			//document.getElementsByTagName('select').value = "";
		}
		
	$("#pd21rv").on("input", function(){
			var pwaa = document.getElementById("pd11rv").value;
			var pwba = document.getElementById("pd21rv").value;
			if (pwaa.match(pwba)){
				document.getElementById("pd21rv").style.border = "1px solid rgba(0,125,0,0.4)";
				console.log(pwaa);
				document.getElementById("pwdN").style.display = "none";
			}else{
				document.getElementById("pd21rv").style.border = "1px solid red";
				console.log(pwba);
				document.getElementById("pwdN").style.display = "block";
			}
			console.log("a");
		});
		//pd21rv.addEventListener("input", compPwd());	
	
		$("#next-pg").click(function(e){
			e.preventDefault();
			$("#pg-A").hide();
			$("#pg-B").fadeIn();
			$("#pg-C").fadeOut();
		});
		$("#back-pg").click(function(e){
			e.preventDefault();
			$("#pg-A").fadeIn();
			$("#pg-B").hide();
			$("#pg-C").hide();
		});
		$("#final-pg").click(function(e){
			e.preventDefault();
			$("#pg-A").hide();
			$("#pg-B").hide();
			$("#pg-C").fadeIn();
		});
		$("#back-pgB").click(function(e){
			e.preventDefault();
			$("#pg-A").hide();
			$("#pg-B").fadeIn();
			$("#pg-C").hide();
		}); 
	
	$(document).ready(function(){
		
		$("#driver_signup").submit(function(e){
			e.preventDefault();
 
		   //Create an FormData object 
			var data = new FormData(this);
			for (var pair of data.entries()) {
				console.log(pair[0]+ ' - ' + pair[1]); 
			}
			console.log(data.entries()[0]);
			$.ajax({
				url: "driver_registration.php",
				type: "POST",
				data: data,
				contentType: false,
				processData: false,
				success: function(data2){
					if (data2 == 1){
						Swal.fire({
						  icon: 'success',
						  title: 'Registration Done',
						  html: '<a class="btn btn-primary" href="./login.php">Login</a>',
						  showConfirmButton: false
						})
						$("#driver_signup").trigger("reset");
						profImg2.src = "../media/user.png";
					}else if (data2 == 2){
						Swal.fire({
						  icon: 'warning',
						  title: 'Duplicate username',
						  showConfirmButton: true,
						  confirmButtonText: 'Try Again'
						})
					}else{
						Swal.fire({
						  icon: 'error',
						  title: 'Something is wrong',
						  showConfirmButton: true,
						  confirmButtonText: 'Try Again'
						})
					}
					console.log(data2);
					$("#pg-A").hide();
					$("#pg-B").show();
					$("#pg-C").hide();
				},
				error: function(data2){
					console.log(data2);
				}
			});
		});
		
	});
	</script>
</body>
</html>
