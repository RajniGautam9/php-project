<?php
include "../../connection.php";
$status="Deactive";
$id = $_GET['id'];
  
$sql = "UPDATE `order` SET status='$status' WHERE id = '$id'";
$query = mysqli_query($conn,$sql);

if($query){
    header('Location:../order.php');
}
 else{
    echo "<script> alert('Error')</script>";
 }
?>