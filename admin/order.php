<?php
include "include/header.php";
include "../connection.php";
$sql="SELECT * FROM `order`;";
$result=mysqli_query($conn,$sql);


?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage order</h1>
                    <a href="addorder.php"><button type="button" class="btn btn-primary" style= "float:right; margin-bottom:10px;">
                   Add order</button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Order details
                          
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Customer</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total Amount</th>
                                            <th>Createdby</th>
                                            <th>status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i=1;
                                     
                                        while($row= mysqli_fetch_array($result))
                                        {
                                            ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['id'];?></td>
                                            
                                            <td><?php echo $row['customer'];?></td>
                                            <?php
                                            $productsql="SELECT * FROM products WHERE id ='$row[product_id]'";
                                            $productresult=mysqli_query($conn,$productsql);
                                            $productrow=mysqli_fetch_array($productresult);
                                            ?>
                                            <td><?php echo $productrow['name'];?></td>
                                            
                                            <td><?php echo $row['price'];?></td>
                                            <td><?php echo $row['quantity'];?></td>
                                            <td><?php echo $row['totalamount'];?></td>
                                            <td><?php echo $row['createdby'];?></td>
                                            <td><?php echo $row['status'];?></td>


                                         <td>
                                           <a href="orderedit.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn btn-sm">Edit</button></a>
                                          <a href="orderdelete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete?')";> <button type="button" class="btn btn-sm">Delete</button>
                                        
                                        <?php
                                            if ($row['status']=='Active') { ?>
                                            <a href="activate/deactiveorder.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm btn-danger">Deactive</button></a>
                                            
                                            <?php } else { ?>
                                                <a href="activate/activeorder.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm btn-success">Active</button></a>                                          
                                            
                                            </td>
                                        </tr>
                                       
                                <?php }
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