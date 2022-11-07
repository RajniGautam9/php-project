<?php
include "include/header.php";
include "../connection.php";
$id= $_GET['id'];
$sql="SELECT * FROM category WHERE id='$id'";
$result= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);




?>
<div id="page-wrapper">
   

   <div class="row">
       <div class="col-lg-12">
           <h1 class="page-header">Forms</h1>
       </div>
       <!-- /.col-lg-12 -->
   </div>
   <!-- /.row -->
   <div class="row">
       <div class="col-lg-12">
           <div class="panel panel-default">
               <div class="panel-heading">
                   Form
               </div>
               <div class="panel-body">
                   <div class="row">
                       <div class="col-lg-12">
                           <form role="form" action="categoryedit.php?id=<?php echo $row['id'];?>" method="POST">
                               <div class="form-group">
                                   <label>Name</label>
                                   <input class= "form-control" placeholder =" category name" name="name"  value="<?php echo $row['category'];?>" required>
                                </div>
                                   <input type="submit" class="btn btn-primary"></button>

                               </div>
