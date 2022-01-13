<?php

include_once('config.php');



$query = "SELECT * FROM vechile_subcategory WHERE category_id='".$_POST['category_id']."'";
$res = mysqli_query($con,$query) or die(mysqli_error());

if(mysqli_num_rows($res)> 0){
    
    echo json_encode(array('status'=>true,'data'=>mysqli_fetch_all($res)));
}
else{
    echo json_encode(array('status'=>false,'data'=>"NO RECORD FOUND"));
}

