<?php
include "include/header.php";
include "../connection.php";
$sql="SELECT * FROM category";
$result=mysqli_query($conn, $sql);

?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category</h1>
                    <a href="addcategory.php"><button type="button" class="btn btn-primary" style= "float:right; margin-bottom:10px;">
                   Add category</button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          category table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Categories</th>
                                            <th>status</th>
                                            <th>Action</th>
                                          
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
                                            <td><?php echo $row['category'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td> 
                                                <a href ="editcatproducts.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm">Edit</button>

                                                <a href ="categorydelete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to Delete?')";><button type="button" class="btn btn-sm">Delete</button>
                                                <?php
                                            if ($row['status']=='Active') { ?>
                                            <a href="activate/deactivecategory.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm btn-danger">Deactive</button></a>
                                            
                                            <?php } else { ?>
                                                <a href="activate/activecategory.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm btn-success">Active</button></a>
                                            </td>
                                            
                                            </tr>
                                        <?php } 
                                        $i++;
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php
include "include/footer.php";
?>