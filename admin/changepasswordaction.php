<?php
include "../connection.php";
session_start();
$userid=$_SESSION['id'];
$typepassword=$_POST['password'];
$mdpassword=md5($typepassword);
$newpassword=$_POST['newpassword'];
$confirmpassword=$_POST['confirmpassword'];

$sql = "SELECT id FROM customer where id = '$userid' AND password = '$mdpassword'";
$query = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($query);

if($result){
     
    if($newpassword == $confirmpassword){
        header("Location: index.php");
    }
    else{
        echo "<script>alert('password doesnot match');
        window.open('changepassword.php''_SELF');
        </script>";
    }
}
else{
    echo "<script>alert('Old password doesnot matched');
    window.open('changepassword.php''_SELF');
    </script>";
}


