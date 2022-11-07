<?php
include "include/header.php"

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
                                    <form role="form" action="orderaction.php" method="POST" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <label>Customer Name</label>
                                            <input class= "form-control" placeholder ="name" name="customer" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>product</label>
                                            <select id="select1" class="form-control" name="product" required>
                                                <?php
                                                $productsql= "SELECT * FROM products";
                                                $productresult=mysqli_query($conn,$productsql);
                                                while($productrow=mysqli_fetch_array($productresult))
                                                {
                                                ?>
                                                <option value="<?php echo $productrow['id'];?>"><?php echo $productrow['name'];?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                           
                                        </div>


                                        <div class="form-group">
                                            <label>price</label>
                                            <input class="form-control" rows="3" placeholder="price" name="price" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input class="form-control" placeholder="quantity" name="quantity" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Total Amount</label>
                                            <input class="form-control" placeholder="Totalamount" name="totalamount"  required>
                                        </div>
                                        <div class="form-group">
                                            <label>Created by:</label>
                                            <input class="form-control" placeholder="createdby" name="createdby" required>
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

