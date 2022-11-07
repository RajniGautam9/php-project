<?php
session_start();
include "../connection.php";
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$mdpassword= md5($password);
$email =$_SESSION['email'];
$sql="UPDATE users SET password= '$mdpassword' WHERE email ='$email'";


if($_POST['password']!=$_POST['confirmpassword'])
{
    echo "<script>alert('password didnot match');
    window.open('resetpassword.php','_SELF');
    </script>";
}
else{
    $query = mysqli_query($conn,$sql);
    if($query){
       echo "<script>alert('password reset successfully')
       </script>"; 
      header("location:login.php");
    }
    else{
        echo "<script>alert('error!')</script>";
    }
}