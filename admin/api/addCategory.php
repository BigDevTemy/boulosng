<?php

include_once('config.php');

$check = "SELECT category FROM vechicle_category WHERE category='".$_POST['category_name']."'";
$res_check = mysqli_query($con,$check) or die(mysqli_error());

if(mysqli_num_rows($res_check) > 0){
    echo json_encode(array('status'=>false,'data'=>"Category name Already Exist"));
}
else{
    $query = "INSERT INTO vechicle_category (category)VALUES('".$_POST['category_name']."')";
    $res = mysqli_query($con,$query) or die(mysqli_error());

    if($res){
        echo json_encode(array('status'=>true,'data'=>"Category Successfully Saved"));
    }
    else{
        echo json_encode(array('status'=>false,'data'=>"Internal Server Error"));
    }
}


