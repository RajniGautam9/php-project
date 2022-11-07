<?php
include "include/header.php";
include "../connection.php";
$id=$_SESSION['id'];
$sql=" SELECT * FROM users WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> User information </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       <div class="panel-heading" style="background-color: aqua;">
                      <h2> User Profile</h2>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" >
                                        <div class="form-group">
                                            <!-- <label>userimage</label> -->
                                            <img src="../images/<?php echo $row['userimage'];?>" style="height:150px; width=100px; border-radius: 150px;" >
                                            
                                        </div>
                                        


                                        <div class="form-group">
                                           <h2> <label><?php echo $row['name'];?></label></h2>
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label><?php echo $row['email'];?></label>
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label><?php echo $row['address'];?></label>
                                            
                                        </div>


                                        <div class="form-group">
                                            <label><?php echo $row['phone'];?></label>
                                            
                                        </div>
                                       
                                       <a href ="profileedit.php"> <button type="button" class="btn btn-success">Edit </button></a>
                                        
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                    

<?php
include "include/footer.php";
?>

