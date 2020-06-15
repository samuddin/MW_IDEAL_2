<!-- 
Title : MAVEN-GALLERY
Programmer  ::  Syed Ali Mobin Uddin Mian Chishti
very micro Ecommerse business portal Trial

    Source  ::  Multiple ideas customised & encapsulate.
    CSS     ::  mwcs
    BS4     ::  BS4.4.1
    JSQ     ::  jQuert-3.4.1, FW-5.12.0 
    Aditional Script too
    
-->
<?php 
// error_reporting(0);
include ("config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Maven Gallery</title>
    <link rel="stylesheet" href="../Craft-final/1-main/css/bootstrap-v4.4.1.min.css">
    <link rel="stylesheet" href="../Craft-final/1-main/css/Font Awesome all free 5.12.0.css">
    <link rel="stylesheet" href="../Craft-final/Page-css/mwcs.css">
</head>
<body>
    <?php
if($_POST['pro_submit'])
{
    $filename = $_FILES["uploadphoto"]["name"];
    $tempname = $_FILES["uploadphoto"]["tmp_name"];
    $pro_code =$_POST["pro_code"];
    $pro_name =$_POST["pro_name"];
    $pro_image = "../image/vault/".$filename;
    move_uploaded_file($tempname,$pro_image);
    if($filename!="")
    {
        $query ="INSERT INTO products VALUES('$pro_code','$pro_name','$pro_image')";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo "Inserted";
        }
    }else
    {
       echo "Failed";
    }
}
?>
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
            <!-- MAIN PAGE -->
            <!-- ============================================================== -->
            <div class="main-content">


                <div class="row gallery-col">

                    <!-- PRODUCT DETAILS SECTION -->
                    <div class="col-sm-3 ">
                        <div class="card details">
                            <div class="card-body">
                                <div class="card-title">  <h5>DETAILS</h5>  </div>
                                <hr class="mt-1 mb-3">
                                <ul>
                                    <li><label for="pro-code">Code :</label></li>
                                    <li><label for="pro-dim">Dimentions :</label></li>
                                    <li><label for="pro-qty">Quantity :</label></li>
                                    <li><label for="pro-price">Price :</label></li>
                                </ul>  
                            </div>
                        </div>
                        <div class="card adv">
                            <marquee behavior="scroll" direction="left">
                            <img class="hover" src="../image/adv/add1.jpg"></marquee>                       
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title ">

                                    <!-- Upload Modal -->
                                    <button type="button" name="pro-upload" class=" btn btn-warning btn-block" data-toggle="modal" data-target="#Upload_form">Upload</button>
                                    <div class="modal fade " id="Upload_form" tabindex="-1" role="dialog" aria-labelledby="uploadlabel"aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="uploadlabel">Product Upload Form</h3>
                                                </div>
                                                <!-- PROCUCT MODAL FORM Section-->
                                                <div class="modal-body">
                                                    <div class="col-sm-12 ">
                                                        <div class="card details">
                                                            <div class="card-body up-form">
                                                                
                                                                <form action="" method="POST" enctype="multipart/form-data">
                                                                    <div class="form-group">
                                                                        <input type="text" name="pro_code" class="form-control" placeholder="Item Code" require>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="text" name="pro_name" class="form-control" placeholder="Item Name">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input type="file" name="uploadphoto"  class="custom-file">
                                                                    </div>
                                                                    <div class="card-footer">
                                                                        <input type="submit" id="foot-btn" class="btn btn-info " name="pro_submit"  value="Upload">
                                                                        <input type="reset" id="foot-btn" class="btn btn-info " value="Reset">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <button type="button" name="pro_remove" class=" btn btn-warning btn-block">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- GALLERY SECTION -->
                    <div class="col-sm-9 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title "> <h5>GALLERY FRAME</h5> 
                                    <p><?php echo $pro_image;?> </p>
                                </div>
                                <hr class=" mb-1">
                                <div class="row   scroll text-center text-lg-left">
                                    <div class="col-sm-2">
                                        <div class="img-box1">
                                             <?php
                                                $query1 = "SELECT pro_image FROM products";
                                                $data1 = mysqli_query($conn, $query1);
                                                $total = mysqli_num_rows($data1);

                                                if ($total !== 0) {
                                                    while ($result = mysqli_fetch_assoc($data1)) {
                                                        echo "
                                                                <img src='" . $result['pro_image'] . "' class='" . hover . "' required>
                                                            ";
                                                    }
                                                }
                                                ?>
                                            <!-- <img class="hover" src="../image/MW.png"> -->
                                            <div class="img-box3 text-center">
                                                <button class="switch">View</button>
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div class="col-sm-2">
                                        <div class="img-box1">
                                            <img class="hover" src="../image/MW.png">
                                        </div>
                                    </div>


                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    

                </div>
            </div>            
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../Craft-final/Additional/stock-js/jQuery min- v3.4.1.js"></script>
    <script src="../Craft-final/Additional/stock-js/popper.js@1.16.0.js"></script>
    <script src="../Craft-final/1-main/js/bootstrap.bundle.min.v4.4.1.js"></script>
    <script src="../Craft-final/1-main/js/Font Awesome all free 5.12.0.js"></script>

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

