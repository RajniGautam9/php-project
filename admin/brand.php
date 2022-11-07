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
                    <a href="addbrand.php"><button type="button" class="btn btn-primary" style= "float:right; margin-bottom:10px;">
                   Add brand</button></a>
                </div>
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
                                            <th>Brand image</th>
                                            <th>status</th>
                                            <th>Action</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                        <?php
                                          $i=1;
                                          while($row=mysqli_fetch_array($result)){
                                            ?>
                                       <tr class="odd gradeX">
                                       <td><?php echo $row['id'];?></td>
                                            <td><?php echo $row['sbrand'];?></td>
                                            <td><img src="../images/<?php echo $row['brandimage'];?>" style="height:50px; width:50px;"></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td> 

                                            <a href ="editbrandproducts.php?id=<?php echo $row['id'];?>">   <button type="button" class="btn btn-sm">Edit</button>

                                            <a href ="branddelete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete?')";>   <button type="button" class="btn btn-sm">Delete</button>
                                            <?php
                                            if ($row['status']=='Active') { ?>
                                            <a href="activate/deactivebrand.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm btn-success">Deactive</button></a>
                                            

                                            <?php } else { ?>
                                                <a href="activate/activebrand.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm btn-danger">Active</button></a>
                                            </td>

                                            <?php } ?>
                                           
                                           
                                          
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