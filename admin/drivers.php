<?php 
	$page = 'drivers';
	include "./header.php";
?>

			<div class="col" style="background:rgb(255, 239, 221);">	
				<div class="col p-2">	
					<div class="row mb-2" style="justify-content: space-between; align-items: center;">
						<h4 class="col-7">Drivers</h4>
						<div class="col-5">
							<div class="input-group">
								<input type="search" placeholder="search" class="form-control">
								<button type="submit" class="btn btn-success"><i class="bi bi-search" style="width: 50px;"></i></button>
							</div>
						</div>
					</div>	
					<div>
						
						<table class="table table-success table-striped shadow">
							<thead class="table-primary">
								<tr>
									<th>Sl No </th><th>Id Number</th><th>Driver Name</th><th>Truck's Model</th><th>view</th>
								</tr>
							</thead>
							<tbody>
								<?php
							
								?>
								<tr>
									<td>1</td><td>Id</td><td>Name</td><td>truck</td><td><a class="btn btn-success" href="">view</a></td>
								</tr>
								<tr>
									<td>1</td><td>Id</td><td>Name</td><td>truck</td><td><a class="btn btn-success" href="">view</a></td>
								</tr>
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		
		</div>
	</div>
<?php include "./end.php";?>
