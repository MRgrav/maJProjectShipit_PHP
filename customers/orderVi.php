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
                    <div class="gen-page" style="align-items: flex-start;">
                        <div class="flexr" style="width: 100%; justify-content: space-between;">
                            <div class="flexr align-items-center">
                                <i class="bi bi-chevron-left" style="cursor: pointer;"></i> 
                                <p style="font-size: 115%; color:rgb(57, 57, 57); margin: 0px;">My Orders Order</p>
                            </div>
                            <div class="flexr nonee align-items-center">
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
                        <div class="pre-OVimg flexr align-items-start justify-content-center">
                            <img class="nonee OVimg" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.3soh3uBvwGiUc-Iz2Ip9hgAAAA%26pid%3DApi&f=1" alt="">
                            <div class="OVimg-group">
                                <img class="OVimg" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.3soh3uBvwGiUc-Iz2Ip9hgAAAA%26pid%3DApi&f=1" alt="">
                                <div class="OVimg-group2">
                                    <img class="selectableImg" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.3soh3uBvwGiUc-Iz2Ip9hgAAAA%26pid%3DApi&f=1" alt="">
                                    <img class="selectableImg" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.3soh3uBvwGiUc-Iz2Ip9hgAAAA%26pid%3DApi&f=1" alt="">
                                    <img class="selectableImg" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.3soh3uBvwGiUc-Iz2Ip9hgAAAA%26pid%3DApi&f=1" alt="">
                                </div>
                            </div>                            
                            
                            <div class="orderDesc">
                                <p style="font-weight: 500; font-size: 20px;">Order Name</p>
                                <p  class="mb-3" style="color: rgb(57, 57, 57);">truckname</p>
                                <p class="mb-3" style="font-weight: 700; font-size: 17px;">Rs : 1200/-</p>
                                <p class="mb-3" style="font-weight: 500;">12th May, 2020</p>
                                <b style="color: rgb(57, 57, 57); font-size: 14px;">Pick up Address</b>
                                <address class="mb-3">
                                    Golaghat,
                                    785702
                                </address>
                                <b style="color: rgb(57, 57, 57); font-size: 14px;">Delivery Address</b>
                                <address class="mb-3">
                                    Furkating,
                                    7854321
                                </address> 
                                <details class="mb-3">
                                    <table  style="margin-left: 2rem;">
                                        <tr>
                                            <td>color</td><td style="padding: 0 10px;">:</td><td>dark red</td>
                                        </tr>
                                        <tr>
                                            <td>weight</td><td style="padding: 0 10px;">:</td><td>4.7 KG</td>
                                        </tr>
                                        <tr>
                                            <td>height</td><td style="padding: 0 10px;">:</td><td>30 inc</td>
                                        </tr>
                                        <tr>
                                            <td>width</td><td style="padding: 0 10px;">:</td><td>20 inc</td>
                                        </tr>
                                        <tr>
                                            <td>length</td><td style="padding: 0 10px;">:</td><td>54 inc</td>
                                        </tr>
                                    </table>
                                </details>
                                <b style="color: rgb(57, 57, 57); font-size: 14px;">Give Ratings</b>
                                <div class="rating flexr">
                                    <button class="star">&#9734;</button>
                                    <button class="star">&#9734;</button>
                                    <button class="star">&#9734;</button>
                                    <button class="star">&#9734;</button>
                                    <button class="star">&#9734;</button>
                                </div>
                                <b style="color: rgb(57, 57, 57); font-size: 14px;">Review</b>
                                <p class="mb-1">Shipped my chair in just 30 minutes. very fast.</p>
                                <form class="flexc" action="">
                                    <input style="padding: 5px 10px; margin: 5px 0px;" type="text" name="" id=""><br>
                                    <button class="btn btn-success">Submit Review</button>
                                </form>
                                <script>
                                    const allStars = document.querySelectorAll('.star');
                                    allStars.forEach((star, i ) => {
                                        star.onclick = function(){
                                            let current_star_level = i + 1;
                                            allStars.forEach((star, j) => {
                                                if(current_star_level >= j + 1){
                                                    star.innerHTML = '&#9733';
                                                }else{
                                                    star.innerHTML = '&#9734';
                                                }
                                            });
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--footer-->
                <?php
                include "./foot.php";
                ?>
<!...dock...>
<?php
include "./dock.php";
?>
</div>
</body>
</html> 
