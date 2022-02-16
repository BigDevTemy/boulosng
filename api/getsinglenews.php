<?php
require_once('config.php');
$query = "SELECT * FROM newsletter  WHERE id='".$_GET['id']."'";
$res = mysqli_query($con,$query) or die(mysqli_error());

if(mysqli_num_rows($res)> 0){
  
    echo json_encode(array('status'=>true,'data'=>mysqli_fetch_assoc($res)));
}
else{
    echo json_encode(array('status'=>false,'data'=>'AN ERROR OCCURRED'));
}