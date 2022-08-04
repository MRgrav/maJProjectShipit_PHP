<?php 
	$page = 'trucks';
	include "./header.php";
	if (isset($_GET['remove'])){
		$del = $_GET['remove'];
		mysqli_query($conn, "DELETE FROM `truck` WHERE rc = '$del' ");
	}
?>

			<div class="col p-3" style="background:rgb(255, 239, 221);">	
				<div class="col p-2">	
					<form action="" method="post" class="row mb-2" style="justify-content: space-between; align-items: center;">
							<h4 class="col-7">Trucks</h4>
							<div class="col-5">
								<div class="input-group">
									<input type="search" name="search" placeholder="search" class="form-control">
									<button type="submit" class="btn btn-success"><i class="bi bi-search" style="width: 50px;"></i></button>
								</div>
							</div>
						</form>		
						<div class="verify p-2 ps-4" style="display: none;">
							Registration Card
							<div class="pb-2" id="imgV"></div>
							<div style="display: flex; width: fit-contentl;">
								<a id="verButton" href="" class="btn btn-success btn-sm">Verify <i class="bi bi-check-circle"></i></a>
								<p class="ps-2 m-0" style="color: gray;">click to verify the truck</p>
							</div>
						</div>
						
						
						<div style="height: 80vh; overflow-y: auto; overflow-x: hidden;">
						<table class="table table-success table-striped shadow">
							<thead class="table-primary shadow" style="top: 0; position: sticky; z-index: 3;">
								<tr>
									<th>Profile</th><th>RC</th><th>Model</th><th>Oil</th><th>Owner</th><th>Contact No.</th><th>Verification</th><th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (isset($_POST['search'])){
									$search = $_POST['search'];
									$res = mysqli_query($conn, "SELECT * FROM `truck` INNER JOIN `drivers` ON truck.owner = drivers.driverId WHERE truck.rc LIKE '%$search%' OR truck.model LIKE '%$search%' OR truck.owner LIKE '%$search%' ");
								}else{
									$res = mysqli_query($conn, "SELECT * FROM `truck` INNER JOIN `drivers` ON truck.owner = drivers.driverId ");
								}
								while($data = mysqli_fetch_assoc($res)){
								 echo "
								<tr>
									<td><img class='border' src='".$data['profile']."' height='50px'></td>
									<td>".$data['rc']."</td>
									<td>".$data['model']."</td>
									<td>".$data['oil']."</td>
									<td>".$data['owner']."</td>
									<td><a class='btn btn-success btn-sm' href='tel:".$data['phone']."'><i class='bi bi-telephone'></i> ".$data['phone']."</a></td>
									<td>";
									if ($data['request'] == 2) {
										echo "<button class='btn btn-primary btn-sm'>Verified <i class='bi bi-check-all'></i></button>";
									}else{
										echo "<button id='vrf' value='".$data['rcPhoto']."' class='btn btn-outline-success btn-sm'>Verify</button";
									}echo "</td>
									<td><a class='btn btn-outline-danger btn-sm' href='trucks.php?remove=".$data['rc']."'>Remove <i class='bi bi-x'></i></a></td>
								</tr>
								";
								}
								?>
							</tbody>
						</table>
						</div>
					</div>
					<script>
						$("#vrf").click(function(e){
							e.preventDefault();
							const imgg = $("#vrf").val();
							const imgT = "<img id='mainImg' src=" + imgg + " width='300px'>";
							$("#imgV").html(imgT);
							$(".verify").toggle();
							const linkref = "./verifyTruck.php?uTr=" + $("#mainImg").attr('src');
							$("#verButton").attr('href', linkref);
							console.log(linkref);
						});
					</script>
				</div>
			</div>
		
		</div>
	</div>
<?php include "./end.php";?>
