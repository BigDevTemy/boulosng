<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from finder.createx.studio/car-finder-account-cars.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:18:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<?php include_once('includes/head.php') ?>
<!-- Body-->
<style>
  
</style>
<body class="" style="background-color:#0d3050">
  <!-- Google Tag Manager (noscript)-->
  <noscript>
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
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
    <?php include_once('includes/navbar.php'); ?>
    <!-- Page content-->
    <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
      <!-- Breadcrumb-->
      <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
        <ol class="breadcrumb breadcrumb-light">
          <li class="breadcrumb-item"><a href="/boulos_ng">Home</a></li>
          <li class="breadcrumb-item active breadcrumber" aria-current="page" id="Vechiles"></li>
        </ol>
      </nav>

      <!-- Page content-->
      <!-- <div id="singlepage" align="right">
        <img src="/boulos_ng/img/bikes/SUZUKI_GSX_S1000A.png" id="myAnimation" style="width: 100px;height: 100px;position: absolute;z-index: 7000;">
        <audio id="myaudio">
          <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mp3">
        </audio>
      </div> -->
      <div class="row" id="mybody">
        <!-- Sidebar-->
        <aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
          <!-- Account nav-->
          <div class="card card-body card-light border-0 shadow-sm pb-1 me-lg-1" id="aside">
            <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4">
              <!--<img class="rounded-circle" src="img/avatars/01.jpg" width="48" alt="Robert Fox"> -->
              <div class="pt-md-2 pt-lg-0 ps-3 ps-md-0 ps-lg-3">
                <h2 class="fs-lg text-light mb-0">BOULOS NG</h2>
                <address>Boulos Enterprises Limited</address>

              </div>
            </div><a class="btn btn-outline-light d-block d-md-none w-100 mb-3" href="#account-nav" data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>Menu</a>
            <div class="collapse d-md-block mt-3" id="account-nav">
              <div class="card-nav linkCover">
                  <a class="card-nav-link" id="TWO_WHEELERS" style="cursor:pointer"><i class="fi-car me-2"></i>TWO WHEELERS</a>
                  <a class="card-nav-link" id="THREE_WHEELERS" style="cursor:pointer" ><i class="fi-car me-2"></i>THREE WHEELERS</a>
                  <a class="card-nav-link" id="FOUR_WHEELERS" style="cursor:pointer" ><i class="fi-car me-2"></i>FOUR WHEELERS</a>
                  <a class="card-nav-link" href="#OBM" style="cursor:pointer" ><i class="fi-car me-2"></i>OBM</a>
              </div>
            </div>
          </div>
          <div style="background-color:#fff">

          </div>
        </aside>
        <!-- Content-->
        <div class="col-lg-8 col-md-7 mb-5" id="content">

          <!-- Javascript Dom Wrapper-->
          <!-- Catalog grid view-->
          <!-- <div class="col-lg-9"> -->
          <!-- Breadcrumb-->

          <!-- Page title-->
          <div class="d-flex align-items-center justify-content-between pb-4 mb-2">
            <h1 class="text-light me-3 mb-0 category" id=""></h1>
            <div class="text-light"><i class="fi-car fs-lg me-2"></i><span class="align-middle allproducts"> </span></div>
          </div>
          <!-- Sorting + View-->
         
          <div class="row" id="main">
            <!-- Item-->
            
           
            
          </div>
          <!-- Sorting + Pagination-->
          
          <!-- </div> -->


        </div>
      </div>
      <div class="row" id="single">

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
  <!-- Main theme script-->
  <script src="js/theme.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script type="text/javascript" src="vechicle/carsingle.js"></script>
  <script type="text/javascript" src="vechicle/main.js"></script>
  <script type="text/javascript" src="vechicle/index.js"></script>
 
  <script type="text/javascript">
    
    $(document).ready(function() {
        window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                  });
        // loadComponent(document.location.href)
        $("#TWO_WHEELERS").on('click',function(){
          window.history.replaceState("", document.title, window.location.href.replace(location.hash, "") + '#TWO_WHEELERS');
            
        })
        $("#THREE_WHEELERS").on('click',function(){
          window.history.replaceState("", document.title, window.location.href.replace(location.hash, "") + '#THREE_WHEELERS');
        })
        $("#FOUR_WHEELERS").on('click',function(){
          window.history.replaceState("", document.title, window.location.href.replace(location.hash, "") + '#FOUR_WHEELERS');
        })
        $("#OBM").on('click',function(){
          window.history.replaceState("", document.title, window.location.href.replace(location.hash, "") + '#OBM');
        })
    })
  </script>
</body>

<!-- Mirrored from finder.createx.studio/car-finder-account-cars.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:18:05 GMT -->

</html>