<?php
include "../connection.php";
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$mdpassword=md5('$password');
$status=$_POST['status'];
$image=$_FILES['customerimage']['name'];



$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["customerimage"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
 
 
$basenameTmp = $_FILES['customerimage']['tmp_name'];
$directory ="../images/$basename";




$sql="INSERT INTO customer(customerimage,name,address,phone,email,status) VALUES( '$basename','$name','$address','$phone','$email','$status');";
$result=mysqli_query($conn,$sql);


if($result)
{
  move_uploaded_file($basenameTmp,$directory);
  header('location:customer.php');
}
?>