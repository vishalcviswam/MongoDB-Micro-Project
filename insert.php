<?php
include 'connection.php';
if(isset($_POST['btn1']))
	$name=$_POST['txt1'];
	$email=$_POST['txt2'];
	$address=$_POST['txt3'];
	$place=$_POST['txt4'];
	$blood=$_POST['txt5'];
	$age=$_POST['txt6'];
	$doc=array("fullname"=>$name,"email"=>$email,"address"=>$address,"place"=>$place,"blood"=>$blood,"age"=>$age);
	$collection->insertOne($doc);
	echo "INSERTED";
	header("location:select.php");
?>