<?php
require_once('config.php');
$query = "SELECT * FROM vechicle";
$res = mysqli_query($con,$query) or die(mysqli_error());

if(mysqli_num_rows($res)> 0){
    $count = mysqli_num_rows($res);
    
    $rand_array = array();
    $result=array();
    for($i=0;$i<3;$i++){
      
        array_push($rand_array,rand(1,$count));
    }

    for($v=0;$v<3;$v++){
        $queryz =  "SELECT * FROM vechicle LEFT JOIN `vechile_subcategory` ON `vechicle`.`sub_category_id` = `vechile_subcategory`.`id` LEFT JOIN `vechicle_category` ON `vechile_subcategory`.`category_id` = `vechicle_category`.`id` WHERE `vechicle`.`id` = '".$rand_array[$v]."' ";
        // $query = "SELECT * FROM vechicle WHERE id='".$rand_array[$v]."'";
        $res = mysqli_query($con,$queryz) or die(mysqli_error());
        if(mysqli_num_rows($res) > 0){
            array_push($result,mysqli_fetch_assoc($res));
        }
    }

    echo json_encode(array('status'=>true,'data'=>$result,'random'=>$rand_array));
}