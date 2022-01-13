<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from finder.createx.studio/car-finder-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:13:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<!-- =======INCLUDE HEAD TAG ====== -->
<?php include_once "includes/head.php"; ?>
<?php include_once "connections/conn.php"; ?>
<!-- Body-->

<body>
  <!-- Google Tag Manager (noscript)-->
  <noscript>
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden"></iframe>
  </noscript>

  <main class="page-wrapper">
    <!-- Navbar-->
    <!-- Including the Navbar -->
    <?php include_once "includes/navbar.php"; ?>

    <!-- Page content-->
    <!-- Hero + Search form-->
    <!-- <section class="bg-top-center bg-repeat-0 pt-5 about__hero_container"></section> -->


    <section class="bg-top-center bg-repeat-0 pt-5 bg-dark" style="background-image: url(img/bikes/about-us.png); background-size: cover; background-position:center; background-repeat:no-repeat; height:530px">
      <div class="container pt-5">
        <div class="row pt-lg-4 pt-xl-5">
          <div class="col-lg-4 col-md-5 pt-3 pt-md-4 pt-lg-5">
            <!-- <h1 class="display-4 text-light pb-2 mb-4 me-md-n5">After Sales Service</h1> -->
            <!-- <p class="fs-lg text-light opacity-70">We offer the best Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium facilis iste modi illum sequi voluptate, ducimus dolorum esse provident aspernatur?. </p> -->
          </div>
          <!-- <div class="col-lg-8 col-md-7 pt-md-5"><img class="d-block mt-4 ms-auto" src="img/main/hero/hero-bg2.png" width="800" alt="Boulos Bike"></div> -->
        </div>
      </div>
      <div class="container mt-4 mt-sm-3 mt-lg-n3 pb-5 mb-md-4">
        <!-- Tabs-->

        <!-- Form group-->

      </div>
    </section>

    <!-- ... existing HTML ... -->

    <div id="like_button_container"></div>

    <!-- ... existing HTML ... -->

    <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2 text-white" style="background-color:#0d3050">
      <div class="row">
        <!-- Sidebar-->
        <aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
          <!-- Account nav-->
          <div class="card card-body card-light border-0 shadow-sm pb-1 me-lg-1">
            <a class="btn btn-outline-light d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>Menu</a>
            <div class="collapse d-md-block mt-3" id="account-nav">
              <div class="card-nav" id="sidebarContainer">
                <a class="card-nav-link introItem" style="cursor:pointer">
                  <i class="far fa-user me-2"></i>Introduction
                </a>
                <a class="card-nav-link visionItem" style="cursor:pointer">
                  <i class="far fa-eye me-2"></i>Our Vision</a>
                <a class="card-nav-link missionItem" style="cursor:pointer">
                  <i class="fas fa-walking me-2"></i>Our Mission
                </a>
                <a class="card-nav-link valuesItem" style="cursor:pointer">
                  <i class="far fa-heart me-2"></i>Our Values
                </a>
                <a class="card-nav-link historyItem" style="cursor:pointer">
                  <i class="fas fa-history me-2"></i>Our History
                </a>
              </div>
            </div>
          </div>
        </aside>
        <!-- Content-->
        <div class="col-lg-8 col-md-7 mb-5 aboutContainer" id="mybody">

        </div>
      </div>
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
  <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
  <script src="vendor/jarallax/dist/jarallax.min.js"></script>
  <script src="vendor/jarallax/dist/jarallax-element.min.js"></script>
  <!-- Main theme script-->
  <script src="js/theme.min.js"></script>
  <!-- Load our React component. -->
  <script src="js/main.js"></script>

  <?php include_once "includes/reactcdn.php"; ?>
</body>

</html>