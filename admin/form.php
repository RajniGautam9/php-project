<?php
include "include/header.php";
include "../connection.php";


?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="action.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class= "form-control" placeholder ="name" name="name" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" placeholder="price" name="price" required>
                                        </div>


                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter text..." name="description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            
                                    <label>Product Image</label><br>
                                            <input type="file" name="productimage">

                                    </div>
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select id="select" class="form-control" name="category">
                                                <?php
                                                $sql1="SELECT * FROM category";
                                                $result1=mysqli_query($conn,$sql1);
                                               while($row=mysqli_fetch_array($result1))
                                               {

                                               
                                                ?>
                                  <option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
                                  <?php
                                               }
                                               ?>



                                  </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input class="form-control" placeholder="size"name="size" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <select id="select1" class="form-control" name="brand" required>
                                                <?php
                                                $sql2= "SELECT * FROM brand";
                                                $result2=mysqli_query($conn,$sql2);
                                                while($row=mysqli_fetch_array($result2))
                                                {
                                                ?>
                                                <option value="<?php echo $row['sbrand'];?>"><?php echo $row['sbrand'];?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>

                                        </div>
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
include "include/footer.php"
?>