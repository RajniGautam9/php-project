<?php
include "../connection.php";
$id=$_GET['id'];
$name=$_POST['name'];

$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["brandimage"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
 
 if($basename){
$basenameTmp = $_FILES['brandimage']['tmp_name'];
$directory ="../images/$basename";


$sql= "UPDATE brand SET sbrand='$name',brandimage='$basename' WHERE id='$id';";
$result=mysqli_query($conn,$sql);
 }
if ($result)
{
    move_uploaded_file($basenameTmp,$directory);
 header('location:brand.php');
}
else{
    $sql="UPDATE brand SET sbrand='$name',WHERE id='$id';";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:brand.php');
    }
}
?>