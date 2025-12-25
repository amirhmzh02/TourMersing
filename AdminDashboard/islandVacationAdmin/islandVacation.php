<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/jpg" href="../../images/logo.png"/>

    <title>Dashboard - Island Vacation</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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

    $sql="SELECT * FROM `islandvacation`";
    $result=$conn->query($sql);
    
    $sqlAdmin="SELECT * FROM `admin` WHERE username='$name' ";
    $resultAdmin=$conn->query($sqlAdmin);
    $rowsAdmin=$resultAdmin->fetch_assoc();
    $ID = $rowsAdmin['adminID'];

    $sqlAdmin="SELECT * FROM `admindetail` WHERE adminID='$ID' ";
    $resultAdmin=$conn->query($sqlAdmin);
    $rowAdmin=$resultAdmin->fetch_assoc();

    $image = $rowAdmin['image'];
?>  

<body id="page-top">

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
                <a class="nav-link" href="../../Login.php" id="myButton">
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
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Display all records</h4>
                        <p class="card-description"><code>Event ETour Mersing.</code>
                        </p>
                        <div class="table-responsive">
                          <table class="table table-hover">
                            <thead>
                                <tr>
                                    <a href="add_vacation.php"><button style="size: 20px; border-radius: 10px; width: 200px; height:40px; background-color: rgb(230, 144, 15); color: aliceblue;">Add Island Vacation</button></a>
                                </tr>
                                <br><br><tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Price /pax</th>
                                <th>1st Image</th>
                                <th>2nd Image</th>
                                <th>3rd Image</th>
                                <th>4th Image</th>
                                <th>Address</th>
                                <th>Package Included</th>
                                <th>1st PhoneNo</th>
                                <th>2nd PhoneNo</th>
                                <th>Update</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
  <tr>
    <td data-th="No."><?php echo $rows['vacation_id'];?></td>
    <td data-th="Name"><?php echo $rows['name'];?></td>
    <td data-th="Price /pax"><?php echo $rows['price']?></td>
    <td data-th="1st Image"><?php echo $rows['image1'];?></td>
    <td data-th="2nd Image"><?php echo $rows['image2'];?></td>
    <td data-th="3rd Image"><?php echo $rows['image3'];?></td>
    <td data-th="4th Image"><?php echo $rows['image4'];?></td>
    <td data-th="Address"><?php echo $rows['address'];?></td>
    <td data-th="Package Included"><?php echo $rows['packageIncluded'];?></td>
    <td data-th="1st PhoneNo"><?php echo $rows['phonenum1'];?></td>
    <td data-th="2nd PhoneNo"><?php echo $rows['phonenum2'];?></td>

    <form action="update_vacation.php" method="post">
        <input type="hidden" name="id" value="<?php echo $rows['vacation_id'];?>">
        <!-- <input type="text" name="try" value="try" required> -->
        <!-- <td data-th="UPDATE"><button class="button-31" onclick="document.getElementById('id02').style.display='block'"style="max-width:100%;">UPDATE</button></td> -->
        <td data-th="UPDATE"><button class="badge badge-info" name="btnUpdate">UPDATE</button></td>
    </form>
    
    <form action="delete.php" method="post">
      <input type="hidden" name="id" id="id" value="<?php echo $rows['vacation_id'];?>">
      <td data-th="DELETE"><button class="badge badge-danger"  name="btnDelete">DELETE</button></td>
    </form>
  </tr>
  <?php
                }
            ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div><br><br><br><br>
                  
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

<?php

if(isset($_POST['post']) && !empty($_FILES["image1"]["name"]) && !empty($_FILES["image2"]["name"]) && !empty($_FILES["image3"]["name"]) && !empty($_FILES["image4"]["name"])){

    $statusMsg = '';
    // File upload path
    $targetDir = "image/";
    $fileName = basename($_FILES["image1"]["name"]);
    $fileName2 = basename($_FILES["image2"]["name"]);
    $fileName3 = basename($_FILES["image3"]["name"]);
    $fileName4 = basename($_FILES["image4"]["name"]);

    $targetFilePath = $targetDir . $fileName;
    $targetFilePath2 = $targetDir . $fileName2;
    $targetFilePath3 = $targetDir . $fileName3;
    $targetFilePath4 = $targetDir . $fileName4;

    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
    $fileType3 = pathinfo($targetFilePath3,PATHINFO_EXTENSION);
    $fileType4 = pathinfo($targetFilePath4,PATHINFO_EXTENSION);

    $name = $_POST['name']; 
    $price = $_POST['price'];
    $address = $_POST['address'];
    $package = $_POST['package'];
    $phonenum1 = $_POST['phonenum1'];   
    $phonenum2 = $_POST['phonenum2'];   

    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image1"]["tmp_name"], $targetFilePath)){

          if(move_uploaded_file($_FILES["image2"]["tmp_name"], $targetFilePath2)){

              if(move_uploaded_file($_FILES["image3"]["tmp_name"], $targetFilePath3)){
          
                    if(move_uploaded_file($_FILES["image4"]["tmp_name"], $targetFilePath4)){
                                // Insert image file name into database

                                $sql="INSERT INTO `islandvacation`(`name`, `price`, `image1`, `image2`, `image3`, `image4`, `address`, `packageIncluded`, `phonenum1`, `phonenum2`) VALUES ('$name','$price','$fileName','$fileName2','$fileName3','$fileName4','$address','$package','$phonenum1','$phonenum2')";
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
                        echo "<script>alert('Sorry, there was an error uploading your Image 4.')</script>";
                    }

                }else{
                  $statusMsg = "Sorry, there was an error uploading your file.";
                  echo "<script>alert('Sorry, there was an error uploading your Image 3.')</script>";
                }

          }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
            echo "<script>alert('Sorry, there was an error uploading your Image 2.')</script>";
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

if(isset($_POST['btnUpdate']) && !empty($_FILES["Updateimage1"]["name"]) && !empty($_FILES["Updateimage2"]["name"]) && !empty($_FILES["Updateimage3"]["name"]) && !empty($_FILES["Updateimage4"]["name"])){

    $statusMsg = '';
    // File upload path
    $targetDir = "image/";
    $fileName = basename($_FILES["Updateimage1"]["name"]);
    $fileName2 = basename($_FILES["Updateimage2"]["name"]);
    $fileName3 = basename($_FILES["Updateimage3"]["name"]);
    $fileName4 = basename($_FILES["Updateimage4"]["name"]);

    $targetFilePath = $targetDir . $fileName;
    $targetFilePath2 = $targetDir . $fileName2;
    $targetFilePath3 = $targetDir . $fileName3;
    $targetFilePath4 = $targetDir . $fileName4;

    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
    $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
    $fileType3 = pathinfo($targetFilePath3,PATHINFO_EXTENSION);
    $fileType4 = pathinfo($targetFilePath4,PATHINFO_EXTENSION);

    $id = $_POST['id'];
    $name = $_POST['Updatename']; 
    $price = $_POST['Updateprice'];
    $address = $_POST['Updateaddress'];
    $package = $_POST['Updatepackage'];
    $phonenum1 = $_POST['Updatephonenum1'];   
    $phonenum2 = $_POST['Updatephonenum2'];   

    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["Updateimage1"]["tmp_name"], $targetFilePath)){

          if(move_uploaded_file($_FILES["Updateimage2"]["tmp_name"], $targetFilePath2)){

              if(move_uploaded_file($_FILES["Updateimage3"]["tmp_name"], $targetFilePath3)){
          
                    if(move_uploaded_file($_FILES["Updateimage4"]["tmp_name"], $targetFilePath4)){
                                // Insert image file name into database

                                $sql="UPDATE `islandvacation` SET `name`='$name',`price`='$price',`image1`='$fileName',`image2`='$fileName2',`image3`='$fileName3',`image4`='$fileName4',`address`='$address',`packageIncluded`='$package',`phonenum1`='$phonenum1',`phonenum2`='$phonenum2' WHERE `vacation_id`='$id' ";
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
                        echo "<script>alert('Sorry, there was an error uploading your Image 4.')</script>";
                    }

                }else{
                  $statusMsg = "Sorry, there was an error uploading your file.";
                  echo "<script>alert('Sorry, there was an error uploading your Image 3.')</script>";
                }

          }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
            echo "<script>alert('Sorry, there was an error uploading your Image 2.')</script>";
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

if(isset($_POST['btnDeleteConfirm'])){
    // print_r("deleted");
      $Deleteid = $_POST['Deleteid'];
  
      $sql="SELECT `image1`, `image2`, `image3`, `image4` FROM `islandvacation` WHERE vacation_id='$Deleteid'";
      $result=$conn->query($sql);
      $rows=$result->fetch_assoc();
  
      $delete="DELETE FROM `islandvacation` WHERE vacation_id='$Deleteid' ";
      $db=$conn->query($delete);
  
      
  
      $path="image/";
  
      $filename1 = $rows['image1']; 
      $filename2 = $rows['image2']; 
      $filename3 = $rows['image3']; 
      $filename4 = $rows['image4'];
  
      unlink($path.$filename1);
      unlink($path.$filename2);
      unlink($path.$filename3);
      unlink($path.$filename4);
  
      echo("<meta http-equiv='refresh' content='1'>"); //Refresh by HTTP 'meta'
    }

?>


</html>