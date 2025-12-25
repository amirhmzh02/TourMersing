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
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

    <script>
		function preventBack(){window.history.forward()};
			setTimeout("preventBack()",0);
		window.onunload=function(){null;}
	</script>

</head>

<?php
include ("connection.php");
session_start();
$name=$_SESSION['user'];

$sql="SELECT * FROM `admin` WHERE `username`='$name' ";
$result=$conn->query($sql);
$rows=$result->fetch_assoc();
$ID = $rows['adminID'];

$sql="SELECT * FROM `admindetail` WHERE `adminID`='$ID' ";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$gender = $row['gender'];
$image = $row['image'];

// $fullname = $rows['fullname'];
?>

<script>
    console.log(<?= json_encode($name); ?>);
    console.log(<?= json_encode($image); ?>);
    console.log(<?= json_encode($gender); ?>);
</script>

<body id="page-top" >

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="background-color: rgb(42, 150, 189);" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
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
                <a class="nav-link" href="admin_profile.php">
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
                <a class="nav-link" href="">
                    <i class="fa fa-book"></i>
                    <span>Booking</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../../Login.php"  id="myButton">
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
                                    src="image/<?php echo $image ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../Login.php" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
<!-- ---------------------------------------------------------------------------------------------------------------- -->
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title" style="font-weight: bold; ">Admin Profile Settings</h4>
        <form class="form-sample" action="admin_profile.php" method="post" enctype="multipart/form-data">
          <p class="card-description"> Personal Details </p>
          <div class="col-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Inline forms</h4> -->
                    <!-- <p class="card-description"> Use the <code>.form-inline</code> class to display a series of labels, form controls, and buttons on a single horizontal row </p> -->
                    <!-- <form class="form-inline"> -->
                        <img src="image/<?php echo $row['image'];?>" id="uploadPreview" alt="Avatar" class="avatar" style="width: 100px;">&emsp;
                        <!-- <img src="img/undraw_profile_3.svg" alt="Avatar" class="avatar" style="width: 100px;">&emsp; -->
                        <input id="uploadImage" type="file" name="myPhoto" class="btn btn-primary mb-2" style="width: 500px;" onchange="PreviewImage();" required/>
                        <!-- <input type="file" class="btn btn-primary mb-2" style="width: 235px;"> -->
                      <!-- <button type="submit" class="btn btn-primary mb-2" >Upload new photo</button> -->
                    <!-- </form> -->
                  </div>
                </div>
              </div>
          <hr>
          
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname'];?>"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname'];?>"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" name="email" class="form-control" value="<?php echo $row['email'];?>" />
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date of Birth</label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy" value="<?php echo $row['date'];?>"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Phone Number</label>
                <div class="col-sm-9">
                    <input type="text" name="phonenumber" class="form-control" value="<?php echo $row['phonenumber'];?>"/>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-4">
                  <div class="form-check">
                    <input type="hidden" name="decideGender" id="decideGender" value="<?php echo $gender;?>"/>
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="gender" id="male" value="male" onload="gender()"> Male </label>
                  </div>
                </div>
                <div class="col-sm-5">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="gender" id="female" value="female"> Female </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="card-description" style="font-weight: 800;"> Address </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Address 1</label>
                <div class="col-sm-9">
                  <input type="text" name="address1" class="form-control" value="<?php echo $row['address1'];?>"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">State</label>
                <div class="col-sm-9">
                  <input type="text" name="state" class="form-control" value="<?php echo $row['state'];?>"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Address 2</label>
                <div class="col-sm-9">
                  <input type="text" name="address2" class="form-control" value="<?php echo $row['address2'];?>"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Postcode</label>
                <div class="col-sm-9">
                  <input type="text" name="postcode" class="form-control" value="<?php echo $row['postcode'];?>"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">City</label>
                <div class="col-sm-9">
                  <input type="text" name="city" class="form-control" value="<?php echo $row['city'];?>"/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Country</label>
                <div class="col-sm-9">
                    <input type="text" name="country" class="form-control" value="<?php echo $row['country'];?>"/>
                  </div>
              </div>
            </div>
            <button type="submit" name="btnSubmit" class="btn btn-primary mb-2" style="text-align: center; margin-left: auto ; margin-right: 30px; width: 100px;">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
                  
  <script type="text/javascript">

    // function gender(){
      var decideGender = document.getElementById("decideGender").value;
      var male = document.getElementById("male");
      var female = document.getElementById("female");
      // male.checked = true;
      // female.checked = true;



      if (decideGender=="male"){
        // document.getElementById('checkIndate').setAttribute("min", pattern);
        male.checked = true;
        female.checked = false;

      }
      else{
        female.checked = true;
      }

    // }

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

  </script>

<!-- <script>
        // Get a reference to our file input
        const fileInput = document.getElementById("myPhoto");
        var image = <?php echo json_encode($image); ?>;
    
        // Create a new File object
        const myFile = new File(['myFile'], image, {
            type: 'png',
        });
    
        // Now let's create a DataTransfer to get a FileList
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(myFile);
        fileInput.files = dataTransfer.files;
</script> -->

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

<?php 
if(isset($_POST['btnSubmit']) && !empty($_FILES["myPhoto"]["name"])){

  $statusMsg = '';
  // File upload path
  $targetDir = "image/";
  $fileName = basename($_FILES["myPhoto"]["name"]);

  $targetFilePath = $targetDir . $fileName;

  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

  $firstname = $_POST['firstname'];  
  $lastname = $_POST['lastname'];  
  $email = $_POST['email'];  
  $date = $_POST['date'];  
  $phonenumber = $_POST['phonenumber'];  
  $gender = $_POST['gender'];  
  $address1 = $_POST['address1'];  
  $state = $_POST['state'];  
  $address2 = $_POST['address2'];  
  $postcode = $_POST['postcode'];  
  $city = $_POST['city'];  
  $country = $_POST['country'];  

  $allowTypes = array('jpg','png','jpeg','gif','pdf');
  if(in_array($fileType, $allowTypes)){
      // Upload file to server
      if(move_uploaded_file($_FILES["myPhoto"]["tmp_name"], $targetFilePath)){

            // Insert image file name into database

            $sql="UPDATE `admindetail` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`date`='$date',`phonenumber`='$phonenumber',`gender`='$gender',`address1`='$address1',`address2`='$address2',`state`='$state',`postcode`='$postcode',`city`='$city',`country`='$country',`image`='$fileName' WHERE `adminID`='$ID' ";
            $db=$conn->query($sql);

            echo("<meta http-equiv='refresh' content='1'>"); //Refresh by HTTP 'meta'

            if($db){
            $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            echo "<script>alert('The data has been uploaded successfully.')</script>";
            }else{
                $statusMsg = "File upload failed, please try again.";
                echo "<script>alert('File upload failed, please try again.')</script>";
            } 

      }else{
          $statusMsg = "Sorry, there was an error uploading your file.";
          echo "<script>alert('Sorry, there was an error uploading your Image 1.')</script>";
      }
  }else{
    $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    echo "<script>alert('Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.')</script>";
  }
}else{
$statusMsg = 'Please select a file to upload.';
}

?>