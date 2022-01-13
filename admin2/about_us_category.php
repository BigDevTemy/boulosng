<?php include('includes/head.php');
?>
<?php include('includes/functions.php');
?>
<?php include('../connections/conn.php') ?>
<!-- body tag starts here -->
<div class="wrapper">
    <div class="navbar-minimize-fixed">
        <button class="minimize-sidebar btn btn-link btn-just-icon">
            <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
            <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
        </button>
    </div>

    <!-- ============== SIDE BAR BEGINS ============= -->
    <?php include('includes/sidebar.php') ?>
    <!-- ============== SIDE BAR END ============= -->
    <div class="main-panel">
        <!-- Navbar -->

        <?php include('includes/navbar.php') ?>
        <!-- Navbar end -->

        <?php include('includes/search_bar.php'); ?>
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <ol class="breadcrumb bg-transparent ml-3">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Library</a>
                    </li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="tools float-right">
                                <div class="dropdown">
                                    <button id="add_about_category_btn" type="button" class="btn btn-primary">
                                        <i class="tim-icons icon-settings-gear-63"></i>
                                        Add category
                                    </button>
                                    <button type="button" class="btn btn-default dropdown-toggle btn-link btn-icon" data-toggle="dropdown">
                                        <i class="tim-icons icon-settings-gear-63"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <a class="dropdown-item text-danger" href="#">Remove Data</a>
                                    </div>
                                </div>
                            </div>
                            <h4 class="card-title">About Us Page Category</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="text-primary">
                                        <tr>
                                            <th class="text-center">
                                                Image
                                            </th>
                                            <th>
                                                Category Name
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        fetch_about_us_nav();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        <!-- =========================== ADD CATEGORY MODAL COMES IN HERE================== -->

        <!-- Modal -->
        <div class="modal fade" id="modal-box" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog bg-success">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="">About Us Nav name </label>
                                <input type="text" name="nav_name" class="form-control text-dark" placeholder="Enter about us nav">
                            </div>
                            <div class="form-group mb-3">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="../assets/img/image_placeholder.jpg" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="nav_icon" />
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- =========================== ADD CATEGORY MODAL ENDS HERE================== -->
        <!-- ======================PHP BEGINS ======================================================= -->

        <?php
        if (isset($_POST['submit'])) {
            $nav_name = $_POST['nav_name'];
            $nav_icon = $_POST['nav_icon'];

            $sql = "INSERT INTO `about_us_category`(`category_name`, `icon`) VALUES ('$nav_name','$nav_icon')";
            $query_sql = mysqli_query($con, $sql);
            if (!$query_sql) {
                die("query error" . mysqli_error($con));
            }
        }
        ?>
        <!-- ======================PHP ENDS ======================================================= -->


        <!-- ========== FOOTER BEGINS ======================= -->
        <?php include('includes/footer.php'); ?>

        <script>
            $(document).ready(function() {
                $('#add_about_category_btn').click(function() {
                    $('#modal-box').modal('show');
                })
            })
        </script>
        <!-- ================ FOOTER ENDS ============================= -->