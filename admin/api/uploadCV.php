<?php
include_once('config.php');
$target_dir = "career/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if (file_exists($target_file)) {
    $target_file = $target_dir . rand(1000,1000000). basename($_FILES["image"]["name"]);
  }

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    

    $query = "INSERT INTO career (firstname,lastname,phonenumber,email,city,image_url)VALUES('".$_POST['fname']."','".$_POST['lname']."','".$_POST['phonenumber']."','".$_POST['email']."','".$_POST['city']."','".$target_file."')";
    $res = mysqli_query($con,$query)or die(mysqli_error());
    if($res){
        echo json_encode(array('status'=>true,"message"=>"CV was Successfully Submitted...Our HR Team will keep in touch"));
    }
    else{
        echo json_encode(array('status'=>false,"message"=>"Internal Server Error"));
    }

  } else {
    echo json_encode(array('status'=>false,"message"=>"Sorry, there was an error uploading your file"));
    
  }

