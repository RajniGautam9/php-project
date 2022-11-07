<?php
include "include/header.php";

?>
<div id="page-wrapper">
   

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BrandForm </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage brand
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="brandaction.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class= "form-control" placeholder =" brand name" name="name" required>
                                          </div>
                                          <div class="form-group">
                                            
                                            <label>Brand image</label><br>
                                                    <input type="file" name="brandimage">
        
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
                                                    <input type="radio" name="status" id="deactive" value="Deactive">De-active                                                </label>
                                            </div>
                                            <input type="submit" class="btn btn-primary"></button>

                                        </div>

                                        <?php
include "include/footer.php"
?>
              