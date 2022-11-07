<?php
include "include/header.php";
include "../connection.php";
$sql="SELECT * FROM brand";
$result=mysqli_query($conn,$sql);
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Brand</h1>
                   
                <!-- /.col-lg-12 
            </div>
             /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Brand table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Brand</th>
                                            
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        <?php
                                          $i=1;
                                          while($row=mysqli_fetch_array($result))
                                        {
                                            ?>
                                       <tr class="odd gradeX">
                                       <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['sbrand'];?></td>
                                           
                                            </tr>
                                        <?php
                                         $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
 <?php
 include "include/footer.php";
 ?>                                       