<!DOCTYPE html>
<html>
<head>
	<title>Wedding clothes information</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to my wedding website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="home.css">
    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-light font-weight-bold ">
  <!-- Brand -->
  <a class="navbar-brand" href="#">
  	<img src="wedding picture/logo/logo9.jpg" alt="logo 1" width="140px" height="100px;">
  </a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Product
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="clothes_product.php">wedding dress</a>
        <a class="dropdown-item" href="clothes_product.php">place</a>
        <a class="dropdown-item" href="clothes_product.php">flower</a>
        <a class="dropdown-item" href="clothes_product.php">pre wedding</a>
        <a class="dropdown-item" href="clothes_product.php">nomkhmer</a>
        <a class="dropdown-item" href="clothes_product.php">cheft</a>
        <a class="dropdown-item" href="clothes_product.php">resort</a>
        <a class="dropdown-item" href="clothes_product.php">invitation</a>
        <a class="dropdown-item" href="clothes_product.php">salon</a>
         <a class="dropdown-item" href="clothes_product.php">music band</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="frm_login.php">Login</a>
    </li>
  </ul>
</nav>
<br>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop >=100 || document.documentElement.scrollTop >= 200) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>