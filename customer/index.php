<?php

include "include/header.php";
 
?>


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-spotify fa-5x"></i>
                                    <?php
                                    $sql="SELECT * FROM category";
                                    $result=mysqli_query($conn,$sql);
                                    $row=mysqli_num_rows($result);
                                    ?>
                                   
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $row ;?></div>
                                    <div>Total category!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-star-half-full fa-5x"></i>
                                    <?php
                                    $sql="SELECT * FROM brand";
                                    $result=mysqli_query($conn,$sql);
                                    $row=mysqli_num_rows($result);
                                    ?>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $row;?></div>
                                    <div>Total Brand!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                    <?php
                                    $sql="SELECT * FROM products";
                                    $result=mysqli_query($conn,$sql);
                                    $row=mysqli_num_rows($result);
                                    ?>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $row;?></div>
                                    <div>Total Products!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                    <?php
                                    $sql="SELECT * FROM users";
                                    $result=mysqli_query($conn,$sql);
                                    $row=mysqli_num_rows($result);
                                    ?>


                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $row;?></div>
                                    <div>Total users!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
           
<?php
include "include/footer.php";
?>