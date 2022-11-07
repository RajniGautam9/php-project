<?php
include "../../connection.php";
$status="Deactive";
$id = $_GET['id'];
  
$sql = "UPDATE category SET status='$status' WHERE id = '$id'";
$query = mysqli_query($conn,$sql);

if($query){
    header('Location:../category.php');
}
 else{
    echo "<script> alert('Error')</script>";
 }
?>

