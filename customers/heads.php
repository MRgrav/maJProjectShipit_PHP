<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="../css/pre/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="../css/pre/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../css/pre/js/jquery.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="./sd.css">
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body onload="launc()">

    <div class="shadow" style="position: fixed; top: 0; z-index: 1070; width: 100vw;">
        <div class="my-nav align-items-center shadow justify-content-space-between">
            <div >
                <div class="logo" style="padding-left: 10px;">
                    <h2><b style="color: white;">Logo</b></h2>
                </div>
            </div>
            <div style="display: flex; margin: none; padding: 5px; align-items: center;">
                <li class="nav-item dropdown row m-0">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell" style="color: white;"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="position: absolute; max-height: 50vh;">
                        <b style="height: 50px; padding: 0px 10px;">Notifications</b>
                        <div style="max-height: calc(50vh - 100px);border-top: 1px solid black; border-bottom: 1px solid black; overflow-y: auto;">
                            <li><a class="dropdown-item" href="#">Order Delivered</a></li>
                        </div>
                        <a href="./not.php" style="display: inline-block; width: 160px; text-align: center; height:auto;">view all</a>
                    </ul>
                </li>
                <div class="menu-sm">
                    <i class="bi bi-list" id="menuPhone" style="font-size: 24px;"></i>
                </div>
            </div> 
        </div>
    </div>
