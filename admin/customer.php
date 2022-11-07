<?php
include "include/header.php";
include "../connection.php";
$sql="SELECT * FROM customer;";
$result=mysqli_query($conn,$sql);

?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage customer</h1>
                    <a href="addcustomer.php"><button type="button" class="btn btn-primary" style= "float:right; margin-bottom:10px;">
                   Add customer</button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Customer details
                          
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Customerimage</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Email</th>
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
                                            <td><img src="../images/<?php echo $row['customerimage'];?>" style="height:50px; width:50px;"></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['address'];?></td>
                                            <td><?php echo $row['phone'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['status'];?></td>

                                         <td>
                                           <a href="edit_customer_products.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn btn-sm">Edit</button></a>
                                          <a href="customerdelete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete?')";> <button type="button" class="btn btn-sm">Delete</button>
                                          <a href="resetcustomerpassword.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn btn-sm btn-primary">Resetpassword</button></a>  </a>
                                          <?php
                                            if ($row['status']=='Active') { ?>
                                            <a href="activate/deactivecustomer.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm btn-danger">Deactive</button></a>
                                            
                                            <?php } else { ?>
                                                <a href="activate/activecustomer.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm btn-success">Active</button></a>
                                            </tr>

                                            <?php } ?>
                                           
                                           
                                        </tr>
                                       
                                <?php
                                $i++;
                                 }
                                        ?>   
                                        </tr>
                                        </tbody>
                                </table>
                            </div>
<?php
include "include/footer.php";
?>