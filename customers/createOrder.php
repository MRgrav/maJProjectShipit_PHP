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
                    <div class="gen-page" style="align-items: flex-start; padding: 1rem;">
                        <div class="flexr" style="width: 100%;">
                            <div class="flexr align-items-center" style="justify-content: flex-start;">
                                <i class="bi bi-chevron-left" style="cursor: pointer;" onclick="history.back()"></i> 
                                <p style="font-size: 20px; color:rgb(57, 57, 57); margin: 0px;">Create Order</p>
                            </div>
                            <div class="flexr nonee" style="justify-content: flex-end;">
                                <label for="sort" style="padding: 0 1rem;">Sort</label>
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
                        <div class="flexr align-items-start justify-content-center" style="flex-wrap: wrap;">
                            <form action="" class="create-form">
                                <hr>
                                <div class="input-block">
                                    <input id="oName" name="orderName" type="text" value="" maxlength="20" required="required">
                                    <label for="oName">Order Name</label>
                                </div>
                                <div class="input-block">
                                    <input id="Floc" name="orderF" type="text" value="" required="required" list="FlocList">
                                    <label class="stringFit" for="Floc">From: address, city, state</label>
                                    <datalist id="FlocList">
										<!--list body-->
									</datalist>
                                </div>
                                <div class="input-block">
                                    <input id="Tloc" name="orderT" type="text" value="" required="required" list="TlocList">
                                    <label class="stringFit" for="Tloc">To: address, city, state</label>
                                    <datalist id="TlocList">
										<!--list body-->
									</datalist>
									<script src="searchAdr.js"></script>
                                </div>
                                <div class="input-block">
                                    <input id="dist" name="orderDist" type="text" value="" required="required" maxlength="3" onkeypress="return event.charCode>=48 && event.charCode<=57">
                                    <label for="dist">Distance (in km)</label>
                                </div>
                                <div class="input-block">
                                    <input id="wegt" name="orderWegt" type="text" max="1000" value="" required="required" maxlength="3" onkeypress="return event.charCode>=48 && event.charCode<=57">
                                    <label for="wegt">Weight (in kg)</label>
                                </div>
                                <div class="input-block">
                                    <input id="siz" name="orderSize" type="text" value="" required="required" maxlength="2" onkeypress="return event.charCode>=48 && event.charCode<=57">
                                    <label for="siz">Size (in feet)</label>
                                </div>
                                <span id="prImg" style="color:red;">upload photos of the order item/items, max 3</span>
                                
                                <!--Preview Images-->
                                <div class="flexc orderUImg">
                                    <div class="flexr" id="preImageContainer" style="overflow-y: auto; margin: 3rem 0;">
                                        <!--body of preview image-->
                                    </div>
                                    <div class="flexr">
                                        <input type="file" name="orderImg" id="orderImg" accept="image/jpg, image/jpeg, image/png" multiple="multiple" style="display: none;" value='' capture="capture">
                                        <label for="orderImg" style="transform: none; left: 0;" class="btn btn-info flexr justify-content-center me-2">
                                            <i class="bi bi-cloud-upload p-2" style="font-size: 16px;"></i>
                                            <p style="color: black; margin: 0; margin-right: 6px">Upload Photos</p>
                                            <p style="color: black; margin: 0;">/ Capture a Photo</p>
                                        </label>
                                    </div>
                                    <p id="num-of-files">No Files Chosen</p>
                                </div>
                               <!--script-->
                               
                               
                                <script>								
									let numOfFiles = document.getElementById("num-of-files");
											function preview(){
												preImageContainer.innerHTML = "";
												//
												for(i of orderImg.files){
													let reader = new FileReader();
													let figure = document.createElement("figure");
													let figCap = document.createElement("figcaption");
													figCap.innerText = "";
													figure.appendChild(figCap);
													reader.onload=()=>{
														let img = document.createElement("img");
														img.setAttribute("src",reader.result);
														figure.insertBefore(img,figCap);
													}
													preImageContainer.appendChild(figure);
													reader.readAsDataURL(i);
												}
											}
									
											$("#orderImg").on("change", function() {
												if ($("#orderImg")[0].files.length > 3) {
													$("#orderImg").val('');
													alert("You can select only 3 images");
													prImg.style.display = "block";
													numOfFiles.textContent = `No Files Chosen`;
												} else {
													//preview();
													prImg.style.display = "none";
													numOfFiles.textContent = `${orderImg.files.length} Files Selected`;
												}
												preview();
											});
										</script>
                                
                                <textarea name="" maxlength="350" placeholder="Any Apecial Message ..."></textarea>
                                <hr>
                                <div style="width: 100%; display: flex; justify-content: end;">
                                    <button class="btn btn-success">Create</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>

				<!--footer--->
                <?php
                include "./foot.php";
                ?>
            </div>
        </div>
    </div>
    <script>
    function launc(){
		$("#inp1").val('');
	}
    </script>

<!...dock...>
<?php
include "./dock.php";
?>

</body>
</html> 
