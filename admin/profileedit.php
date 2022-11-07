<?php
include "include/header.php";
include "../connection.php";
$id =$_SESSION['id'];
$sql=" SELECT * FROM users WHERE id ='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> User information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           user edit form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form-control" action="profileaction.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                            
                                    
                                            <img src="../images/<?php echo $row['userimage'];?>" style="height:150px; width:100px; border-radius:150px;"<?php echo $row['name'];?>><br><br>
                                            <input type="file" name="userimage">
                                            <input type="hidden" value="<?php echo $row['id'];?>" name="id" >
                                    </div>

                                        <div class="form-group">
                                           
                                            <input value="<?php echo $row['name'];?>" name="name" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            
                                            <input value="<?php echo $row['email'];?>" name="email" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            
                                            <input value="<?php echo $row['address'];?>" name="address" required>
                                        </div>


                                        <div class="form-group">
                                            
                                     <input value="<?php echo $row['phone'];?>" name="phone" required>
                                        </div>

                                       
                                        
                                        
                                        <input type="submit" class="btn btn-success" value="update">
                                        
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
<?php
include "include/footer.php";
?>

