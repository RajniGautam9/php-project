<?php
include "../connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

$mdpassword=md5($password);

$sql="INSERT INTO users (name,email,password) VALUES('$name','$email','$mdpassword');";

if($_POST['password']!=$_POST['confirmpassword'])
{
   echo "<script>alert('password did not match');
    windows.open('signup.php','_SELF');
    </script>";
    // header("Location: signup.php");
}
else{
    $query = mysqli_query($conn,$sql);
    if($query){
        // echo "<script>alert('signup add successfully');
        // windows.open('login.php','_SELF');
        // </script>";
        header("Location: login.php");
    }
    else
    {
     echo "<script>alert('error')</script>";
}
}