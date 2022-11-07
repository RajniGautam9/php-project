<?php
include "include/header.php";

?>
<div id="page-wrapper">
   

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage category</h1>
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
                                    <form role="form" action="categoryaction.php" method="POST">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class= "form-control" placeholder =" category name" name="name" required>
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
                                            <input type="submit" class="btn btn-primary"></button>

                                        </div>

                                        <?php
include "include/footer.php"
?>
              