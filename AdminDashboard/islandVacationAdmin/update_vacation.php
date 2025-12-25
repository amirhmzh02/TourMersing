<?php
include ("connection.php");
session_start();
$name=$_SESSION['user'];

$sqlAdmin="SELECT * FROM `admin` WHERE username='$name' ";
    $resultAdmin=$conn->query($sqlAdmin);
    $rowsAdmin=$resultAdmin->fetch_assoc();
    $ID = $rowsAdmin['adminID'];

    $sqlAdmin="SELECT * FROM `admindetail` WHERE adminID='$ID' ";
    $resultAdmin=$conn->query($sqlAdmin);
    $rowAdmin=$resultAdmin->fetch_assoc();

    $image = $rowAdmin['image'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Event</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

</head>

<?php
include ("connection.php");

if(isset($_POST['btnUpdate'])){
    $id = $_POST['id'];
    // console_log($id);
    $sql="SELECT * FROM `islandvacation` WHERE vacation_id='$id' ";
    $result=$conn->query($sql);
    $rows=$result->fetch_assoc();
}

?>

<script>
    console.log(<?= json_encode($id); ?>);
</script>

<body id="page-top" >

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="background-color: rgb(42, 150, 189);" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../../images/logo.png" style="width: 100%;"  >
                </div>
                <!-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
                <div class="sidebar-brand-text mx-3">MTA ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Interface
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <!-- <hr class="sidebar-divider"> -->

            <!-- Heading -->
            <div class="sidebar-heading">
                Details
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="../profileAdmin/admin_profile.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Admin Profile</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="event.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Event</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Packages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Update</h6>
                        <a class="collapse-item" href="#">Island Vacation</a>
                        <a class="collapse-item" href="../islandHoppingAdmin/islandHopping.php">Island Hopping</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../profileAdmin/image/<?php echo $image?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../adminprofile-view.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<!-- ---------------------------------------------------------------------------------------------------------------- -->
                <div class="col-12 grid-margin stretch-card" >
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title" style="color: black;"><b>Update event</b></h4>
                        <p class="card-description" style="color: black;"> Please fill in the event detail to add a new event. </p>
                        <form class="forms-sample" action="islandVacation.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $rows['vacation_id'];?>">
                          <div class="form-group">
                            <label for="Updatename">Name</label>
                            <input type="text" class="form-control" id="Updatename" name="Updatename" placeholder="Name" value="<?php echo $rows['name'];?>" required>
                          </div>
                        
                          <div class="form-group">
                            <label for="Updateprice">Price</label>
                            <input type="text" class="form-control" id="Updateprice" name="Updateprice" placeholder="RMXX.XX" style="width: 150px;" value="<?php echo $rows['price'];?>">
                          </div>

                          <div class="form-group">
                            <label for="Updateimage1"><b>Image 1</b></label><br>
                            <input type="file" name="Updateimage1" required><br>
                          </div>  

                          <div class="form-group">
                            <label for="Updateimage2"><b>Image 2</b></label><br>
                            <input type="file" name="Updateimage2" required><br>
                          </div>  

                          <div class="form-group">
                            <label for="Updateimage3"><b>Image 3</b></label><br>
                            <input type="file" name="Updateimage3" required><br>
                          </div>

                          <div class="form-group">
                            <label for="Updateimage4"><b>Image 4</b></label><br>
                            <input type="file" name="Updateimage4" required><br>
                          </div>

                          <div class="form-group">
                            <label for="Updateaddress">Address</label>
                            <input type="text" class="form-control" id="Updateaddress" name="Updateaddress" placeholder="Address" value="<?php echo $rows['address'];?>">
                          </div>
                          <div class="form-group">
                            <label for="Updatepackage">Package Included</label>
                            <input type="text" class="form-control" id="Updatepackage" name="Updatepackage" placeholder="Package Included in Pax" value="<?php echo $rows['packageIncluded'];?>">
                          </div>
                          <div class="form-group">
                            <label for="Updatephonenum1">1st Phone Number</label>
                            <input type="text" class="form-control" id="Updatephonenum1" name="Updatephonenum1" placeholder="XXX-XXXXXXX" value="<?php echo $rows['phonenum1'];?>">
                          </div>
                          <div class="form-group">
                            <label for="Updatephonenum2">2nd Phone Number</label>
                            <input type="text" class="form-control" id="Updatephonenum2" name="Updatephonenum2" placeholder="XXX-XXXXXXX" value="<?php echo $rows['phonenum2'];?>">
                          </div>
                          
                          <button type="submit" class="btn btn-primary mr-2" name="btnUpdate" value="Submit">Submit</button>
                          <button type="button" class="btn btn-dark" onclick="window.location.href='islandVacation.php'">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div><br>
                  
                  <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">¡Á</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="https://etourmersing.com/Login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

                  

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script type="text/javascript">
        var selectedMonth = <?php echo json_encode($month);?>;
           
        document.getElementById("Updatemonth").value = selectedMonth;

    </script>
</body>

</html>