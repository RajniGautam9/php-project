<?php 
include "../connection.php";
$id=$_GET['id'];
$sql= "Delete FROM `order` WHERE id='$id'";
$result=mysqli_query($conn,$sql);
echo $result;

if($result)
{ 
header('location:order.php');
}
?>