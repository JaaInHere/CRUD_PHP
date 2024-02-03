<?php
include_once 'connection.php';
$id = $_GET['id'];
$data = mysqli_query($mysqli,"DELETE FROM `pegawai` WHERE id= '$id'");
// var_dump($id);
header('location:index.php');
?>