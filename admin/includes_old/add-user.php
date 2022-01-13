<?php

if (isset($_POST['submit'])) {
    $user_fisrtname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_email = $_POST['user_email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $image = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $folder = "./img/" . $image;
    $user_role = $_POST['user_role'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);



    $lecrosoft = "INSERT INTO users (user_firstname, user_lastname, user_email, username, password, image, user_role) 
VALUES ('$user_fisrtname','$user_lastname','$user_email','$username','$password_hash','$image','$user_role')";
    $query_lecrosoft = mysqli_query($con, $lecrosoft);

    if ($query_lecrosoft) {
        if (move_uploaded_file($temp_name, $folder)) {
            recordSuccessMessage();
        }
    } else {
        die("QUERY ERROR" . mysqli_error($con));
    }
}

?>
<div class="white-box">
    <h3 class="box-title m-b-0">Add New User</h3>
    <p class="text-muted m-b-30 font-13"> </p>
    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-12">First Name </label>
            <div class="col-md-12">
                <input type="text" class="form-control" name="user_firstname" placeholder="Enter Firstname">
            </div>
        </div>



        <div class="form-group">
            <label class="col-md-12" for="author name">LastName </label>
            <div class="col-md-12">
                <input type="text" id="" name="user_lastname" class="form-control" placeholder="Lastname">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Email</label>
            <div class="col-md-12 d-flex">
                <input type="email" class="form-control" name="user_email" id="" placeholder="Enter User Email">
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12">Username</label>
            <div class="col-md-12 d-flex">
                <input type="text" class="form-control" name="username" id="" placeholder="Enter username">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Password</label>
            <div class="col-md-12 d-flex">
                <input type="password" class="form-control" name="password" id="" placeholder="Enter Pasword">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">User Image</label>
            <div class="col-sm-12">
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                        <input type="file" name="image"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">User Role</label>
            <div class="col-sm-12">
                <select class="form-control" name="user_role">
                    <option value="Admin">Admin</option>
                    <option value="Subcriber">Subscriber</option>

                </select>
            </div>
        </div>






        <div class="form-group">

            <div class="col-md-12">

                <input type="submit" class="btn btn-success form-control text-white" name="submit" value="Submit">

            </div>
        </div>
    </form>
</div>