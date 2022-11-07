<?php
include "../connection.php";
$name=$_POST['name'];
$status=$_POST['status'];


$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["brandimage"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg



$imageTmp = $_FILES['brandimage']['tmp_name'];
$directory ="../images/$basename";
      
$sql="INSERT INTO brand(sbrand,brandimage,status) VALUES('$name','$basename','$status')";

$result=mysqli_query($conn,$sql);

if($result)
{
    move_uploaded_file($imageTmp,$directory);
    header('location:brand.php');
}
else{
    echo "Error!";

}
?>