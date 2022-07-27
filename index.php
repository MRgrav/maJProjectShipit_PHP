<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="./css/pre/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="./css/pre/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
	<link rel="stylesheet" href="./common/sd.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
	*{margin: 0; box-sizing: border-box;}
	h1{
		font-size: 70px;
		padding: 5vw;
		padding-bottom: 10px;
		}
	h2{padding: 0px 5vw;}
	</style>
</head>
<body style="background-image: linear-gradient(135deg, #E5FAFF 60%, #32A7CB70 40%);">
	<div class="contianer-fluid" style="overflow-x: hidden;" >
		<nav class="navbar navbar-expand-lg p-2 navbar-light" style="background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0));">
		  <div class="container-fluid align-items-end">
			<a class="navbar-brand pb-0" href=""><b style="font-size: 34px;">Shippit</b></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			  <ul class="navbar-nav">
				<li class="nav-item">
				  <a class="nav-link" aria-current="page" href="#">About</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Contacts</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		
		<!--part2-->
		<section>
			<div class="row wrap-reverse align-items-end">
				<div class="col-sm-7 p-3 pb-1">
					<h1 class="text-end">Ship anything<br>with us.</h1><br><h2 class="text-end"> - Shippit</h2>
				</div>
				<div class="col-sm-5">
					<img src="./media/tr1.png" class="w-100 p-4" style="min-width: 300px; max-width: 500px;">
				</div>
			</div>
		</section>
		
		<section>
			<div class="row wrap-reverse align-items-end">
				<div class="col-sm-5 flexr justify-content-end">
					<img src="./media/ds22.png" class="w-100 p-4" style="height: fit-content; min-width: 300px; max-width: 600px;">
				</div>
				<div class="col-sm-7 p-3">
					<h1>Get a budget friendly<br>price.</h1>
					<h2>Also see the ratings and reviews.</h2>
				</div>
			</div>
		</section>
		
		<section>
			<div class="row align-items-end">
				<div class="col-sm-7 p-3">
					<h1 class="text-end">Signup & Login</h1><br><h2 class="text-end">And start our service from anywhere,</h2>
					<div class="flexr justify-content-end" style="padding: 0px 5vw;">
						<div class="btn-group shadow">
							<a href="./customers/login.php" class="btn btn-primary ps-4 pe-4">LOGIN</a>
							<a href="./customers/signup.php" class="btn btn-warning ps-4 pe-4">SIGNUP</a>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<img src="./media/ds12.png" class="w-100 p-4" style="min-width: 300px; max-width: 600px;">
				</div>
			</div>
		</section>
		
		<section>
			<div class="flexr row wrap-reverse align-items-end" style="flex-wrap: row-reverse;	">
				<div class="col-sm-5 flexr justify-content-end">
					<img src="./media/ds32.png" class="w-100 p-4" style="height: fit-content; min-width: 300px; max-width: 700px;">
				</div>
				<div class="col-sm-7 p-3">
					<h1 class="text-start">Start your career</h1><br>
					<h2 class="text-start">with our <b>Shippit Truck</b> service</h2>
					<h4 class="text-start" style="padding: 10px 5vw">List your truck and start getting your orders.</h4>
					<div class="flexr justify-content-start" style="padding: 0px 5vw;">
						<div class="btn-group shadow">
							<a class="btn btn-primary ps-4 pe-4" href="./truck/login.php">LOGIN</a>
							<a class="btn btn-warning ps-4 pe-4" href="./truck/signup.php">SIGNUP</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<footer>
			<p class="w-100 p-4 text-center">copyright &copy; 2022</p>
		</footer>
	</div>
</body>
</html>
