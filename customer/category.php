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
                                            
                                            
                                            </tr>
                                        <?php
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