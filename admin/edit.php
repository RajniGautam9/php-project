<?php
include "../connection.php";
$id=$_GET['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$category=$_POST['category'];
$size=$_POST['size'];
$brand=$_POST['brand'];
$image=$_FILES['productimage']['name'];

  
 
$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["productimage"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg
 
 if($basename){
$basenameTmp = $_FILES['productimage']['tmp_name'];
$directory ="../images/$basename";


$sql="UPDATE products SET name='$name', price='$price', description='$description', productimage='$basename', category='$category', size='$size', brand='$brand' WHERE id='$id';";
$result=mysqli_query($conn, $sql);



 if($result){
    move_uploaded_file($basenameTmp,$directory);
     header('location: product items.php');
    

 }
}
  
 else { 
     $sql="UPDATE products SET name='$name', price='$price', description='$description',category='$category', size='$size', brand='$brand' WHERE id='$id';"; 

     $result = mysqli_query($conn,$sql);
     if($result){
       
       header('location: product items.php');
     }
}
 
?>
