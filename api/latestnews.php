<?php
require_once('config.php');
$query = "SELECT * FROM newsletter  ORDER BY id DESC LIMIT 3";
$res = mysqli_query($con,$query) or die(mysqli_error());
$result = array();
if(mysqli_num_rows($res)> 0){
  
    while($row = mysqli_fetch_assoc($res)){
        array_push($result,$row);
    }
    
    echo json_encode(array('status'=>true,'data'=>$result));
}
else{
    echo json_encode(array('status'=>false,'data'=>'NO NEWSLETTER FOUND'));
}