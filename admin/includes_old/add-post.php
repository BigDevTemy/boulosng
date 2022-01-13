<div class="white-box">
    <h3 class="box-title m-b-0">Add New Post</h3>
    <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>
    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-12">Post Title </label>
            <div class="col-md-12">
                <input type="text" class="form-control" name="post_title" placeholder="Your Post Title Here">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Post Category</label>
            <div class="col-sm-12">
                <select class="form-control" name="cartegory_id">
                    <option value="">Select Category</option>
                    <?php
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
                <input type="text" id="example-email" name="post_author" class="form-control" value='<?php echo  $_SESSION['firstname'] ?>' disabled>
            </div>
        </div>
        <div class=" form-group">
            <label class="col-md-12">Post Date</label>
            <div class="col-md-12 d-flex">
                <input type="text" class="form-control" name="post_date" id="datepicker-autocloseLekan" value="<?php echo date('d/m/Y') ?>" autocomplete="off"> <span class="input-group-addon"><i class="icon-calender"></i></span>


            </div>
        </div>



        <div class="form-group">
            <label class="col-sm-12">Post Status</label>
            <div class="col-sm-12">
                <select class="form-control" name="post_status">
                    <option value="Draft">Draft</option>
                    <option value="Published">Publish</option>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Post Image</label>
            <div class="col-sm-12">
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                        <input type="file" name="post_image"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Post Tags</label>
            <div class="col-md-12">

                <div class="tags-default">
                    <p>Seperate each tag with a comma (,) or hit the enter button on your keyboard</p>
                    <input type="text" class="form-control" name="post_tags" data-role="tagsinput" placeholder="add tags" />
                </div>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Post Content</label>
            <div class="col-md-12">

                <textarea id="mymce" name="post_content"></textarea>

            </div>
        </div>


        <div class="form-group">

            <div class="col-md-12">

                <input type="submit" class="btn btn-success form-control text-white" name="submit_post" value="Submit">

            </div>
        </div>
    </form>



</div>
<?php include('includes/posts_script/add-post-to-db.php') ?>
</div>