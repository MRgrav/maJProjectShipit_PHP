<?php
include "./heads.php";
?>


    <div class="container shadow p-0">
        <div style="display: flex; flex-direction: row;">

            <!...side-bar...>
            <div class="side-bar" style="height: 100vh; padding-top: 7vh;">
                <div class="create-pc">                      
                    <a href="./sd2.html"><i class="bi bi-plus-lg"></i><label>Create Order</label></a>
                </div>
                <div class="side-menu">
                    <hr>
                    <div class="smenu-items">
                        <a href=""><i class="bi bi-house"></i><label>Home</label></a>
                    </div>
                    <div class="smenu-items">
                        <a href=""><i class="bi bi-cart"></i><label>My Orders</label></a>
                    </div>
                    <div class="smenu-items">
                        <a href=""><i class="bi bi-person"></i><label>My Account</label></a>
                    </div>
                    <hr>
                    <div class="smenu-items tog">
                        <a href=""><label>About</label></a>
                    </div>
                    <div class="smenu-items tog">
                        <a href=""><label>Contacts</label></a>
                    </div>
                    <hr class="tog">
                    <div class="smenu-items">
                        <a href=""><i class="bi bi-truck"></i><label>Start Business</label></a>
                    </div>
                    <div class="smenu-items" style="margin-top: 33vh;">
                        <a href=""><i class="bi bi-box-arrow-left"></i><label>Logout</label></a>
                    </div>
                </div>
            </div>

            <!...main...>
            <div class="main" style="padding-top: 7vh;">
                <div class="locat-me">
                    <input type="text" name="address" value="" placeholder="current location"><i class="bi bi-geo-alt"></i>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide mt-2 mb-2" data-bs-ride="carousel">
                    <div class="carousel-indicators ">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.YclSe5W3SHRFmG9zvOJbHwHaEK%26pid%3DApi&f=1" class="d-block w-100 roundSlide" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.7Os30-8iu6R3f9K1GZ34yAHaDH%26pid%3DApi&f=1" class="d-block w-100 roundSlide" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP._2a_QKyzL4WRryEuWzbZdwHaEK%26pid%3DApi&f=1" class="d-block w-100 roundSlide" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                <div>
                    <div>
                        <label class="labelForCH">Trucks near by you</label>
                    </div>

                    <div class="row p-3">
                        <a href="#" class="card col-xl-4 col-md-6">
                            <label>new</label>
                            <img src="" alt="">
                            <div class="card-desc">
                                <h4>Truck Model</h4>
                                <p>username</p>
                                <p>ratings</p>
                            </div>
                        </a>
                        <div class="card col-xl-4 col-md-6">
                            <img src="" alt="">
                            <div class="card-desc">
                                <h4>Truck Model</h4>
                                <p>username</p>
                                <p>ratings</p>
                            </div>
                        </div>
                        <div class="card col-xl-4 col-md-6">
                            <img src="" alt="">
                            <div class="card-desc">
                                <h4>Truck Model</h4>
                                <p>username</p>
                                <p>ratings</p>
                            </div>
                        </div>
                        <div class="card col-xl-4 col-md-6">
                            <img src="" alt="">
                            <div class="card-desc">
                                <h4>Truck Model</h4>
                                <p>username</p>
                                <p>ratings</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="container-fluid bg-light">
                    <div class="row m-0">
                        <div class="col-md-6 p-5">
                            <form action="">
                                <b>Feedback Form</b><br>
                                <label>name</label>
                                <input class="form-control" type="text">
                                <label>email</label>
                                <input class="form-control" type="text">
                                <label>massage</label>
                                <input class="form-control" type="text">
                                <button class="btn btn-success m-2">submit</button>
                            </form>
                        </div>
                        <div class="col-md-6 p-5">
                            <address>
                                golaghat, 785702
                            </address>
                        </div>
                        <div class="row  justify-content-center m-0 p-3">copyright &copy; 2022</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!...dock...>
    <div class="dock" style="z-index: 1085;">
        <div class="add-dock">
            <a href="./sd2.html"><i class="bi bi-plus"></i></a>
        </div>
        <div class="dock-items">
            <a class="active-i" href=""><i class="bi bi-house"></i><label class="dock-l">Home</label></a>
        </div>
        <div class="dock-items">
            <a href=""><i class="bi bi-cart"></i><label class="dock-l">My Orders</label></a>
        </div>
        <div class="dock-items">
            <a href=""><i class="bi bi-person"></i><label class="dock-l">My Account</label></a>
        </div>
    </div>
</body>
</html>
