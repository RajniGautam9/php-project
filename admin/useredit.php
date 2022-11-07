<?php
include "../connection.php";
$id=$_GET['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$sql="UPDATE users SET name='$name',address='$address',phone='$phone',email='$email' WHERE id='$id';";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:users.php');
}
?>
