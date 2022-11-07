<?php
include "../connection.php";
$customername=$_POST['customer'];
$product=$_POST['product'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$totalamount=$_POST['totalamount'];
$createdby=$_POST['createdby'];
$status=$_POST['status'];

$sql="INSERT INTO `order`(customer,product_id,price,quantity,totalamount,createdby,status) VALUES('$customername','$product','$price','$quantity','$totalamount','$createdby','$status')";
$result=mysqli_query($conn,$sql);

if($result){
    header('location: order.php');
    }
?>