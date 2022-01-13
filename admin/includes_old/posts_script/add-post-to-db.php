<?php
if (isset($_POST['submit_post'])) {
    $post_title = $_POST['post_title'];
    $cartegory_id = $_POST['cartegory_id'];
    $post_author = $_POST['post_author'];
    $post_date = $_POST['post_date'];
    $post_status = $_POST['post_status'];
    $post_image = $_FILES['post_image']['name'];
    $tempname = $_FILES['post_image']['tmp_name'];
    $folder = "img/" . $post_image;
    $post_tags = $_POST['post_tags'];
    $post_content = $_POST['post_content'];



    $lecrosoft = "INSERT INTO post(post_title,cartegory_id,post_author,post_date,post_status,post_image,post_tags,post_content) 
         VALUES ('$post_title',$cartegory_id,'$post_author','$post_date','$post_status','$post_image','$post_tags','$post_content')";
    $lecrosoft_query = mysqli_query($con, $lecrosoft);

    if ($lecrosoft_query) {
        if (move_uploaded_file($tempname, $folder)) {
            echo "POST HAS BEEN MADE";
        }
    } else {
        die("QUERY ERROR" . mysqli_error($con));
    }
}
