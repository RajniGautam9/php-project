<?php
include "../connection.php";
$name =$_POST['name'];
$status=$_POST['status'];
$sql ="INSERT INTO category(category,status) VALUES('$name', '$status')";
$result=mysqli_query($conn,$sql);


if($result)
{
    header('location:category.php');
}

?>