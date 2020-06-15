<!-- 
Title : MAVEN-Table
Programmer  ::  Syed Ali Mobin Uddin Mian Chishti
very micro Ecommerse business portal Trial

    Source  ::  Multiple ideas customised & encapsulate.
    CSS     ::  mwcs
    BS4     ::  Datatable-1.10.20, BS4.4.1
    JSQ     ::  jQuert-3.4.1, Datatable.net-1.10.20, FW-5.12.0 
    Aditional Script too
    
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home-Table</title>
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
            <div class="breadcrumbs">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Table</a></li>
                        <li class="active">Data table</li>
                    </ol>
                </div>
            </div>

            <div class="card">
                <div class="card-header"><strong class="card-title">Data Table</strong>
                </div>
                <div class="card-body">
                    <table id="zero_config"
                        class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Devivery Date</th>
                                <th>Advance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Airi nyetu okihsms msts Satou</td>
                                <td>Tokyo</td>
                                <td>Accountant</td>
                                <td>05/08/2020</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>Edinburgh</td>
                                <td>System Architect</td>
                                <td>05/08/2020</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Tokyo</td>
                                <td>Accountant</td>
                                <td>05/08/2020</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>San Francisco</td>
                                <td>Junior Technical Author</td>
                                <td>05/08/2020</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Edinburgh</td>
                                <td>Senior Javascript Developer</td>
                                <td>05/08/2020</td>
                                <td>$433,060</td>
                            </tr>
                            
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>New York</td>
                                <td>Integration Specialist</td>
                                <td>05/08/2020</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>San Francisco</td>
                                <td>Sales Assistant</td>
                                <td>05/08/2020</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Tokyo</td>
                                <td>Integration Specialist</td>
                                <td>05/08/2020</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>San Francisco</td>
                                <td>Javascript Developer</td>
                                <td>05/08/2020</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Edinburgh</td>
                                <td>Software Engineer</td>
                                <td>05/08/2020</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>London</td>
                                <td>Office Manager</td>
                                <td>05/08/2020</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Edinburgh</td>
                                <td>Support Lead</td>
                                <td>05/08/2020</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>San Francisco</td>
                                <td>Regional Director</td>
                                <td>05/08/2020</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>London</td>
                                <td>Senior Marketing Designer</td>
                                <td>05/08/2020</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>London</td>
                                <td>Regional Director</td>
                                <td>05/08/2020</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>Edinburgh</td>
                                <td>System Architect</td>
                                <td>05/08/2020</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Tokyo</td>
                                <td>Accountant</td>
                                <td>05/08/2020</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>San Francisco</td>
                                <td>Junior Technical Author</td>
                                <td>05/08/2020</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Edinburgh</td>
                                <td>Senior Javascript Developer</td>
                                <td>05/08/2020</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Tokyo</td>
                                <td>Accountant</td>
                                <td>05/08/2020</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>New York</td>
                                <td>Integration Specialist</td>
                                <td>05/08/2020</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>San Francisco</td>
                                <td>Sales Assistant</td>
                                <td>05/08/2020</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Tokyo</td>
                                <td>Integration Specialist</td>
                                <td>05/08/2020</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>San Francisco</td>
                                <td>Javascript Developer</td>
                                <td>05/08/2020</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Edinburgh</td>
                                <td>Software Engineer</td>
                                <td>05/08/2020</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>London</td>
                                <td>Office Manager</td>
                                <td>05/08/2020</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Edinburgh</td>
                                <td>Support Lead</td>
                                <td>05/08/2020</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>San Francisco</td>
                                <td>Regional Director</td>
                                <td>05/08/2020</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>London</td>
                                <td>Senior Marketing Designer</td>
                                <td>05/08/2020</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>London</td>
                                <td>Regional Director</td>
                                <td>05/08/2020</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>London</td>
                                <td>Marketing Designer</td>
                                <td>05/08/2020</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>New York</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>05/08/2020</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>New York</td>
                                <td>Systems Administrator</td>
                                <td>05/08/2020</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>London</td>
                                <td>Software Engineer</td>
                                <td>05/08/2020</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Edinburgh</td>
                                <td>Personnel Lead</td>
                                <td>05/08/2020</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>New York</td>
                                <td>Development Lead</td>
                                <td>05/08/2020</td>
                                <td>$345,000</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>New York</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>05/08/2020</td>
                                <td>$675,000</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>New York</td>
                                <td>Pre-Sales Support</td>
                                <td>05/08/2020</td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sidney</td>
                                <td>Sales Assistant</td>
                                <td>05/08/2020</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>London</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>05/08/2020</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Edinburgh</td>
                                <td>Developer</td>
                                <td>05/08/2020</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Singapore</td>
                                <td>Regional Director</td>
                                <td>05/08/2020</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>San Francisco</td>
                                <td>Software Engineer</td>
                                <td>05/08/2020</td>
                                <td>$206,850</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="item-wrap">
                <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut
                    aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore
                    laudantium, animi amet corrupti ratione est commodi! Sunt tempora quod magnam optio, reiciendis
                    veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat
                    laborum, a aspernatur corporis.</div>
                <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut
                    aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore
                    laudantium, animi amet corrupti ratione est commodi! Sunt tempora quod magnam optio, reiciendis
                    veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat
                    laborum, a aspernatur corporis.</div>
            </div>
            <div class="item-wrap">
                <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut
                    aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore
                    laudantium, animi amet corrupti ratione est commodi! Sunt tempora quod magnam optio, reiciendis
                    veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat
                    laborum, a aspernatur corporis.</div>
                <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut
                    aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore
                    laudantium, animi amet corrupti ratione est commodi! Sunt tempora quod magnam optio, reiciendis
                    veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat
                    laborum, a aspernatur corporis.</div>
            </div>
            <div class="item-wrap">
                <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut
                    aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore
                    laudantium, animi amet corrupti ratione est commodi! Sunt tempora quod magnam optio, reiciendis
                    veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat
                    laborum, a aspernatur corporis.</div>
                <div class="item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum omnis nihil aut
                    aperiam adipisci suscipit ullam sunt saepe cupiditate quam distinctio officiis tempore
                    laudantium, animi amet corrupti ratione est commodi! Sunt tempora quod magnam optio, reiciendis
                    veritatis, necessitatibus eos molestias facilis reprehenderit maiores ipsum quaerat placeat
                    laborum, a aspernatur corporis.</div>
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





<!-- SIMPLE STATIC NAV BAR OF THIS PAGE -->

<!-- 
		<nav class="navbar  navbar-light bg-warning fixed-top navbar-sticky">
			<div id="navbar-main">
				<div class="logo">
					<a class="navbar-brand mr-auto" href="#"><img src="../assets/images/logo.png" alt=""> </a>
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
		</nav>
	 -->