
<?php
include "../connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone=$_POST['phone'];

$userid=$_POST['id'];

$filename   = uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
$extension  = pathinfo( $_FILES["userimage"]["name"], PATHINFO_EXTENSION ); // jpg
$basename   = $filename . "." . $extension; // 5dab1961e93a7_1571494241.jpg


  
if($basename){
$basenameTmp = $_FILES['userimage']['tmp_name'];
$directory ="../images/$basename";

$sql ="UPDATE users SET userimage='$basename',name='$name',email='$email',address='$address',phone='$phone' WHERE id='$userid'";
$result= mysqli_query($conn,$sql);

if($result){
    move_uploaded_file($basenameTmp,$directory);
    header('location:profileform.php');
}
}
else{
    $sql = "UPDATE users SET name='$name',email='$email',address='$address',phone='$phone' WHERE id='$userid'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:profileform.php');
    }
}
