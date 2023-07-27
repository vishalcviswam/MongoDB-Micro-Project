<?php
include 'connection.php';
$id=$_GET['id'];
$result=$collection->findOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
?>
<html>
<head>
<style>
body {
  background-image: url('https://cdn.britannica.com/32/191732-050-5320356D/Human-red-blood-cells.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}



</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<title>EDIT</title>
</head>
<body>

<form action="update.php" method="POST">
<center>
    <br>
<h1 style="color:white;"><B>UPDATE DETAILS</B></h1>
<div class="card bg-light text-dark" style="width: 70rem;">
  <div class="card-body">

<input type="hidden" name="id" value="<?php echo $id;?>">
<div class="col-md-4">
<input type="text" name="txt1" class="form-control" value="<?php echo $result['fullname'];?>"><br><br>
</div>
<div class="col-md-4">
<input type="email" name="txt2" class="form-control" value="<?php echo $result['email'];?>"><br><br>
</div>
<div class="col-md-4">
<input type="text" name="txt3" class="form-control" value="<?php echo $result['address'];?>"><br><br>
</div>
<div class="col-md-4">
<input type="text" name="txt4" class="form-control" value="<?php echo $result['place'];?>"><br><br>
</div>
<div class="col-md-1">
<select  name="txt5" class="form-select"><br><br>
    <option value="A+"<?php if(isset($_POST['blood']) && $_POST['blood'] == 'A+') echo 'selected'; ?>>A+</option>
    <option value="A-"<?php if(isset($_POST['blood']) && $_POST['blood'] == 'A-') echo ' selected'; ?>>A-</option>
    <option value="B+"<?php if(isset($_POST['blood']) && $_POST['blood'] == 'B+') echo ' selected'; ?>>B+</option>
    <option value="B-"<?php if(isset($_POST['blood']) && $_POST['blood'] == 'B-') echo ' selected'; ?>>B-</option>
    <option value="AB+"<?php if(isset($_POST['blood']) && $_POST['blood'] == 'AB+') echo 'selected'; ?>>AB+</option>
    <option value="AB-"<?php if(isset($_POST['blood']) && $_POST['blood'] == 'AB-') echo ' selected'; ?>>AB-</option>
    <option value="O+"<?php if(isset($_POST['blood']) && $_POST['blood'] == 'O+') echo ' selected'; ?>>O+</option>
    <option value="O-"<?php if(isset($_POST['blood']) && $_POST['blood'] == 'O-') echo ' selected'; ?>>O-</option>
</select><br><br>
</div>
<button type="submit" name="bt1" class="btn btn-primary"  >Update</button>
</center>
</form>
</div>
</div>
</body>
</html>