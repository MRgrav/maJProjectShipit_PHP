<?php
include "../common/heads.php";
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
										<p style="font-size: 115%; color:rgb(57, 57, 57); margin: 0px;">Feedback</p>
									</div>
								</div>
                                <div style="padding: 0;">
                                    <img id="prof-truck" src="../media/user.png" alt="profile picture">
                                </div>
                                <b>UserName</b> 
                            </div>
                        </form>
                        <hr>

                        <!--Feedbacks from customers-->
                        <div class="flexr" style="width: 100%; justify-content: flex-end; padding: 0px 10px;">
                            <div class="flexr align-items-center">
                                <label for="sort" style="padding: 0 1rem; font-size: 16px;">sort</label>
                                <select name="" id="sort" style="width: max-content;">
                                    <option value="">Rating</option>
                                    <option value="">New - Old</option>
                                    <option value="">Old - New</option>
                                </select>
                            </div>
                        </div>  
                        <div class="row align-items-center" style="padding: 2px 10px; height: 100%; max-height: 600px; overflow-y: auto;">
                            <div class="col-md-6 p-2">
                                <div class="flexc fdb-customer">
                                    <div class="flexr" style="justify-content: space-between; align-items: center;">
                                        <label for="">username</label>
                                        <div class="rating flexr">
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                        </div>
                                    </div>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda numquam temporibus vitae alias quia magni laudantium velit perferendis molestiae fuga enim officiis, fugiat eum rem fugit repudiandae. Eum, odio quam.</p>
                                    <p style="color: rgb(75,75,75); align-self: flex-end;">10/09/2020 15:51:36</p>
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="flexc fdb-customer">
                                    <div class="flexr" style="justify-content: space-between; align-items: center;">
                                        <label for="">username</label>
                                        <div class="rating flexr">
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                        </div>
                                    </div>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda numquam temporibus vitae alias quia magni laudantium velit perferendis molestiae fuga enim officiis, fugiat eum rem fugit repudiandae. Eum, odio quam.</p>
                                    <p style="color: rgb(75,75,75); align-self: flex-end;">10/09/2020 15:51:36</p>
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="flexc fdb-customer">
                                    <div class="flexr" style="justify-content: space-between; align-items: center;">
                                        <label for="">username</label>
                                        <div class="rating flexr">
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                        </div>
                                    </div>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda numquam temporibus vitae alias quia magni laudantium velit perferendis molestiae fuga enim officiis, fugiat eum rem fugit repudiandae. Eum, odio quam.</p>
                                    <p style="color: rgb(75,75,75); align-self: flex-end;">10/09/2020 15:51:36</p>
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="flexc fdb-customer">
                                    <div class="flexr" style="justify-content: space-between; align-items: center;">
                                        <label for="">username</label>
                                        <div class="rating flexr">
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                            <button class="star">&#9734;</button>
                                        </div>
                                    </div>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda numquam temporibus vitae alias quia magni laudantium velit perferendis molestiae fuga enim officiis, fugiat eum rem fugit repudiandae. Eum, odio quam.</p>
                                    <p style="color: rgb(75,75,75); align-self: flex-end;">10/09/2020 15:51:36</p>
                                </div>
                            </div>
                            
                        </div>

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
