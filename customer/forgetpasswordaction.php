<?php
session_start();
include "../connection.php";
$otp=mt_rand(100000,999999);
$email=$_POST['email'];
$sql="SELECT * FROM customer WHERE email= '$email' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result) ;

if($row)
{
    $_SESSION['id'] = $row['id'];
    $id=$_SESSION['id'];
    $sql = "UPDATE customer SET otp='$otp' WHERE id='$id';";
    $result = mysqli_query($conn,$sql);
    $_SESSION['email']=$email;
    if($result){
    header("location:otp.php");
    }
else
{
    echo "<script>alert('otp doesnot match');
    </script>";
}
}    

else{
    echo "<script>alert('email didnot match');
    window.open('forgetpassword.php','_SELF')</script>";
}
?>