<?php
include "include/header.php"

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> users Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           user form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="useraction.php" method="POST">
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
                                            <label>e-mail</label>
                                            <input class="form-control" type="email" placeholder="e-mail" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control" type="password" placeholder="password" name="password" required>
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

