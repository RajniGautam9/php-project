<?php
include "include/header.php";
include "../connection.php";
$sql="SELECT * FROM products";
$result=mysqli_query($conn,$sql);

?>

<div id="page-wrapper">
   
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Shopping</h1>
                  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Product items
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>product photo</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Size</th>
                                            <th>Brand</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($row=mysqli_fetch_array($result))
                                        {
                                            ?>
                                       <tr class="odd gradeX">
                                            <td><?php echo $row['name'];?></td>
                                            <td><img src="../images/<?php echo $row['productimage'];?>" style="height:50px; width:50px;"></td>
                                            <td><?php echo $row['price'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                            
                                            <?php
                                            $id=$row['category_id'];
                                            $categorysql="SELECT * FROM category WHERE id ='$id'";
                                            $categoryresult=mysqli_query($conn,$categorysql);
                                            $categoryrow=mysqli_fetch_array($categoryresult);
                                            ?>
                                           
                                            <td><?php echo $categoryrow['category'];?></td>
                                            <td><?php echo $row['size'];?></td>
                                            <?php
                                            $brandsql="SELECT * FROM brand WHERE id ='$row[brand_id]'";
                                            $brandresult=mysqli_query($conn,$brandsql);
                                            $brandrow=mysqli_fetch_array($brandresult);
                                            ?>
                                            <td><?php echo $brandrow['sbrand'];?></td>
                                           
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                    </div>
<?php
include "include/footer.php";
?>