<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from finder.createx.studio/car-finder-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:18:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<?php include_once "includes/head.php"; ?>
<?php include_once "connections/conn.php"; ?>
<!-- Body-->

<body class="" style="background-color:#0d3050">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src=" http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Demo switcher (offcanvas)-->

    <!-- Page loading spinner-->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Loading...</span>
        </div>
    </div>
    <main class="page-wrapper">
        <!-- Navbar-->
        <!-- Including the Navbar -->
        <?php include_once "includes/navbar.php"; ?>
        <!-- Page content-->
        <!-- Page content-->
        <div class="container pt-5 pb-lg-4 my-5">
            <!-- Breadcrumb-->
            <nav class="mb-3 pb-md-1 pt-md-3" aria-label="Breadcrumb">
                <ol class="breadcrumb breadcrumb-light m-0">
                    <li class="breadcrumb-item"><a href="car-finder-home.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News &amp; reviews</li>
                </ol>
            </nav>
            <!-- Page title-->
            <h1 class="text-light mb-4">News &amp; reviews</h1>
            <!-- Sorting, filters and search-->
            <div class="d-lg-flex pt-1 pb-4 mb-3">
                <div class="d-flex mb-3 mb-lg-0 pe-lg-2">
                    <div class="d-flex flex-md-row flex-column align-items-md-center flex-grow-1 border-end-md border-light pe-md-4 me-md-4">
                        <label class="d-inline-block text-light me-sm-2 mb-md-0 mb-2 text-nowrap" for="sortby"><i class="fi-arrows-sort mt-n1 me-2 align-middle opacity-70"></i>Sort by:</label>
                        <select class="form-select form-select-light me-md-2" id="sortby">
                            <option>Newest</option>
                            <option>Oldest</option>
                            <option>Popular</option>
                            <option>Sponsored</option>
                        </select>
                    </div>
                    <div class="d-flex flex-md-row flex-column align-items-md-center flex-grow-1 border-end-lg border-light ps-3 ps-md-2 pe-lg-4 me-lg-4">
                        <label class="d-inline-block text-light me-sm-2 mb-md-0 mb-2 text-nowrap" for="categories"><i class="fi-align-left mt-n1 me-2 align-middle opacity-70"></i>Category:</label>
                        <select class="form-select form-select-light me-lg-2" id="categories">
                            <option>All</option>
                            <option>Reviews</option>
                            <option>Tips &amp; Advice</option>
                            <option>Automotive News</option>

                        </select>
                    </div>
                </div>
                <div class="position-relative flex-grow-1">
                    <input class="form-control form-control-light" type="text" placeholder="Search articles by keywords..."><i class="fi-search position-absolute top-50 end-0 translate-middle-y text-light opacity-70 me-3"></i>
                </div>
            </div>
            <!-- Featured article-->
            <article class="row pb-2 pb-md-1 mb-4 mb-md-5">
                <div class="col-md-7 col-lg-8 mb-lg-0 mb-3 mb-md-0"><a class="d-block position-relative" href="#"><span class="badge bg-info position-absolute top-0 end-0 m-3 fs-sm">New</span><img class="rounded-3" src="img/bikes/bike-banner.jpg" alt="Post image"></a></div>
                <div class="col-md-5 col-lg-4"><a class="fs-sm text-uppercase text-danger text-decoration-none" href="#">Tips &amp; Advice</a>
                    <h2 class="h5 text-light pt-1"><a class="nav-link" href="#">10 Best Electric Bikes from Automotive Manufacturers for a Long Trip</a></h2>
                    <p class="d-md-none d-xl-block text-light opacity-70 mb-4">Nulla felis neque ultrices ut aliquam. Pellentesque id semper iaculis scelerisque etiam egestas interdum proin sit. Ornare venenatis, ullamcorper amet arcu ipsum ut morbi enim. Senectus quam egestas facilisi enim diam posuere ultricies interdum sed. Amet, risus eros cursus vitae, sit?</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/06.jpg" width="48" alt="lekan">
                        <div class="ps-2">
                            <h6 class="fs-base text-light lh-base mb-1">Lekan O</h6>
                            <div class="d-flex fs-sm text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1"></i>May 13</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1"></i>No comments</span></div>
                        </div>
                    </a>
                </div>
            </article>
            <!-- Latest articles (2 columns)-->
            <div class="row row-cols-1 row-cols-md-2 gy-md-5 gy-4 mb-lg-5 mb-4">
                <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="#"><span class="badge bg-info position-absolute top-0 end-0 m-3 fs-sm">New</span><img class="d-block rounded-3" src="img/car-finder/blog/06.jpg" alt="Post image"></a><a class="fs-sm text-uppercase text-danger text-decoration-none" href="#">Power bike</a>
                    <h3 class="h5 text-light mb-2 pt-1"><a class="nav-link" href="#">Good Land Rough rider bikes</a></h3>
                    <p class="text-light opacity-70 mb-3">Odio enim, sem massa posuere amet neque. Nisl rutrum morbi tempor, ligula velit justo, morbi lorem. Vestibulum at volutpat sit cursus. Aenean tincidunt integer...</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/07.jpg" width="48" alt="lekan">
                        <div class="ps-2">
                            <h6 class="fs-base text-light lh-base mb-1">Lekan o</h6>
                            <div class="d-flex fs-sm text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>May 08</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>4 comments</span></div>
                        </div>
                    </a>
                </article>
                <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="#"><span class="badge bg-info position-absolute top-0 end-0 m-3 fs-sm">New</span><img class="d-block rounded-3" src="img/car-finder/blog/06.jpg" alt="Post image"></a><a class="fs-sm text-uppercase text-danger text-decoration-none" href="#">Automotive News</a>
                    <h3 class="h5 text-light mb-2 pt-1"><a class="nav-link" href="#">10 Ways to Stay Ahead of the Curve</a></h3>
                    <p class="text-light opacity-70 mb-3">Mi sit montes, aenean tempor sollicitudin volutpat viverra. Tellus amet, vitae ac consectetur blandit at. Odio proin elit, vehicula morbi faucibus vestibulum…</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/03.jpg" width="48" alt="img">
                        <div class="ps-2">
                            <h6 class="fs-base text-light lh-base mb-1">Lekan o</h6>
                            <div class="d-flex fs-sm text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Apr 27</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>1 comment</span></div>
                        </div>
                    </a>
                </article>
            </div>
            <!-- Latest articles (3 columns)-->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 gy-md-5 gy-4 mb-lg-5 mb-4">
                <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="#"><img class="d-block rounded-3" src="img/car-finder/blog/06.jpg" alt="Post image"></a><a class="fs-xs text-uppercase text-danger text-decoration-none" href="#">Automotive News</a>
                    <h3 class="fs-base text-light pt-1"><a class="nav-link" href="#">PowerBike: Never Done Innovating</a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/08.jpg" width="44" alt="img">
                        <div class="ps-2">
                            <h6 class="fs-sm text-light lh-base mb-1">Lekan o</h6>
                            <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Apr 15</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>No comments</span></div>
                        </div>
                    </a>
                </article>
                <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="#"><img class="d-block rounded-3" src="img/car-finder/blog/06.jpg" alt="Post image"></a><a class="fs-xs text-uppercase text-danger text-decoration-none" href="#">Tips &amp; Advice</a>
                    <h3 class="fs-base text-light pt-1"><a class="nav-link" href="#">5 Predictions From the Past About the Future</a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/09.jpg" width="44" alt="img">
                        <div class="ps-2">
                            <h6 class="fs-sm text-light lh-base mb-1">Lekan o</h6>
                            <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Apr 06</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>2 comments</span></div>
                        </div>
                    </a>
                </article>
                <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="#"><img class="d-block rounded-3" src="img/car-finder/blog/06.jpg" alt="Post image"></a><a class="fs-xs text-uppercase text-danger text-decoration-none" href="#">Reviews</a>
                    <h3 class="fs-base text-light pt-1"><a class="nav-link" href="#">This Year is All About New Motor guzzi</a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/10.jpg" width="44" alt="img">
                        <div class="ps-2">
                            <h6 class="fs-sm text-light lh-base mb-1">Lekan</h6>
                            <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Mar 25</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>3 comments</span></div>
                        </div>
                    </a>
                </article>
                <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="#l"><img class="d-block rounded-3" src="img/car-finder/blog/06.jpg" alt="Post image"></a><a class="fs-xs text-uppercase text-danger text-decoration-none" href="#">Reviews</a>
                    <h3 class="fs-base text-light pt-1"><a class="nav-link" href="#">First ATV from KTM. Test Drive in Sahara</a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/11.jpg" width="44" alt="img">
                        <div class="ps-2">
                            <h6 class="fs-sm text-light lh-base mb-1">Lekan</h6>
                            <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Mar 12</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>8 comments</span></div>
                        </div>
                    </a>
                </article>
                <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="#"><img class="d-block rounded-3" src="img/car-finder/blog/06.jpg" alt="Post image"></a><a class="fs-xs text-uppercase text-danger text-decoration-none" href="#">Automotive News</a>
                    <h3 class="fs-base text-light pt-1"><a class="nav-link" href="#">Closer Look at Yet Another Electric Bike Startup</a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/07.jpg" width="44" alt="lekan">
                        <div class="ps-2">
                            <h6 class="fs-sm text-light lh-base mb-1">lekan o</h6>
                            <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Feb 28</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>5 comments</span></div>
                        </div>
                    </a>
                </article>
                <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="#"><img class="d-block rounded-3" src="img/car-finder/blog/06.jpg" alt="Post image"></a><a class="fs-xs text-uppercase text-danger text-decoration-none" href="#">Reviews</a>
                    <h3 class="fs-base text-light pt-1"><a class="nav-link" href="#">All New Aston Martin Superleggera</a></h3><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/09.jpg" width="44" alt="Lekan">
                        <div class="ps-2">
                            <h6 class="fs-sm text-light lh-base mb-1">lekan o</h6>
                            <div class="d-flex fs-xs text-light opacity-70"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 me-1 align-middle"></i>Feb 19</span><span><i class="fi-chat-circle opacity-70 mt-n1 me-1 align-middle"></i>10 comments</span></div>
                        </div>
                    </a>
                </article>
            </div>
            <!-- Pagination-->
            <nav class="border-top border-light pt-4" aria-label="Reviews pagination">
                <ul class="pagination pagination-light">
                    <li class="page-item d-sm-none text-nowrap"><span class="page-link page-link-static">1 / 5</span></li>
                    <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                    <li class="page-item d-none d-sm-block">...</li>
                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><i class="fi-chevron-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </main>
    <!-- Footer-->

    <?php include_once "includes/footer.php";
    ?>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fi-chevron-up"> </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
</body>

<!-- Mirrored from finder.createx.studio/car-finder-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:18:13 GMT -->

</html>