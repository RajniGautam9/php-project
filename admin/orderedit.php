<?php
include "include/header.php";
include "../connection.php";
$id=$_GET['id'];
$sql="SELECT * FROM `order` WHERE id='$id';";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Order form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Manage order
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="ordereditaction.php?id=<?php echo $row['id'];?>" method="POST">

                                        <div class="form-group">
                                            <label>Customer Name</label>
                                            <input class= "form-control" placeholder ="name" name="customer" value="<?php echo $row['customer'];?>" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>product</label>
                                            <select id="select" class="form-control" name="category">
                                                <?php
                                                $productsql="SELECT * FROM products";
                                                $productresult=mysqli_query($conn,$productsql);
                                               while($productrow=mysqli_fetch_array($productresult)) { ?>
                                                <option value="<?php echo $productrow['id'];?>"<?php echo $productrow['id'] == $row['product_id']?'selected':'';?>><?php echo $productrow['name'];?></option>
                                                <?php } ?>
                                               </select>

                                        </div>


                                        <div class="form-group">
                                            <label>price</label>
                                            <input class="form-control" rows="3" placeholder="price" name="price" value="<?php echo $row['price'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input class="form-control" placeholder="quantity" name="quantity" value="<?php echo $row['quantity'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Total Amount</label>
                                            <input class="form-control" placeholder="Totalamount" name="totalamount" value="<?php echo $row['totalamount'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Created by:</label>
                                            <input class="form-control" placeholder="createdby" name="createdby" value="<?php echo $row['createdby'];?>" required>
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

