<?php
include "../connection.php";
session_start();
if(!isset($_SESSION['is_logged_in'])){
    header("Location: login.php");
}

if($_SESSION['user_type']!='user'){
    echo "<script>history.back()</script>";
}
$id=$_SESSION['id'];

$sql="SELECT * FROM customer WHERE id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


    ?>




<!DOCTYPE html>
<html lang="en">




<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shopping</title>
    <link rel="icon" href="shooping.jpg">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../css/plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Shopping</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                        
                        
               
                
                <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                          <i class="fa fa-user fa-fw"></i><?php echo $row['name'];?> <i class="fa fa-caret-down"></i> 
                    </a> 
                     <ul class="dropdown-menu dropdown-user">
                        <li><a href="profileform.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li><a href="changepassword.php"><i class="fa fa-gear fa-fw"></i> Change password</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="../logout.php" onclick="return confirm('Are you sure you want to log out?');"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!-- <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div> -->
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-spotify"></i>category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="category.php">view category</a>
                                </li>
                                <!-- <li>
                                    <a href="buttons.html">B</a>
                                </li> -->
                                
                                <!-- <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li> -->
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-star-half-full"></i>Brand<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <a href="addbrand.php">Add Brand</a>
                                </li> -->
                                 <li>
                                    <a href="brand.php">View Brand</a>
                                </li> 
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <!-- <li>
                            <a class="active" href="table.php"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li> -->
                        <!-- <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li> -->
                      
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart"></i>Products<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <a href="form.php">Add products</a>
                                </li> -->
                                <li>
                                    <a href="product items.php">View products</a>
                                </li>
                                                         
                                     <!-- <a href="#">Leave <span class="fa arrow"></span></a> -->
                                    <!-- <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li> -->
                                    </ul>
                                    <!-- <li>
                            <a href="#"><i class="fa fa-user"></i>customer<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <a href="addcustomer.php">Add customer</a>
                                </li> -->
                                 <!-- <li>
                                    <a href="customer.php">View customer</a>
                                </li> --> 
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                    <!-- <li>
                            <a href="#"><i class="fa fa-users"></i>users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li>
                                    <a href="addusers.php">Add users</a>
                                </li> -->
                                <!-- <li>
                                    <a href="users.php">View users</a>
                                </li> -->
                            </ul> 
                            <!-- /.nav-second-level -->
                        </li>
                                    <!-- /.nav-third-level -->
                                </li>
                           
                            </ul>.
                            <!-- /.nav-second-level -->
                        </li>
                         <!-- <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li> -->
                                 <!-- <li>
                                    <a href="login.html">Login Page</a>
                                </li> -->
                            </ul>
                         <!-- /.nav-second-level  -->
                            
                        </li>
                    <!-- </ul> --> 
                 </div> 
             <!-- /.sidebar-collapse  -->
            </div>
             <!-- /.navbar-static-side  -->
        </nav>
