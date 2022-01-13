<div class="white-box">
    <h3 class="box-title m-b-0">All Posts</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col-sm-4">
                <?php
                if (isset($_POST['check_box_array'])) {
                    $check_box_array = $_POST['check_box_array'];
                    foreach ($check_box_array as $checkbox_value) {
                        $bulkOption = $_POST['bulkOption'];

                        switch ($bulkOption) {
                            case "Published":
                                $lecrosoft = "UPDATE post SET post_status = '$bulkOption' WHERE post_id = $checkbox_value";
                                $publish_post_query = mysqli_query($con, $lecrosoft);
                                break;
                            case "Draft":
                                $lecrosoft = "UPDATE post SET post_status = '$bulkOption' WHERE post_id = $checkbox_value";
                                $Draft_post_query = mysqli_query($con, $lecrosoft);
                                break;
                            case "Clone":
                                $lecrosoft = "SELECT * FROM post LEFT JOIN blog_category ON post.cartegory_id = blog_category.category_id  WHERE post_id = $checkbox_value";
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
                                $lecrosoft = "INSERT INTO post(post_title,cartegory_id,post_author,post_date,post_status,post_image,post_tags,post_content) 
                                 VALUES ('$post_title',$cartegory_id,'$post_author','$post_date','$post_status','$post_image','$post_tags','$post_content')";
                                $lecrosoft_query_clone = mysqli_query($con, $lecrosoft);

                                break;
                            case "Delete":
                                $lecrosoft = "DELETE FROM post  WHERE post_id = $checkbox_value";
                                $Delete_post_query = mysqli_query($con, $lecrosoft);
                                break;
                        }
                    }
                }

                ?>
                <div class="form-group">
                    <select name="bulkOption" id="" class="form-select form-control">
                        <option value="">Select Options</option>
                        <option value="Published">Publish</option>
                        <option value="Draft">Draft</option>
                        <option value="Clone">Clone</option>
                        <option value="Delete">Delete</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </div>
        </div>


        <div class="table-responsive">
            <table id="myTable" class="table table-striped">
                <thead>
                    <tr>
                        <th><input type="checkbox" id=""></th>
                        <th>User Image</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>UserName</th>
                        <th>Password</th>
                        <th>User Role</th>
                        <th>Actions</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    $lecrosoft = "SELECT * FROM users ORDER BY user_id DESC";
                    $lecrosoft_query_post_fetch = mysqli_query($con, $lecrosoft);
                    while ($row = mysqli_fetch_assoc($lecrosoft_query_post_fetch)) {
                        $image = $row['image'];
                        $user_id = $row['user_id'];
                        $user_fisrtname = $row['user_firstname'];
                        $user_lastname = $row['user_lastname'];
                        $user_email = $row['user_email'];
                        $username = $row['username'];
                        $password = $row['password'];

                        $user_role = $row['user_role'];


                        $label_color = "";
                        if ($user_role == 'Subscriber') {
                            $label_color = "label-warning";
                        } elseif ($user_role == 'Admin') {
                            $label_color = "label-success";
                        }

                        echo "<tr>";
                        echo "<td><input type='checkbox' name='check_box_array[]' id='' value ='$user_id'></td>";
                        echo "<td><img src='./img/$image' height='50px' width='100px'></td>";

                        echo "<td>$user_fisrtname</td>";
                        echo "<td><a href='#'> $user_lastname</a></td>";

                        echo "<td>$user_email</td>";
                        echo "<td>$username</td>";
                        echo "<td>$password</td>";
                        echo "<td><div class='label label-table $label_color'> $user_role</div></td>";

                        echo "<td class='text-nowrap'><a href='posts.php?source=edit-post&edit_id=$user_id' data-toggle='tooltip' data-original-title='Edit'> <i class='fa fa-pencil text-inverse m-r-10'></i> </a> <a href='posts.php?del_id=$user_id' data-toggle='tooltip' data-original-title='Delete'> <i class='far fa-trash-alt text-danger'></i> </a> </td>";

                        echo "</tr>";
                    }

                    ?>
                </tbody>
            </table>
    </form>
</div>
</div>