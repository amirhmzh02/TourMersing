<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Event</title>

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
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    <link rel="shortcut icon" type="image/jpg" href="../../images/logo.png"/>

</head>

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


<body id="page-top" >

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="background-color: rgb(42, 150, 189);" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div >
                    <i ></i>
                    <img src="../../images/logo.png" style="width: 100%;"  >
                </div>
                <!-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
                <div class="sidebar-brand-text mx-3">MTA ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

 

            <!-- Heading -->
            <div class="sidebar-heading">
                Details
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="../profileAdmin/admin_profile.php">
                    <i class="	fa fa-child"></i>
                    <span>Admin Profile</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="../eventAdmin/event.php">
                    <i class="fa fa-calendar"></i>
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
                        <a class="collapse-item" href="../islandVacationAdmin/islandVacation.php">Island Vacation</a>
                        <a class="collapse-item" href="../islandHoppingAdmin/islandHopping.php">Island Hopping</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="../tables.php">
                    <i class="fa fa-book"></i>
                    <span>Booking</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../Login.php"  id="myButton">
                    <i class="fa fa-arrow-circle-left"></i>
                    <span>Log out</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
        
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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 big"><?php echo $name ?></span>
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
                                <a class="dropdown-item" href="../../Login.html" data-toggle="modal" data-target="#logoutModal">
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
                        <h4 class="card-title" style="color: black;"><b>Add new event</b></h4>
                        <p class="card-description" style="color: black;"> Please fill in the event detail to add a new event. </p>
                        <form class="forms-sample" action="event.php" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="year">Year</label>
                            <input type="text" class="form-control" id="year" name="year" placeholder="Year" style="width: 150px;" required>
                          </div>
                          <div class="form-group">
                            <label for="month">Month</label>
                                <select name="month" id="month" class="form-control" style="width: 150px;" required>
                                    <option value="Jan"selected>January</option>
                                    <option value="Feb">February</option>
                                    <option value="Mar">March</option>
                                    <option value="Apr">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="Jul">July</option>
                                    <option value="Aug">August</option>
                                    <option value="Sep">September</option>
                                    <option value="Oct">October</option>
                                    <option value="Nov">November</option>
                                    <option value="Dec">December</option>
                                 </select>
                          </div>
                          <div class="form-group">
                            <label for="date">Date</label>
                            <input type="text" class="form-control" id="date" name="date" placeholder="Date" style="width: 150px;" required>
                          </div>
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                          </div>
                          <div class="form-group">
                            <label for="mainD">Main Description</label>
                            <input type="text" class="form-control" id="mainD" name="mainD" placeholder="Main Description" required>
                          </div>
                          <div class="form-group">
                            <label for="secondD">Second Description</label>
                            <textarea class="form-control" id="secondD" name="secondD" placeholder="Second Description" required> </textarea>
                          </div>
                          <div class="form-group">
                            <label for="time">Time</label>
                            <input type="time" class="form-control" id="time" name="time" placeholder="Time" required>
                          </div>
                          <!-- <div class="form-group">
                            <label for="exampleSelectGender">Gender</label>
                            <select class="form-control" id="exampleSelectGender">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="img[]" class="file-upload-default">
                            <div class="input-group col-xs-12">
                              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                              <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputCity1">City</label>
                            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                          </div>
                          <div class="form-group">
                            <label for="exampleTextarea1">Textarea</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                          </div> -->

                          <div class="form-group">
                            <label for="image1"><b>Image 1</b></label><br>
                            <input type="file" name="image1" required><br>
                          </div>  

                          <div class="form-group">
                            <label for="image2"><b>Image 2</b></label><br>
                            <input type="file" name="image2" required><br>
                          </div>  

                          <div class="form-group">
                            <label for="image3"><b>Image 3</b></label><br>
                            <input type="file" name="image3" required><br>
                          </div>  
                          
                          <button type="submit" class="btn btn-primary mr-2" name="post" value="Submit">Submit</button>
                          <button type="button" class="btn btn-dark" onclick="window.location.href='event.php'">Cancel</button>
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
                        <span aria-hidden="true">×</span>
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

</body>

</html>