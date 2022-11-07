<?php
include "../connection.php";
$name =$_POST['name'];
$price =$_POST['price'];
$description=$_POST['description'];
$category =$_POST['category'];
$size =$_POST['size'];
$brand =$_POST['brand'];
$status=$_POST['status'];
$image=$_FILES['productimage']['name'];

$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["productimage"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
 
 
$basenameTmp = $_FILES['productimage']['tmp_name'];
$directory ="../images/$basename";




$sql ="INSERT INTO products(name,price,description,productimage,category,size,brand,status) VALUES('$name','$price','$description','$basename','$category','$size','$brand','$status')";
$result=mysqli_query($conn,$sql);


if($result)
{
    move_uploaded_file($basenameTmp,$directory);
    header('location: product items.php');
}
else{

}

?>