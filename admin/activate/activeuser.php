<?php
include "../../connection.php";
$status="Active";
$id = $_GET['id'];
  
$sql = "UPDATE users SET status='$status' WHERE id='$id'";
$query = mysqli_query($conn,$sql);

if($query){
    header("Location:../users.php");
}
else{
    echo "<script> alert('Error!') </script>";
}
?>