<?php
include 'connection.php';
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="file:///C:/Users/vishal/Downloads/bootstrap-5.3.0-dist/bootstrap-5.3.0-dist/css/bootstrap.min.css">
<script type="text/javascript" src="file:///C:/Users/vishal/Downloads/bootstrap-5.3.0-dist/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>

<title >Registration</title>
</head>
<body>

<nav class="navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">BLOOD DONATION</span>
  </div>
</nav>
<br>
<h1 align=center><b>REGISTRATION FORM</b></h1>

<div class="card">
  <div class="card-body">

<form class="row g-3" action="insert.php" method="POST">
<div class="col-md-4">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="txt1" placeholder="Full Name" required>
  </div>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label" >Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="txt2" required>
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Age</label>
    <input type="text" class="form-control" id="inputPassword4" name="txt6" required>
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="txt3" required>
  </div>
  <div class="col-md-4">
    <label for="inputCity" class="form-label">Place</label>
    <input type="text" class="form-control" id="inputCity" name="txt4" >
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Blood Group</label>
    <select id="inputState" class="form-select" name= "txt5">
      <option>A+</option>
      <option>A-</option>
      <option>B+</option>
      <option>B-</option>
      <option>AB+</option>
      <option>AB-</option>
      <option>O+</option>
      <option>O-</option>
    </select>
  </div>
  <div class="col-4">
    <button type="submit" name="btn1" class="btn btn-primary"  >ADD</button>
    
  </div>

  </div>
</div>

</form>

</body>
</html>