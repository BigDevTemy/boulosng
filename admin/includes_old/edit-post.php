<?php

if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    $lecrosoft = "SELECT * FROM post LEFT JOIN blog_category ON post.cartegory_id = blog_category.category_id  WHERE post_id = $edit_id";
    $lecrosoft_query_post_fetch = mysqli_query($con, $lecrosoft);
    while ($row = mysqli_fetch_assoc($lecrosoft_query_post_fetch)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $cartegory_id = $row['cartegory_id'];
        $post_author = $row['post_author'];
        $post_date = $row['post_date'];
        $post_status = $row['post_status'];
        $post_image = $row['post_image'];
        $post_tags = $row['post_tags'];
        $post_content = $row['post_content'];
        $post_comment_count = $row['post_comment_count'];
        $post_view_count = $row['post_view_count'];
        $category_title = $row['category_title'];
    }
}

?>





<div class="white-box">
    <h3 class="box-title m-b-0">Edit Post</h3>
    <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>
    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-12">Post Title </label>
            <div class="col-md-12">
                <input type="text" class="form-control" name="post_title" value="<?php echo $post_title; ?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Post Category</label>
            <div class="col-sm-12">
                <select class="form-control" name="cartegory_id">

                    <?php

                    echo "<option value=' $cat_id'>$category_title</option>";
                    $query = "SELECT * FROM blog_category";
                    $select_category_sql_query = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($select_category_sql_query)) {
                        $cat_id = $row['category_id'];
                        $cat_title = $row['category_title'];
                        echo "<option value=' $cat_id'>$cat_title</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-12" for="author name">Post Author </label>
            <div class="col-md-12">
                <input type="text" id="example-email" name="post_author" class="form-control" value="<?php echo $post_author; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Post Date</label>
            <div class="col-md-12 d-flex">
                <input type="text" class="form-control" name="post_date" id="datepicker-autocloseLekan" value="<?php echo $post_date; ?>"> <span class="input-group-addon"><i class="icon-calender"></i></span>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-12">Post Status</label>
            <div class="col-sm-12">
                <select class="form-control" name="post_status">
                    <?php
                    echo "<option value='$post_status'>$post_status</option>";
                    if ($post_status == 'Draft') {
                        echo "<option value='Published'>Publish</option>";
                    } else {
                        echo "<option value='Draft'>Draft</option>";
                    }
                    ?>




                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Post Image</label>
            <div class="col-sm-12">
                <div class="row">

                    <div class="col-sm-8">
                        <img src="./img/<?php echo $post_image ?>" alt="" height="300px" width="100%">
                    </div>
                    <div class="col-sm-4">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">


                            <div class=" form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span>
                            </div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                <input type="file" id="file" name="post_image" onchange='getFileData(this)'> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Post Tags</label>
            <div class="col-md-12">

                <div class="tags-default">
                    <p>Seperate each tag with a comma (,) or hit the enter button on your keyboard</p>
                    <input type="text" class="form-control" name="post_tags" data-role="tagsinput" value="<?php echo $post_tags; ?>" placeholder="add tags" />
                </div>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Post Content</label>
            <div class="col-md-12">

                <textarea id="mymce" name="post_content" value="<?php echo $post_content; ?>"></textarea>

            </div>
        </div>


        <div class="form-group">

            <div class="col-md-12">

                <input type="submit" class="btn btn-success form-control text-white" name="update_post" value="Update">

            </div>
        </div>
    </form>

    <?php
    if (isset($_POST['update_post'])) {
        if (isset($_GET['edit_id'])) {
            $edit_id = $_GET['edit_id'];

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


            // $lecrosoft = "UPDATE post SET post_title = '$post_title', cartegory_id = $cartegory_id, post_author = '$post_author', post_date = '$post_date', post_status = '$post_status', post_image = '$post_image', post_tags = '$post_tags', post_content = '$post_content' WHERE post_id = $edit_id ";
            $lecrosoft = "UPDATE `post` SET `post_title`='$post_title',`cartegory_id`=$cartegory_id,`post_content`= $post_content,`post_image`=$post_image,`post_author`=$post_author,`post_date`=$post_date,`post_status`=$post_status,`post_tags`=$post_tags WHERE post_id = $edit_id ";
            $query_lecrosoft = mysqli_query($con, $lecrosoft);
            move_uploaded_file($tempname, $folder);
            if ($query_lecrosoft) {

                echo " record updated successfully";
                echo "<script type ='text/javascript'>location ='posts.php?source=edit-post&edit_id=$edit_id'</script>";
            } else {
                die("QUERY ERROR" . mysqli_error($con));
            }
        }
    }
    ?>


</div>
<script>
    function getFileData(object) {
        var file = object.files[0];
        var name = file.name; //you can set the name to the paragraph id 
        document.getElementById('file').value = name; //set name using core javascript

    }
</script>