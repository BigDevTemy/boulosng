<?php

include_once('config.php');

$query = "SELECT * FROM vechicle_category";
$res = mysqli_query($con,$query) or die(mysqli_error());

$query_sub = "SELECT `vechile_subcategory`.*,`vechicle_category`.`category` FROM vechile_subcategory LEFT JOIN vechicle_category ON `vechile_subcategory`.`category_id` = `vechicle_category`.`id`";
$res_sub = mysqli_query($con,$query_sub) or die(mysqli_error());

if(mysqli_num_rows($res)> 0){
    
    echo json_encode(array('status'=>true,'data'=>mysqli_fetch_all($res),'subData'=>mysqli_fetch_all($res_sub)));
}
else{
    echo json_encode(array('status'=>false,'data'=>"NO RECORD FOUND"));
}

