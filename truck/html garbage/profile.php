<?php
include "../common/heads.php";
$page = 'truck';
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
                                <div style="padding: 0;">
                                    <img id="prof-truck" src="../media/user.png" alt="profile picture">
                                </div>
                                <b>UserName</b> 
                            </div>
                            <hr>
                            <div class="flexc btn-group-vertical  w-100 mb-2 mt-2 p-1" style="max-width: 500px;">
                                <a class="btn btn-outline-dark p-3" href="../common/profile.php">View Profile</a>
                                <a class="btn btn-outline-dark p-3" href="./truckNdriver.php">View Tucks & Drivers</a>
                                <a class="btn btn-outline-dark p-3" href="./feedback.php">View Feedbacks</a>
                                <a class="btn btn-danger" href="">Logout</a>
                            </div>
                            <hr>
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
		$("#inp1").val('');
	}
    </script>

<!--dock-->
<?php
include "../common/dock.php";
?>

</body>
</html>
