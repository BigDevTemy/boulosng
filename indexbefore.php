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
    <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
  </noscript>
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
    <!-- Hero + Search form-->
    <?php include_once "includes/hero.php"; ?>

    <!-- Mobile app CTA-->
    <section class="container pb-3 pb-sm-4 pb-md-5 cta__aboutus_container">
      <?php
      $sql = "SELECT * FROM about_us_page_sections";
      $query_sql = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_assoc($query_sql)) {
        extract($row);
      };

      ?>
      <div class="row align-items-center pb-5">
        <div class="col-md-7 col-lg-6 col-xl-5 offset-xl-1 text-center text-md-start mb-4 mb-md-0">
          <h2 class="text-dark mb-4"><?php echo $title ?></h2>
          <p class="fs-lg text-dark opacity-70 mb-md-5 cta__aboutus_text"><?php echo $description ?></p>

        </div>
        <div class="col-md-5 col-lg-6"><img class="d-block mx-auto" src="img/car-finder/home/mobile-app.png" width="460" alt="Mobile App"></div>
      </div>
    </section>

    <!-- Features-->
    <section class="container pt-4 pt-md-5">
      <div class="d-sm-flex align-items-center justify-content-between">
        <h2 class="h3 text-light mb-2 mb-sm-0">What sets Finder apart?</h2><a class="btn btn-link btn-light fw-normal px-0" href="#">How to sell cars on Finder<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
      </div>
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-lg-1 pt-4 mt-2 pt-md-5 mt-md-3">
          <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-file lead text-primary mt-1 order-md-2"></i>
            <div class="text-md-end ps-3 ps-md-0 pe-md-3 order-md-1">
              <h3 class="h6 text-light mb-1">Over 1 Million Listings</h3>
              <p class="fs-sm text-light opacity-70 mb-0">That’s more than you’ll find on any other major online automotive marketplace in the USA.</p>
            </div>
          </div>
          <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-search lead text-primary mt-1 order-md-2"></i>
            <div class="text-md-end ps-3 ps-md-0 pe-md-3 order-md-1">
              <h3 class="h6 text-light mb-1">Personalized Search</h3>
              <p class="fs-sm text-light opacity-70 mb-0">Our powerful search makes it easy to personalize your results so you only see the cars and features you care about.</p>
            </div>
          </div>
          <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-settings lead text-primary mt-1 order-md-2"></i>
            <div class="text-md-end ps-3 ps-md-0 pe-md-3 order-md-1">
              <h3 class="h6 text-light mb-1">Non-Stop Innovation</h3>
              <p class="fs-sm text-light opacity-70 mb-0">Our team is constantly developing new features that make the process of buying and selling a car simpler.</p>
            </div>
          </div>
        </div>
        <div class="col-md-2 d-none d-md-block">
          <div class="position-relative mx-auto h-100" style="max-width: 5rem; min-height: 26rem;">
            <div class="content-overlay pt-5" data-jarallax-element="100"><img class="pt-3 mt-5" src="img/car-finder/home/car.svg" alt="Car"></div>
            <div class="position-absolute top-0 start-50 translate-middle-x h-100 overflow-hidden"><img src="img/car-finder/home/road-line.svg" width="2" alt="Road line"></div>
          </div>
        </div>
        <div class="col-md-5 col-lg-4 pt-md-5 mt-md-3">
          <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-info-circle lead text-primary mt-1"></i>
            <div class="ps-3">
              <h3 class="h6 text-light mb-1">Valuable Insights</h3>
              <p class="fs-sm text-light opacity-70 mb-0">We provide free access to key info like dealer reviews, market value, price drops.</p>
            </div>
          </div>
          <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-users lead text-primary mt-1"></i>
            <div class="ps-3">
              <h3 class="h6 text-light mb-1">Consumer-First Mentality</h3>
              <p class="fs-sm text-light opacity-70 mb-0">We focus on building the most transparent, trustworthy experience for our users, and we’ve proven that works for dealers, too.</p>
            </div>
          </div>
          <div class="d-flex pb-4 pb-md-5 mb-2"><i class="fi-calculator lead text-primary mt-1"></i>
            <div class="ps-3">
              <h3 class="h6 text-light mb-1">Online Car Appraisal</h3>
              <p class="fs-sm text-light opacity-70 mb-0">Specify the parameters of your car to form its market value on the basis of similar cars on Finder.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CTA carousel-->
    <section class="container pt-4 pb-5 py-sm-5">
      <div class="tns-carousel-wrapper">
        <div class="tns-carousel-inner d-block d-md-flex" data-carousel-options="{&quot;controlsContainer&quot;: &quot;#external-controls&quot;, &quot;nav&quot;: false, &quot;gutter&quot;: 20, &quot;autoHeight&quot;: true}">
          <!-- Slide 1-->
          <div>
            <div class="card card-body p-sm-5 card-light h-100">
              <div class="row align-items-center py-3 py-sm-0">
                <div class="col-md-4 col-xl-3 mb-4 pb-3 mb-md-0 pb-md-0 text-center text-md-start">
                  <h2 class="text-light">Auto Market</h2>
                  <p class="fs-lg text-light opacity-70 pb-md-4">Choose the best for your car!</p><a class="btn btn-primary" href="car-finder-catalog-grid.html">Go to shop<i class="fi-chevron-right fs-sm ms-2"></i></a>
                </div>
                <div class="col-md-8 col-xl-9">
                  <div class="row row-cols-2 row-cols-lg-4 gy-4 gx-3 gx-sm-4"><a class="col text-light text-decoration-none" href="#"><img class="d-block mb-2 mx-auto" src="img/car-finder/categories/01.png" width="168" alt="Seat Covers">
                      <div class="fw-bold text-center pt-1">Seat Covers</div>
                    </a><a class="col text-light text-decoration-none" href="#"><img class="d-block mb-2 mx-auto" src="img/car-finder/categories/02.png" width="168" alt="Tires">
                      <div class="fw-bold text-center pt-1">Tires</div>
                    </a><a class="col text-light text-decoration-none" href="#"><img class="d-block mb-2 mx-auto" src="img/car-finder/categories/03.png" width="168" alt="Disks">
                      <div class="fw-bold text-center pt-1">Disks</div>
                    </a><a class="col text-light text-decoration-none" href="#"><img class="d-block mb-2 mx-auto" src="img/car-finder/categories/04.png" width="168" alt="Child Seats">
                      <div class="fw-bold text-center pt-1">Child Seats</div>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
          Slide 2
          <div>
            <div class="card card-body p-sm-5 card-light h-100">
              <div class="row align-items-center py-3 py-sm-0">
                <div class="col-md-6 mb-4 pb-3 mb-md-0 pb-md-0 text-center text-md-start">
                  <h2 class="text-light">Car sale in 24 hours</h2>
                  <p class="fs-lg text-light opacity-70 pb-md-4">Calculate your car's value, then choose how you want to sell.</p><a class="btn btn-primary" href="car-finder-sell-car.html">Sell my car<i class="fi-chevron-right fs-sm ms-2"></i></a>
                </div>
                <div class="col-md-6">
                  <div class="row row-cols-sm-3 row-cols-md-2 row-cols-lg-3 gy-4 gx-3 gx-sm-4">
                    <div class="col">
                      <div class="d-table bg-dark rounded-3 p-4 mx-auto mb-3"><img class="d-block m-sm-2" src="img/car-finder/icons/buyers.svg" width="56" alt="Vetted buyers"></div>
                      <div class="fw-bold text-center">Vetted buyers</div>
                    </div>
                    <div class="col">
                      <div class="d-table bg-dark rounded-3 p-4 mx-auto mb-3"><img class="d-block m-sm-2" src="img/car-finder/icons/tools.svg" width="56" alt="Smart tools"></div>
                      <div class="fw-bold text-center">Smart tools</div>
                    </div>
                    <div class="col">
                      <div class="d-table bg-dark rounded-3 p-4 mx-auto mb-3"><img class="d-block m-sm-2" src="img/car-finder/icons/handshake.svg" width="56" alt="Handshake"></div>
                      <div class="fw-bold text-center">The offer you deserve</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- External carousel controls-->
      <div class="tns-carousel-controls tns-carousel-light pt-4 pb-2" id="external-controls">
        <button class="me-3" type="button"><i class="fi-chevron-left"></i></button>
        <button type="button"><i class="fi-chevron-right"></i></button>
      </div>
      <!-- </section> -->

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
  <script src="js/main.js"></script>
  <script src="js/vechile_main.js"></script>
  <script src="js/theme.min.js"></script>
  <script type="text/javascript">
    var elem = document.getElementById('myAnimation');

    var pos = window.screen.width;

    clearInterval(id);
    var id = setInterval(() => {
      if (pos == 0 || pos == 900) {
        clearInterval(id);
        pos = window.screen.width
      } else {
        pos--;
        document.getElementById('pos').innerHTML = pos
        elem.style.left = pos + "px";
      }

    }, 1);
  </script>
  <?php include_once "includes/reactcdn.php"; ?>
</body>

<!-- Mirrored from finder.createx.studio/car-finder-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:14:46 GMT -->

</html>