<?php
include "../connection.php";
$id=$_GET['id'];
$customername=$_POST['customer'];
$product=$_POST['product'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$totalamount=$_POST['totalamount'];
$createdby=$_POST['createdby'];
$status=$_POST['status'];

$sql= "UPDATE `order` SET customer='$customername',product='$product', price='$price',quantity='$quantity',totalamount='$totalamount',createdby='$createdby',status='$status'WHERE id='$id';";
$result=mysqli_query($conn,$sql);

if($result){
    header ('Location:order.php');
}
?>