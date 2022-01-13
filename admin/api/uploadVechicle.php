<?php
include_once('config.php');
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if (file_exists($target_file)) {
    $target_file = $target_dir . rand(1000,1000000). basename($_FILES["image"]["name"]);
  }

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    

    $query = "INSERT INTO vechicle (sub_category_id,vechicle_name,image_url,overview,specification)VALUES('".$_POST['subcategory']."','".$_POST['vechicle']."','".$target_file."','".$_POST['overview']."','".$_POST['specification']."')";
    $res = mysqli_query($con,$query)or die(mysqli_error());
    if($res){
        echo json_encode(array('status'=>true,"message"=>"Upload was Successful"));
    }
    else{
        echo json_encode(array('status'=>false,"message"=>"Internal Server Error"));
    }

  } else {
    echo json_encode(array('status'=>false,"message"=>"Sorry, there was an error uploading your file"));
    
  }

