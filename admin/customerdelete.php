<?php
include "../connection.php";
$id=$_GET['id'];
$sql= "DELETE FROM customer WHERE id= '$id'";
$result=mysqli_query($conn,$sql);


if ($result)
{
    header('location:customer.php');
}
