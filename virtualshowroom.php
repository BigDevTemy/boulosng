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

        <div style="width:100%; height:100vh;background:#f8f9fe;padding-top:100px;text-align:center">
            <h3>Virtual Show Room</h3>
            <div id="displayInner"></div>
                <div id="main" class="mainCover" > 
           
            </div>
        </div>
        


        
    </main>
    <!-- Footer-->
    
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fi-chevron-up"> </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <link href= "virtual_asset/style.css" rel="stylesheet" />
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
    <script src="virtual_asset/js/index.js"></script>

    <?php include_once "includes/reactcdn.php"; ?>

    <script>
        loadImage();
    </script>
</body>

</html>