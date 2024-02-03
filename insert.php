<?php 

include_once 'connection.php';
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];

$insert = mysqli_query($mysqli, "INSERT INTO `pegawai`(`name`, `age`, `address`) 
VALUES ('$name','$age','$address')");

header("location: index.php"); 
// if ($insert){
//     echo 'hai'; 
// }else{
//     echo "something went wrong!";
// };
?>