<?php
$server_name="localhost";
$user="root";
$password="";
$db_name="shopping";

$conn = mysqli_connect($server_name,$user,$password,$db_name);

if(!$conn)
{
die("connection failed " .mysqli_connect_error());
}
else
{
    // echo "connected succesfully";
}
?>
