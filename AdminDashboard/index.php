<?php
include("connection.php");
session_start();
$name=$_SESSION['user'];

// if(isset($_SESSION['views']))
//     $_SESSION['views'] = $_SESSION['views']+1;
// else
//     $_SESSION['views']=1;
    
    $sql="SELECT * FROM `admin` WHERE username='$name' ";
    $result=$conn->query($sql);
    $rows=$result->fetch_assoc();
    $ID = $rows['adminID'];

    $sql="SELECT * FROM `admindetail` WHERE adminID='$ID' ";
    $result=$conn->query($sql);
    $row=$result->fetch_assoc();

    $image = $row['image'];
    
//count
$myfile = fopen("../hitcount.txt", "r") or die("Unable to open file!");
$count = fread($myfile,filesize("../hitcount.txt"));
fclose($myfile);
  
?>

<?php
$sql="SELECT * FROM feedback ";
$result=$conn->query($sql);
$countFeedback=$result->num_rows;

$sql="SELECT * FROM booking ";
$result=$conn->query($sql);
$countBooking1=$result->num_rows;

$sql="SELECT * FROM islandbooking ";
$result=$conn->query($sql);
$countBooking2=$result->num_rows;

$countBooking = $countBooking1 + $countBooking2;

$sql="SELECT SUM(amount) FROM islandpayment WHERE payment_status = 'success' ";
$result=$conn->query($sql);
$rowss=$result->fetch_assoc();
$total1 = $rowss['SUM(amount)'];

$sql="SELECT SUM(amount) FROM payment WHERE payment_status = 'success' ";
$result=$conn->query($sql);
$rowsIsland=$result->fetch_assoc();
$total2 = $rowsIsland['SUM(amount)'];

$total = $total1 + $total2;

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/jpg" href="../images/logo.png"/>
    

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
 
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">

    <script>
		function preventBack(){window.history.forward()};
			setTimeout("preventBack()",0);
		window.onunload=function(){null;}
	</script>

</head>

<script>
    console.log(<?= json_encode("nama : ".$name); ?>);
    console.log(<?= json_encode($total2); ?>);
</script>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="background-color: rgb(42, 150, 189);" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div >
                    <i ></i>
                    <img src="../images/logo.png" style="width: 100%;"  >
                </div>
                <!-- <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> -->
                <div class="sidebar-brand-text mx-3">MTA ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
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
                <a class="nav-link" href="profileAdmin/admin_profile.php">
                    <i class="	fa fa-child"></i>
                    <span>Admin Profile</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="eventAdmin/event.php">
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
                        <a class="collapse-item" href="islandVacationAdmin/islandVacation.php">Island Vacation</a>
                        <a class="collapse-item" href="islandHoppingAdmin/islandHopping.php">Island Hopping</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="tables.php">
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
                                    src="profileAdmin/image/<?php echo $image?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="adminprofile-view.php">
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                      
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Visitors</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Bookings</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $countBooking ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Earning
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $total ?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                            <!--fas fa-clipboard-list fa-2x text-gray-300-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Feedback</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $countFeedback ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Feedback</h6>
                                   
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" >
                                    <table class="feedback">
                                        <?php
                                            $query = "SELECT * FROM `feedback` ORDER BY `name` DESC";
                                            $query_run = mysqli_query($conn,$query);
                                        ?>

                                        
                                        <tr>
                                            <th>Name</th>
                                            <th>Feedback</th>
                                            <th>Status</th>
                                            <th>Delete</th>
                                        </tr>
                                        <?php
                                        while($row = mysqli_fetch_array($query_run))
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $name= $row['name']?></td>
                                            <td><?php echo $feedback= $row['feedback']?></td>

                                            <form action="index.php"  method="post" enctype="multipart/form-data" >
                                                <input type="hidden" name="id" value="<?php echo $row['feedback_id']?>">
                                                <td><input type="submit" name="btnStatus"  value="<?php echo $row['status']?>" style="background-color: #4e73df;" ></td>
                                            </form>

                                   

                                            <form action="index.php"  method="post" enctype="multipart/form-data" >
                                                <input type="hidden" name="id" value="<?php echo $row['feedback_id']?>">
                                                <td><input type="submit" name="btnDelete"  value="Delete" style="background-color: #e74a3b;" ></td>
                                            </form>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                        

                

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!--<footer class="sticky-footer bg-white">-->
            <!--    <div class="container my-auto">-->
            <!--        <div class="copyright text-center my-auto">-->
            <!--            <span>Copyright &copy; Your Website 2021</span>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</footer>-->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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

    <?php
    function btn(){
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';

    }
    if(isset($_POST['btnStatus'])){
        $approve = "Approved";
        $id = $_POST["id"];

        $query = "UPDATE `feedback` SET `status`= '$approve' WHERE `feedback_id` = '$id'";

        $query_run = mysqli_query($conn,$query);
        echo("<meta http-equiv='refresh' content='1'>"); //Refresh by HTTP 'meta' 
    }

    if(isset($_POST['btnDelete'])){
        $id = $_POST["id"];

        $query = "DELETE FROM `feedback` WHERE `feedback_id` = '$id'";
        $query_run = mysqli_query($conn,$query);
        echo("<meta http-equiv='refresh' content='1'>"); //Refresh by HTTP 'meta' 
    }


    
    ?>

                        
</body>

</html>