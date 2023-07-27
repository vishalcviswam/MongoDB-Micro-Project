<?php
include("newconnection.php");
session_start();


if(isset($_POST['submit'])){

		$userr = array(

	
	'email' => $_POST['email'],
	'password' =>$_POST['password']);
	
        $user = $collection->findOne($userr);

        if ($user) {
            echo '<b>Login successful!</b>';
			$_SESSION["user"] = $user;
			header("Location:select.php");

        } 
		else {
            
            echo '<b>Invalid username, email, or password</b>';
        }

 }
 
?>

<html>
<head>
    <title>LogIn </title>
    <style>
       body {
  background-image: url('https://nhsbtdbe.blob.core.windows.net/umbraco-assets-corp/25124/blood-g4e28dcb97_1920.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
} 
    </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>

<nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><b>LOGIN</b></span>
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

  <button type="submit" class="btn btn-primary" name="submit">Login</button>
</div>
<br>
  <a href="home.php"  class="no-underline"> Back to Home Page </a>
</form>
</div>
</div>
</center>
</body>
</html>
