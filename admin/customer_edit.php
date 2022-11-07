<?php
include "../connection.php";
$id=$_GET['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["customerimage"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
 
 if($basename){
$basenameTmp = $_FILES['customerimage']['tmp_name'];
$directory ="../images/$basename";


$sql="UPDATE customer SET customerimage='$basename',name='$name',address='$address',phone='$phone',email='$email' WHERE id='$id';";
$result=mysqli_query($conn,$sql);

if($result)
{
    move_uploaded_file($basenameTmp,$directory);
    header('location:customer.php');
}
 }
else{
$sql="UPDATE customer SET name='$name',address='$address',phone='$phone',email='$email', WHERE id='$id';";
$result=mysqli_query($conn,$sql);

if($result)
{
    header('location:customer.php');
}
}
?>
