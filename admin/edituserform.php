<?php
include "include/header.php";
include "connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM users where id='$id';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Users Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Users form element
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="useredit.php?id=<?php echo $row['id'];?>" method="POST">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class= "form-control" placeholder="name" name="name" value="<?php echo $row['name'];?>" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>address</label>
                                            <input class="form-control" placeholder="address" name="address" value="<?php echo $row['address'];?>" required>
                                        </div>


                                        <div class="form-group">
                                            <label>phone</label>
                                            <input class="form-control" rows="3" placeholder="phone" name="phone" value="<?php echo $row['phone'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>e-mail</label>
                                            <input class="form-control" rows="3" placeholder="e-mail" name="email" value="<?php echo $row['email'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control" rows="3" placeholder="password" name="password" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>


