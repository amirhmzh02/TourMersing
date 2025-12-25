<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/jpg" href="../../images/logo.png"/>

    <title>Profile</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.minadminpfp.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="background-color: rgb(42, 150, 189);" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
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
              <a class="nav-link" href="../tables.php">
                  <i class="fa fa-book"></i>
                  <span>Booking</span></a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="../Login.html"  id="myButton">
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
                      <div class="topbar-divider d-none d-sm-block"></div>

                      <!-- Nav Item - User Information -->
                      <li class="nav-item dropdown no-arrow">
                          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                              <img class="img-profile rounded-circle"
                                  src="img/undraw_profile.svg">
                          </a>
                          <!-- Dropdown - User Information -->
                          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="userDropdown">
                              <a class="dropdown-item" href="adminprofile-view.html">
                                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Profile
                              </a>
                              <!-- <a class="dropdown-item" href="#">
                                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Settings
                              </a>
                              <a class="dropdown-item" href="#">
                                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                  Activity Log
                              </a> -->
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

                    <section style="background-color: rgb(42, 150, 189);">
                        <div class="container py-5">
                          <!-- <div class="row">
                            <div class="col">
                              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                                <ol class="breadcrumb mb-0">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item"><a href="#">User</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                                </ol>
                              </nav>
                            </div>
                          </div> -->
                      
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="card mb-4">
                                <div class="card-body text-center">
                                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                                    class="rounded-circle img-fluid" style="width: 124px;">
                                  <h5 class="my-3">John Smith</h5>
                                  <p class="text-muted mb-1">Full Stack Developer</p>
                                  <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                                  <div class="d-flex justify-content-center mb-2">
                                    <button type="button" class="btn btn-primary">Edit Profile</button>
                                  </div>
                                </div>
                              </div>
                              <!-- <div class="card mb-4 mb-lg-0">
                                <div class="card-body p-0">
                                  <ul class="list-group list-group-flush rounded-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                      <i class="fas fa-globe fa-lg text-warning"></i>
                                      <p class="mb-0">https://mdbootstrap.com</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                      <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                      <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                      <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                      <p class="mb-0">@mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                      <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                      <p class="mb-0">mdbootstrap</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                      <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                      <p class="mb-0">mdbootstrap</p>
                                    </li>
                                  </ul>
                                </div>
                              </div> -->
                            </div>
                            <div class="col-lg-8">
                              <div class="card mb-4">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">Johnatan Smith</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">example@example.com</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Date of Birth</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">00/00/0000</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">(097) 234-5678</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Gender</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">m/f</p>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">(098) 765-4321</p>
                                    </div>
                                  </div>
                                  <!-- <hr> -->
                                  <!-- <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                    </div>
                                  </div><hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                      <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                    </div>
                                  </div>
                                </div>
                              </div> -->
                              <!-- <div class="row">
                                <div class="col-md-6">
                                  <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                      <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                      </p>
                                      <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                      <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                      <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                      </p>
                                      <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                      <div class="progress rounded" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                      <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                      <div class="progress rounded mb-2" style="height: 5px;">
                                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                          aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div> -->
                              <!-- </div>
                            </div> -->
                          <!-- </div> -->
                        <!-- </div> -->
                      </section>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ETour Mersing 2022</span>
                    </div>
                </div>
            </footer>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>