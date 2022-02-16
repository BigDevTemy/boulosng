<?php
include_once('config.php');
$target_dir = "upload/";
$target_file_thumbnail = $target_dir . basename($_FILES["image_thumbnail"]["name"]);
$target_file_banner = $target_dir . basename($_FILES["image_banner"]["name"]);

if (file_exists($target_file_thumbnail) && file_exists($target_file_banner) ) {
    $target_file_thumbnail = $target_dir . rand(1000,1000000). basename($_FILES["image_thumbnail"]["name"]);
    $target_file_banner = $target_dir . rand(1000,1000000). basename($_FILES["image_banner"]["name"]);
  }

if (move_uploaded_file($_FILES["image_banner"]["tmp_name"], $target_file_banner) && move_uploaded_file($_FILES["image_thumbnail"]["tmp_name"], $target_file_thumbnail) ) {
    
    $query = "INSERT INTO vechicle (sub_category_id,vechicle_name,image_url,overview,specification,banner_img)VALUES('".$_POST['subcategory']."','".$_POST['vechicle']."','".$target_file_thumbnail."','".$_POST['overview']."','".$_POST['specification']."','".$target_file_banner."')";
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

