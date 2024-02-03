<?php
include_once('connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];

mysqli_query($mysqli, "update pegawai set name='$name', age='$age', address='$address' where id='$id'");

header("location:index.php");

?>