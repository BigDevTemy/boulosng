<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from finder.createx.studio/car-finder-blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:18:13 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<!-- =======INCLUDE HEAD TAG ====== -->
<?php include_once "includes/head.php"; ?>
<?php include_once "connections/conn.php"; ?>
<!-- Body-->

<body class="bg-dark fixed-bottom-btn">
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
    <main class="page-wrapper" >
        <!-- Including the Navbar -->
        <?php include_once "includes/navbar.php"; ?>
        <!-- Page content-->

        <div class="container bg-light pt-5 pb-lg-4 my-5" style="min-height:50vh;height:100%;">
           <div style="text-align:center;width:100%;padding: 40px; " id="result"> 
           <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="newsletter">Back</a></li>
                    <li class="breadcrumb-item active" aria-current="page" id="breadcrumb_title"></li>
                </ol>
            </nav>
                <h3 style="color:#0d3050" id="title"></h3>
                <div id="banner"></div>
                <div id="body" style="text-align:justify;margin-top:20px"></div>
            </div>
           
            
            
        </div>
    </main>
    <!-- Footer-->
    <!-- Footer-->

    <?php include_once "includes/footer.php";
    ?>
    <!-- Sidebar toggle button (mobile)-->
    <button class="btn btn-primary btn-sm w-100 rounded-0 fixed-bottom d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#blog-sidebar"><i class="fi-sidebar-right me-2"></i>Sidebar</button>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fi-chevron-up"> </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="vendor/lg-video.js/dist/lg-video.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
</body>
<script type="text/javascript" src="./js/jquery-3.5.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var url = document.location.href.split('=');
        
        var dataset="";
        
        $.ajax({
            
            url:'api/getsinglenews.php',
            method:'get',
            beforesend:function(){
                document.getElementById('result').innerHTML="<h2>Please Wait</h2>"
            },
            data:{id:url[1]},
            success:function(data){ 
                
               $("#breadcrumb_title").html(JSON.parse(data).data.newsletter_title)
                $("#title").html(JSON.parse(data).data.newsletter_title);
                $("#banner").html(`<img src="./admin/api/${JSON.parse(data).data.newsletter_image}"/>`);
                $("#body").html(JSON.parse(data).data.newsletter_body);
            },
            error:function(err){
                console.log(err)
            }
         })
       
    })
  </script>

</html>