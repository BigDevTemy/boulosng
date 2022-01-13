<?php

include_once('config.php');

$check = "SELECT sub_category_name FROM vechile_subcategory WHERE sub_category_name='".$_POST['subcategory']."'";
$res_check = mysqli_query($con,$check) or die(mysqli_error());

if(mysqli_num_rows($res_check) > 0){
    echo json_encode(array('status'=>false,'data'=>"SubCategory name Already Exist"));
}
else{
    $query = "INSERT INTO vechile_subcategory (category_id,sub_category_name)VALUES('".$_POST['category_id']."','".$_POST['subcategory']."')";
    $res = mysqli_query($con,$query) or die(mysqli_errno());

    if($res){
        echo json_encode(array('status'=>true,'data'=>"SubCategory Successfully Saved"));
    }
    else{
        echo json_encode(array('status'=>false,'data'=>"Internal Server Error"));
    }
}


