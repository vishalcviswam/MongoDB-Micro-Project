<html>
<head>
    <title>Sign Up</title>
    <style>
      body {
  background-image: url('https://www.fda.gov/files/iStock-955502676.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><b>SIGN UP</b></span>
  </div>
</nav>
<br><br>
<center>
<div class="card bg-light text-dark" style="width: 70rem;">
  <div class="card-body">

<form action="#" method="post">
  <div class="col-md-4">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
  </div>
  <div class="col-md-4">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>
  <br>
  <div class="col-md-1">

  <button type="submit" class="btn btn-primary" name ="submit">Sign Up</button>
</div>
<br>
  <a href="home.php"  class="no-underline"> Back to Home Page </a>
</form>
</div>
</div>
</center>
</body>
</html>
<?php
include 'newconnection.php';

 if(isset($_POST['submit'])){

	$user = array(
	'email' => $_POST['email'],
	'password' => $_POST['password']
	);
	$collection->insertOne($user);
 
	echo "!!Account Created ";
    header("Location:login.php");
 }
 
	

?>