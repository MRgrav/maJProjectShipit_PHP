<?php
	$page = 'sc';
	include "./header.php";
?>
				
				<div class="col p-3" style="background:rgb(255, 239, 221);">	
					<div class="col">
						<form action="" method="post" class="row mb-2" style="justify-content: space-between; align-items: center;">
							<h4 class="col-7">Suggesions N Complaints</h4>
							<div class="col-5">
								<div class="input-group">
									<input type="search" name="search" placeholder="search" class="form-control">
									<button type="submit" class="btn btn-success"><i class="bi bi-search" style="width: 50px;"></i></button>
								</div>
							</div>
						</form>	
						<div style="height: 80vh; overflow-y: auto; overflow-x: hidden;">
						<table class="table table-success table-striped shadow">
							<thead class="table-primary shadow" style="top: 0; position: sticky; z-index: 3;">
								<tr>
									<th width="80px">Sl. No.</th><th>Name</th><th>Email</th><th>Message</th><th width="200px">Date</th>
								</tr>
							</thead>
							<tbody>
								<?php
								if (isset($_POST['search'])){
									$search = $_POST['search'];
									$res = mysqli_query($conn, "SELECT * FROM `sugs_compl` WHERE name LIKE '%$search%' OR mail LIKE '%$search%' OR message LIKE '%$search%' ORDER BY time DESC");
								}else{
									$res = mysqli_query($conn, "SELECT * FROM `sugs_compl` ORDER BY time DESC");
								}
								$i = 1;
								while($data = mysqli_fetch_assoc($res)){
								 echo "
								<tr>
									<td>".$i."</td>
									<td>".$data['name']."</td>
									<td>".$data['mail']."</td>
									<td><textarea class='w-100' style='background: transparent' readonly>".$data['message']."</textarea></td>
									<td>";
									$dte = date_create($data['time']); 
									$dte = date_format($dte, "dS F, Y");
									echo $dte;
									echo "</td>
								</tr>
								";
								$i++;
								}
								?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
<?php include "./end.php";?>
