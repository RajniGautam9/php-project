<?php
session_start();
include "../connection.php";
$otp=$_POST['otp'];
$id=$_SESSION['id'];
$sql = "SELECT * FROM customer WHERE id='$id' AND otp ='$otp'";
$result=mysqli_query($conn,$sql);


if(mysqli_num_rows($result)==1)
{
    
    
    header('Location:resetpassword.php');
}
else
{
    echo "<script>alert('otp doesnot match');
    window.open('otp.php','_SELF');
    </script>";
 }
    ?>
