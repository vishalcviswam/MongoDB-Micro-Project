<?php
include 'connection.php';
$id=$_GET['id'];
echo $id;
$collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id)]);
header("location:select.php");
?>