<?php
include_once('config.php');

    $query = "INSERT INTO subcribers (emailaddress)VALUES('".$_POST['email']."')";
    $res = mysqli_query($con,$query)or die(mysqli_error());
    if($res){
        echo json_encode(array('status'=>true,"message"=>"We will Keep you Informed"));
    }
    else{
        echo json_encode(array('status'=>false,"message"=>"An error Occurred"));
    }

  
