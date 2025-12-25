<?php
if(isset($_POST['btnSubmit'])){

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
  
            //   echo("<meta http-equiv='refresh' content='1'>"); //Refresh by HTTP 'meta'
  
              if($db){
              $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
              echo "<script>alert('The data has been uploaded successfully.')</script>";
              echo "<script>document.location='admin_profile.php';</script>";
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
