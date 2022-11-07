<?php
include "include/header.php"

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Customer Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Manage customer
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="customeraction.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                            
                                            <label>Customer Image</label><br>
                                                    <input type="file" name="customerimage">
        
                                            </div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class= "form-control" placeholder ="name" name="name" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>address</label>
                                            <input class="form-control" placeholder="address" name="address" required>
                                        </div>


                                        <div class="form-group">
                                            <label>phone</label>
                                            <input class="form-control" rows="3" placeholder="phone" name="phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control" placeholder="password" name="password" type="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Status:</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="active" value="Active" checked>Active
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="status" id="deactive" value="Deactive">De-active</label></div>
                                        
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
<?php
include "include/footer.php";
?>

