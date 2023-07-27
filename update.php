<?php
include 'connection.php';
if(isset($_POST['bt1']))
	$idd=$_POST['id'];
	$name=$_POST['txt1'];
	$email=$_POST['txt2'];
	$address=$_POST['txt3'];
	$place=$_POST['txt4'];
	$blood=$_POST['txt5'];
	$collection->updateOne(['_id' => new MongoDB\BSON\ObjectID($idd)],['$set'=>['fullname'=>$name,'email'=>$email,
	'address'=>$address,'place'=>$place,'blood'=>$blood]]);
	header("location:select.php");
?>