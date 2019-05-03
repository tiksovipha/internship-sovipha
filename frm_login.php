<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to my wedding website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<div class="container" style="background-color:whitesmoke; width: 500px; height:330px;">
<div class="row" style="border: 1px solid grey"> 
     <div class="col-lg-9" style="font-size: 25px; text-align: center;color:black">Login</div>
     <div class="col-lg-3">
       <button onclick="closeWin()">Close</button>
     </div>
</div>
<div class="row" style="border: 1px solid grey">
	 <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    <p> Forget Password</p>
  </form>
</div>
</div>
<script>
function closeWin() {
     var myWindow;
  myWindow.close();
}
</script>
</body>
</html>