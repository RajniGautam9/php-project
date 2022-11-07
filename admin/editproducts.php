<?php
include "include/header.php";
include "../connection.php";
$id= $_GET['id'];
$sql="SELECT * FROM products WHERE id='$id';";
$result= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);




?>
<div id="page-wrapper">
   

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Product Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="edit.php?id=<?php echo $row['id'];?>" method="POST" enctype= "multipart/form-data">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class= "form-control" placeholder ="name" value="<?php echo $row['name']; ?>" name="name" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input class= "form-control" placeholder ="price" value="<?php echo $row['price'];?>" name="price" required>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                         <textarea class="form-control" rows="3"  name="description" placeholder="Enter description">
                                        <?php echo $row['description'];?>
                                         </textarea>
                                        </div>
                                        <div class="form-group">
                                            
                                    <label>Product items</label><br>
                                    <input type="hidden" value="<?php echo $row['id'];?>" name="id" ><br>
                                    <input type="file" name="productimage">
                                            
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select id="select" class="form-control" name="category">
                                                <?php
                                                $categorysql="SELECT * FROM category";
                                                $categoryresult=mysqli_query($conn,$categorysql);
                                               while($categoryrow=mysqli_fetch_array($categoryresult)) { ?>
                                                <option value="<?php echo $categoryrow['id'];?>"<?php echo $categoryrow['id'] == $row['category_id']?'selected':'';?>><?php echo $categoryrow['category'];?></option>
                                                <?php } ?>
                                               </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input class="form-control" placeholder="size"name="size" value="<?php echo $row['size'];?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Brand</label>
                                            <select id="select1" class="form-control" name="brand" required>
                                                <?php
                                                $brandsql= "SELECT * FROM brand";
                                                $brandresult=mysqli_query($conn,$brandsql);
                                                while($brandrow=mysqli_fetch_array($brandresult)) { ?>
                                                <option value="<?php echo $brandrow['id'];?>"<?php echo $brandrow['id'] == $row['brand_id']?'selected':''; ?>><?php echo $brandrow['sbrand'];?></option>
                                                 <?php } ?>
                                            </select>
                                           
                                        </div>
                                        <div class="form-group">
                                           
                                        <button type="submit" class="btn btn-default">Submit </button>
                                        
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
</form>
<?php
include "include/footer.php";
?>