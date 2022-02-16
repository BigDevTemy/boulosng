<?php
include_once('config.php');
$target_dir = "newletters/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if (file_exists($target_file)) {
    $target_file = $target_dir . rand(1000,1000000). basename($_FILES["image"]["name"]);
  }

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    

    $query = "INSERT INTO newsletter (newsletter_title,newsletter_body,newsletter_image)VALUES('".$_POST['title']."','".$_POST['body']."','".$target_file."')";
    $res = mysqli_query($con,$query)or die(mysqli_error());
    if($res){
        echo json_encode(array('status'=>true,"message"=>"NewsLetter Successfully Added"));
    }
    else{
        echo json_encode(array('status'=>false,"message"=>"Internal Server Error"));
    }

  } else {
    echo json_encode(array('status'=>false,"message"=>"Sorry, there was an error uploading your file"));
    
  }

