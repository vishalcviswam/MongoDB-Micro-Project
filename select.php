<?php
include 'connection.php';
$result=$collection->find();
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<title>VIEW</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #A30000;
  color: white;
}
</style>
</head>
<body style="background-color:#f2f2f2;">


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">BLOOD DONATION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">ADD NEW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

 <h1 ALIGN="CENTER"><b>BLOOD BANK</b></h1>
<div class="card">
  <div class="card-body">
<table id="customers">
<tr>
<th>NAME</th>
<th>EMAIL</th>
<th>AGE</th>
<th>ADDRESS</th>
<th>PLACE</th>
<th>BLOOD GROUP</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>
<?php
foreach ($result as $res)
{
?>
<tr>
<td><?php echo $res['fullname'];?></td>
<td><?php echo $res['email'];?></td>
<td><?php echo $res['age'];?></td>
<td><?php echo $res['address'];?></td>
<td><?php echo $res['place'];?></td>
<td><?php echo $res['blood'];?></td>
<td><a href="<?php echo "edit.php?id=$res[_id]"?>">EDIT</a></td>
<td><a href="<?php echo "delete.php?id=$res[_id]"?>"onclick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
</tr>
</div>
</div>
<?php
	}
?>
</table>
</body>
</html>