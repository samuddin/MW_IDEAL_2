<!-- 
Title : MAVEN-FORM
Programmer  ::  Syed Ali Mobin Uddin Mian Chishti
very micro Ecommerse business portal Trial

    Source  ::  Multiple ideas customised & encapsulate.
    CSS     ::  mwcs
    BS4     ::  BS4 - Datatable, BS4.4.1
    JSQ     ::  jQuert-3.4.1, Datatable.net-1.10.20, FW-5.12.0
    
-->

<?php
error_reporting(0);
include ("config.php");
// $query = "SELECT uploadphoto FROM products";
// $data = mysqli_query($conn, $query);
// $count = mysqli_num_rows($data);
// if($count!=0){
//     while ($result = mysqli_fetch_assoc($data)){
//         echo "
//         <img src ='".$result['picsource']."' height='150' width = '150'>
//         ";
//     }
// }else{
//     echo "No Records Found";
//     }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Maven Form</title>
    <link rel="stylesheet" href="../Craft-final/Additional/stock-css/DataTables.net-1.10.20-DataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../Craft-final/1-main/css/bootstrap-v4.4.1.min.css">
    <link rel="stylesheet" href="../Craft-final/1-main/css/Font Awesome all free 5.12.0.css">
    <link rel="stylesheet" href="../Craft-final/Page-css/mwcs.css">
</head>
<body>
<div class="wrapper">
    <!-- ============================================================== -->
    <!-- Navigation Bar -->
    <!-- ============================================================== -->
    <div class="navbar ">
        <div class="logo"> <a href="#"><img src="../image/MW.png" height="54a" width="50" alt=""></a> </div>

        <div class="nav-menu">

            <div class="social">
                <ul class="social-nav model-7">
                    <li><a class="universal s1" href="#"><i class="fa fa-home  fa-1x"></i></a></li>
                    <li><a class="universal s2" href="#"><i class="fas fa-file-invoice"></i></a></li>
                    <li><a class="universal s3" href="#"><i class="fa fa-book  fa-1x"></i></a></li>
                    <li><a class="universal s4" href="#"><i class="fab fa-stack-exchange"></i></a></li>
                    <li><a class="universal s5" href="#"><i class="fas fa-camera"></i></a></li>
                    <LI><a class="universal s6" href="#"><i class="fas fa-warehouse"></i></a>
                </ul>
                <br />
            </div>

            <div class="right-info">
                <div class="icon-wrap">
                    <div class="icon">
                        <a href="#"> <i class="fa fa-search"></i> </a>
                    </div>
                </div>
                <div class="icon-wrap">
                    <div class="icon">
                        <a href="#"> <i class="fa fa-bell"></i> </a>
                    </div>
                </div>
                <div class="icon-wrap">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-user"></i> </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main Body containing Sidebar & Main Content -->
    <!-- ============================================================== -->
    <div class="main-body">
        <!-- ============================================================== -->
        <!-- Sidebar -->
        <!-- ============================================================== -->
        <div class="sidebar">
                <div class="sidebar-menu">
                    <!-- ============================================================== -->
                    <!-- Sidebar menu List -->
                    <!-- ============================================================== -->
                    <ul>
                    <li>
                        <a href="Maven-Home.php">
                        <span class="icon">
                            <i class="fas fa-border-all"></i></span>
                        <span class="list">Center Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="Maven-Gallery.php" class="active">
                        <span class="icon"><i class="fas fa-image    "></i></span>
                        <span class="list">Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="Maven-Table.php">
                        <span class="icon"><i class="fas fa-address-book"></i></span>
                        <span class="list">tABLE</span>
                        </a>
                    </li>
                    <li>
                        <a href="Maven-form.php" >
                            <span class="icon"><i class="fas fa-address-book"></i></span>
                            <span class="list">FORM</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <span class="icon"><i class="fas fa-address-card"></i></span>
                        <span class="list">About</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <span class="icon"><i class="fab fa-blogger"></i></span>
                        <span class="list">Blogs</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <span class="icon"><i class="fas fa-map-marked-alt"></i></span>
                        <span class="list">Maps</span>
                        </a>
                    </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Toggle Button On Sidebar -->
                    <!-- ============================================================== -->
                    <div class="toggler">
                        <div class="tog-icon">
                            <span class="arrow">
                                <i class="fas fa-hand-point-left"></i>
                                <i class="fas fa-hand-point-right"></i>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        <!-- ============================================================== -->
        <!-- Main Content -->
        <!-- ============================================================== -->
        <div class="main-content">
            <!-- ============================================================== -->
            <!-- Form Section -->
            <!-- ============================================================== -->    
            <div class="row form_section">
                

                <!-- CUSTOMER FORM -->
                <div class="col-sm-3 ">
                    <div class="card details">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>CUSTOMERS</h5>
                            </div>
                            <hr class="mb-3">
                            <ul>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="cu_name" class="form-control" placeholder="Name"
                                            require>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cu_number" class="form-control" placeholder="Mobile..">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cu_add" class="form-control" placeholder="Address"
                                            require>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cu_delivery" class="form-control"
                                            placeholder="Delivery Date*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cu_advance" class="form-control"
                                            placeholder="Advance amount" require>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo" class="custom-file">
                                    </div><br><br><br>
                                    <div class="form-group">
                                        <input type="submit" name="cu_submit" class="btn btn-warning btn-block"
                                            value="Add Record">
                                    </div>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- ORDER FORM -->
                <div class="col-sm-3 ">
                    <div class="card details">
                        <div class="card-body">
                            <div class="card-title">
                                <h5>ORDER</h5>
                            </div>
                            <hr class="mt-1 mb-3">
                            <ul>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" name="cli_m/s" class="form-control" placeholder="M/S"
                                            require>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cli_name" class="form-control" placeholder="Name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <textarea name="order" id="order" class="form-control" cols="30" rows="5"
                                            require></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="photo" class="custom-file">
                                    </div><br><br><br>
                                    <div class="form-group">
                                        <input type="submit" name="ord" class="btn btn-warning btn-block" value="New order Record">
                                    </div>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
                       
        </div>
    </div>


    <script src="../Craft-final/1-main/js/Font Awesome all free 5.12.0.js"></script>
    <script src="../Craft-final/Additional/stock-js/jQuery min- v3.4.1.js"></script>
    <script src="../Craft-final/Additional/stock-js/DataTables.net-1.10.20-jquery.dataTables.min.js"></script>
    <script>
        $('#zero_config').DataTable();
    </script>
    <script>
        $(document).ready(function () {
            $(".toggler").click(function () {
                $(".wrapper").toggleClass("active")
            })
        });
    </script>
</body>
</html>


<?php 

if($_POST['pro_submit']){
    $directory = "../images/vault/". $filename;
    $directory = mysqli_real_escape_string($conn,$directory);
    if(preg_match(""))


    $filename = $_FILES["uploadphoto"]["name"];
    $tempname = $_FILES["uploadphoto"]["tmp_name"];
    move_uploaded_file($tempname, $directory);
    echo $directory;
    if ($filename !== "") {
        $query = "INSERT INTO products VALUES('$directory')";
        $data = msqli_query($conn, $query);
        if($data){
            echo "Inserted";
        }else{
            echo "Failed";
        }
    }

}

?>