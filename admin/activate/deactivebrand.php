<?php
include "../../connection.php";
$status="Deactive";
$id = $_GET['id'];
  
$sql = "UPDATE brand SET status='$status' WHERE id = '$id'";
$query = mysqli_query($conn,$sql);

if($query){
    header('Location:../brand.php');
}
 else{
    echo "<script> alert('Error')</script>";
 }
?>

