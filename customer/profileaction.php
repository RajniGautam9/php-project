
<?php
include "../connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];

$userid=$_POST['id'];
$image=$_FILES['customerimage']['name'];

  
if($image){
$imageTmp = $_FILES['customerimage']['tmp_name'];
$directory ="../images/$image";

$sql ="UPDATE customer SET customerimage='$image',name='$name',email='$email',address='$address',phone='$phone' WHERE id='$userid'";
$result= mysqli_query($conn,$sql);

if($result){
    move_uploaded_file($imageTmp,$directory);
    header('location:profileform.php');
}
}
else{
    $sql = "UPDATE customer SET name='$name',email='$email',address='$address',phone='$phone' WHERE id='$userid'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:profileform.php');
    }
}
