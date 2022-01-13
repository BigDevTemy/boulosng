<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from finder.createx.studio/car-finder-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:13:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<!-- =======INCLUDE HEAD TAG ====== -->
<?php include_once "includes/head.php"; ?>
<?php include_once "connections/conn.php"; ?>
<!-- Body-->

<body class="bg-light">
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

        <!-- ================TOP OFFERS =============================== -->
        <?php include_once "includes/top_offers.php"; ?>
        <!-- ================BRANDS =============================== -->

        <!-- ================FEATURES =============================== -->
        <?php include_once "includes/features.php"; ?>
        <!-- ================LATEST CARS =============================== -->
        <?php include_once "includes/latest_car.php"; ?>

        <!-- ================MOBILE CTA =============================== -->
        <?php include_once "includes/mobile_cta.php"; ?>





        <!-- ================CTA CAROUSEL =============================== -->
        <?php include_once "includes/cta_carousel.php";
        ?>
        <!-- ================LATEST NEWSL =============================== -->
        <?php include_once "includes/latest_news.php";
        ?>

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