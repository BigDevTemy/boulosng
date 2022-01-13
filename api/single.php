<?php
require_once('config.php');


$query = "SELECT id FROM vechile_subcategory WHERE sub_category_name='".$_POST['sub_category_name']."'";
$res = mysqli_query($con,$query) or die(mysqli_error());
if(mysqli_num_rows($res) > 0){
    $id = mysqli_fetch_assoc($res);
    
    $query = "SELECT * FROM vechicle  WHERE vechicle_name='".$_POST['vechicle_name']."' AND sub_category_id = '".$id['id']."'";
    $res = mysqli_query($con,$query) or die(mysqli_error());
    // $result = array();
    $getrelated = "SELECT * FROM vechicle  WHERE sub_category_id = '".$id['id']."'";
    $res_related = mysqli_query($con,$getrelated)or die(mysqli_error());
    $res_related_array=array();
    if(mysqli_num_rows($res)> 0){
        
            $result = mysqli_fetch_all($res);
            while($row = mysqli_fetch_assoc($res_related)){
           
                array_push($res_related_array,$row);
             }

            echo json_encode(array('status'=>true,'data'=>$result,'related'=>$res_related_array));
    }
    else{
        echo json_encode(array('status'=>false,'data'=>'Empty Response'));
    }
}

