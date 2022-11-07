<?php
session_start();
include "../connection.php";
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$typepassword=$_POST['typepassword'];
$password=$_POST['newpassword'];
$confirmpassword=$_POST['confirmpassword'];
$mdpassword= md5($password);
$email =$_SESSION['email'];
$sql="UPDATE customer SET name='$name',address='$address',email='$email',password= '$mdpassword' WHERE email ='$email'";


if($_POST['newpassword']!=$_POST['confirmpassword'])
{
    echo "<script>alert('password didnot match');
    window.open('resetcustomerpassword.php','_SELF');
    </script>";
}
else{
    $query = mysqli_query($conn,$sql);
    if($query){
       echo "<script>alert('password reset successfully')
       </script>"; 
      header("location:customer.php");
    }
    else{
        echo "<script>alert('error!')</script>";
    }
}