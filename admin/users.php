<?php
include "include/header.php";
include "../connection.php";
$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);

?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">User table</h1>
                    <a href="addusers.php"><button type="button" class="btn btn-primary" style= "float:right; margin-bottom:10px;">
                   Add user</button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          users details
                          
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>email</th>
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
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['address'];?></td>
                                            <td><?php echo $row['phone'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['status'];?></td>

                                         <td>
                                           <a href="edituserform.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn btn-sm">Edit</button></a>
                                           <a href="userdelete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete?')";> <button type="button" class="btn btn-sm">Delete</button> </a>
                                           <a href="resetuserpassword.php?id=<?php echo $row['id'];?>"> <button type="button" class="btn btn-sm btn-primary">Resetpassword</button></a>  </a>
                                           <?php
                                            if ($row['status']=='Active') { ?>
                                            <a href="activate/deactiveuser.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm btn-danger">Deactive</button></a>
                                            
                                            <?php } else { ?>
                                                <a href="activate/activeuser.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-sm btn-success">Active</button></a>
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