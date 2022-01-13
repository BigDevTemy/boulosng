<?php
include_once('config.php');
session_start();
$query = "SELECT * FROM users WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
$result = mysqli_query($con,$query) or die(mysqli_error());
$x = mysqli_num_rows($result);
if($x > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['fullname'] = $row['user_firstname'].''.$row['user_lastname'];
    $_SESSION['first_name'] = $row['user_firstname'];
    $_SESSION['role'] = $row['user_role'];
   echo json_encode(["status"=>true,"message"=>'valid username and password']);
}
else{
    echo json_encode(array("status"=>false,"message"=>"Invalid Username and Password..pls try again"));
}

