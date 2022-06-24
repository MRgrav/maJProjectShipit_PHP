<?php
include "./heads.php";
?>
    <!--phone responsive menu-->
    <?php
    include "./phoneMenu.php";
    ?>

    <div class="container shadow p-0">
        <div style="display: flex; flex-direction: row;">

            <!...side-bar...>
            <?php
				include "./sideBar.php";
            ?>

            <!...main...>
            <div class="main">
                <div style="padding: 10px 0px; padding-top: 8vh;">
                    <div class="profile-page" style="align-items: flex-start; padding: 1rem;">
                        <div class="flexr" style="width: 100%; justify-content: space-between;">
                            <div class="flexr align-items-center">
                                <i class="bi bi-chevron-left" style="cursor: pointer;"></i> 
                                <p style="font-size: 115%; color:rgb(57, 57, 57); margin: 0px;">Notifications</p>
                            </div>
                            <div class="flexr align-items-center">
                                <label for="sort" style="padding: 0 1rem; font-size: 16px;">sort</label>
                                <select name="" id="sort" style="width: max-content;">
                                    <option value="">Rating</option>
                                    <option value="">A - Z</option>
                                    <option value="">Z - A</option>
                                    <option value="">New - Old</option>
                                    <option value="">Old - New</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="flexc align-items-center">
                            <b style="width: 95%; max-width: 660px;">Unread</b>
                            <a class="noti-item unrd" href="#">notification 1</a>
                            <a class="noti-item unrd" href="#">notification 1</a>
                        </div>
                        <hr>
                        <div class="flexc align-items-center">
                            <b style="width: 95%; max-width: 660px;">Read</b>
                            <a class="noti-item" href="#">notification 1</a>
                            <a class="noti-item" href="#">notification 1</a>
                            <a class="noti-item" href="#">notification 1</a>
                            <a class="noti-item" href="#">notification 1</a>
                        </div>
                    </div>
                </div>

               <!--footer-->
               <?php
					include "./foot.php";
               ?>
<!---dock--->
<?php
include "./dock.php";
?>
</div>
</body>
</html> 
