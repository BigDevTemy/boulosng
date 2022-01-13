<?php
require_once('config.php');

$query = "SELECT id FROM vechicle_category WHERE category='".$_POST['category']."'";
$res = mysqli_query($con,$query);
if(mysqli_num_rows($res) > 0){
    $id = mysqli_fetch_assoc($res);
    $query = "SELECT * FROM vechile_subcategory LEFT JOIN vechicle ON `vechile_subcategory`.`id` = `vechicle`.`sub_category_id` WHERE `vechile_subcategory`.`category_id`='".$id['id']."'";
    $res = mysqli_query($con,$query);
    $result = array();
    $sub_group = array();
    if(mysqli_num_rows($res)> 0){
        while($row = mysqli_fetch_assoc($res)){
           
           array_push($result,$row);
           
            
        }
        
        
        echo json_encode($result);
    }
}