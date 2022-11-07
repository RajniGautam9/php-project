<?php 
include "../connection.php";
$id=$_GET['id'];
$sql= "Delete FROM users WHERE id='$id'";
$result=mysqli_query($conn,$sql);
echo $result;

if($result)
{ 
header('location:users.php');
}
?>