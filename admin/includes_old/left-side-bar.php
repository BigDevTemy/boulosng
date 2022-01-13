<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse slimscrollsidebar">

        <ul class="nav" id="side-menu">

            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li class="user-pro">
                <a href="#" class="waves-effect"><img src="./img/<?php echo $_SESSION['image'] ?>" alt="user-img" class="img-circle"> <span class="hide-menu"><?php echo $_SESSION['lastname'] . " " . $_SESSION['firstname'] ?><span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                    <li><a href="./logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
            <li class="nav-small-cap m-t-10">--- Main Menu</li>
            <li> <a href="index.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>


            <li class="nav-small-cap">--- POST</li>

            <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Pages <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="posts.php">Home </a> </li>
                    <li> <a href="about_us.php">About us</a> </li>
                    <li> <a href="about_us_category.php">About us</a> </li>

                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Post <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="posts.php">Manage Posts</a> </li>
                    <li> <a href="posts.php?source=add-post">Add New Post</a> </li>

                </ul>
            </li>
            <li> <a href="comment.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Comments </span></a></li>
            <li> <a href="category.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Category </span></a></li>
            <li> <a href="ebook.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Ebook</span></a></li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> User <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="users.php">Manage User</a> </li>
                    <li> <a href="users.php?source=add-user">Add New User</a> </li>

                </ul>
            </li>




            <li class="nav-small-cap">--- FORUM</li>
            <li> <a href="forum-category.php" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forum</span></a> </li>
            <li> <a href="widgets.php" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>




    </div>
</div>