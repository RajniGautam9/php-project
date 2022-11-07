<?php
include "../connection.php";
$id=$_GET['id'];
$name=$_POST['name'];

$sql= "UPDATE category SET category='$name' WHERE id='$id';";
$result=mysqli_query($conn,$sql);

if ($result)
{
 header('location:category.php');
}
?>