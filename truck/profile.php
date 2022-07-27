<?php
include "../common/heads.php";
$dock = 'account';
session_start();
$id = $_SESSION['ID'];
$sql = "SELECT * FROM `drivers` INNER JOIN `truck` ON drivers.driverId = truck.owner WHERE drivers.driverId = '$id' ";
$data = mysqli_fetch_array(mysqli_query($conn, $sql));
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
                        <form action="" style="width: 100%; display: flex; flex-direction: column; align-items: center;">
                            <div class="profile-updater container-fluid">
								<div class="flexr" style="width: 100%; justify-content: space-between; padding: 0px 10px;">
									<div class="flexr align-items-center">
										<i class="bi bi-chevron-left" onclick="history.back()" style="cursor: pointer;"></i>
										<p style="font-size: 115%; color:rgb(57, 57, 57); margin: 0px;">Profile</p>
									</div>
								</div>
                                <div style="padding: 0;">
                                    <img id="prof-truck" src="<?php echo $data['profile'];?>" alt="profile picture">
                                </div>
                                <b><?php echo $data['driverId'];?></b> 
                                <div class="flexr w-100" style="padding: 0; justify-content: space-around;">
									<div class="flexc w-100 align-items-center">
										<h3>7</h3>
										<p>Total Order</p>
									</div>
									<div class="flexc w-100 align-items-center">
										<h3><?php if ($data['status']==2) { echo 1; }else{ echo 0; }?></h3>
										<p>Active Order</p>
									</div>
									<div class="flexc w-100 align-items-center">
										<h3>4.7</h3>
										<p>Ratings</p>
									</div>
                                </div>
                            </div>
                        </form>
                        
                        <div class="flexr p-3 m-1 align-items-center" style="justify-content: space-between;">
							<div><b>Driver : </b><?php echo $data['name'];?></div>
							<div><b>Truck : </b><?php echo $data['model'];?></div>
							
                        </div>
                        <div class="row ps-2 pe-2">
							<div class="col-sm p-2"><img src="<?php echo $data['frontPhoto'];?>" class="w-100 tr-form-img"></div>
							<div class="col-sm p-2"><img src="<?php echo $data['sidePhoto'];?>" class="w-100 tr-form-img"></div>
                        </div>
                        <div class="flexc btn-group-vertical  w-100 mb-2 mt-2 p-1" style="max-width: 500px;">
                                <a class="btn btn-outline-dark p-3" href="./addDriver.php">View Profile</a>
                                <a class="btn btn-outline-dark p-3" href="./addTruck.php">View Tuck</a>
                                <a class="btn btn-outline-dark p-3" href="./feedback.php">View Feedbacks</a>
                                <a class="btn btn-danger" href="">Logout</a>
                            </div>
                        <hr>
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
    </script>

<!--dock-->
<?php
include "../common/dock.php";
?>

</body>
</html>
