<?php
include "../connection.php";
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$mdpassword= md5($password);
$status=$_POST['status'];

$sql="INSERT INTO users(name,address,phone,email,password,status) VALUES('$name','$address','$phone','$email','$mdpassword','$status');";
$result=mysqli_query($conn,$sql);


if($result)
{
  header('location:users.php');
}
?>     