<?php
include "../connection.php";
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$mdpassword=md5($password);
$sql=" SELECT * FROM customer WHERE email='$email' AND password='$mdpassword'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
$_SESSION['is_logged_in'] = true;
$userdata = mysqli_fetch_array($result);
$_SESSION['id'] = $userdata['id'];
$_SESSION['name'] = $userdata['name'];
$_SESSION['email'] = $userdata['email'];
$_SESSION['user_type']='user';

header("Location: index.php");
// echo"<script>
// windows.open('index.php','_SELF');
// </script>"; 

    
 }
 else
 {
    echo"<script>alert('email or password Invalid');
    window.open('login.php','_SELF');
    </script>";
   // header("location:login.php");
}
  


?>