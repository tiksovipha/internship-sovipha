<!DOCTYPE html>
<html>
<head>
	<title>Product detail information</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to my wedding website</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="home.css">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 30%;
      height: 10%;
  }
  </style>
</head>
<?php
 include 'homepage.php'; 
?>
<body>
<div id="demo" class="carousel slide" data-ride="carousel"> 
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="wedding picture/clothes/clothes20.jpg" class="mx-auto d-block" alt="clothes 1" width="500" height="500">
    </div>
    <div class="carousel-item">
      <img src="wedding picture/clothes/clothes22.jpg" class="mx-auto d-block" alt="clothes 2" width="500" height="500">
    </div>
    <div class="carousel-item">
      <img src="wedding picture/clothes/clothes29.jpg" class="mx-auto d-block" alt="clothes 3" width="500" height="500">
    </div>
    <div class="carousel-item">
      <img src="wedding picture/clothes/clothes30.jpg" class="mx-auto d-block" alt="clothes 4" width="500" height="500">
    </div>
    <div class="carousel-item">
      <img src="wedding picture/clothes/clothes31.jpg" class="mx-auto d-block" alt="clothes 5" width="500" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container" style="background-color: whitesmoke; margin-top: 20px;">
	<div class="row">
		<div class="col-lg-8">
			<img src="wedding picture/clothes/clothes35.jpg" style="width: 600px; height: 700px;">
		</div>
		<div class="col-lg-4">
			<div class="row" style="border: 1px solid grey;">
				<div class="col-lg-12">
					<h3 style="color: blue; text-align: center;">Contact Information</h3>
					<p style="font-size: 20px; color: black;">
						Tel:012/088 555 777<br>
						Email:wedding_clothes@gmail.com<br>
						Address: #111 st 123 Sangkat Toul Svay Prey II Phnom Penh
					</p>
				</div>
			</div>
			<div class="row" style="margin-top: 15px; border: 1px solid grey;">
				<div class="col-lg-12">
					<h3 style="color: blue; text-align: center;">Our Product</h3>
					<p style="font-size: 20px; color: black;">
						Product: clothes for bride and groom both traditional and modern.
					</p>
				</div>
			</div>
			<div class="row" style="margin-top: 15px; border: 1px solid grey">
				<div class="col-lg-12">
					<marquee>
					<h1 style="color: blue; text-align: center;">The special Event for couple</h1>
					</marquee>
					<img src="wedding picture/ads/ads4.jpg" align="photo" width="350px" height="250px">
                    <marquee>
                    	<p style="color: black; font-size: 25px; margin-top: 10px; color: blue"> Join Now!!! You can get a lot of benefites from our event from today.</p>
                    </marquee>
			</div>
		</div>
	</div>
</div>
<?php
 include 'footer.php';
?>
</body>
</html>