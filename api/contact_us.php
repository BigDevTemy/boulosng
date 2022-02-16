<?php
include_once('config.php');

    $query = "INSERT INTO contact_us (fullname,email,message_content)VALUES('".$_POST['fullname']."','".$_POST['email']."','".$_POST['message']."')";
    $res = mysqli_query($con,$query)or die(mysqli_error());
    if($res){
        echo json_encode(array('status'=>true,"data"=>"Thanks For Your Message..A Response Await Shortly"));
    }
    else{
        echo json_encode(array('status'=>false,"data"=>"An error Occurred"));
    }

  
