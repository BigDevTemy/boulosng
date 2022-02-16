<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from finder.createx.studio/car-finder-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:13:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- JavaScript Bundle with Popper -->
  <!-- CSS only -->



<!-- =======INCLUDE HEAD TAG ====== -->
<?php include_once "includes/head.php"; ?>
<?php include_once "connections/conn.php"; ?>
<!-- Body-->
<style>
    .preloaderDiv{
        display:flex;
        height:100vh;
        justify-content:center;
        align-items:center;
       
    }
</style>
<body>
    <!-- Google Tag Manager (noscript)-->
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
   
    <main class="page-wrapper">
     
         <div class="preloaderDiv" id="loader">
            <div class="spinner-border text-info" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
         
        
           
        <div id="" class="mainCover" > 
            <div id="displayInner"></div>
            <div class="sidebar close">
                <div class="logo-details">
                    <!-- <i class='bx bxl-meta'></i> -->
                   <a href="/boulos_ng" style="text-decoration:none"> <span class="logo_name">Our Products</span></a>
                </div>
                    <ul class="nav-links">
                        <!-- <li class="active">
                            <a href="#">
                                <i class='bx bx-cycling'></i>
                                <span class="link-name  ">Jincheng JC-200-18</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bx-cycling'></i>
                                <span class="link-name">Jincheng JC-110-19</span>
                            </a>
                        </li> -->
                        <li class="active">
                            <a href="#">
                                <i class='bx bx-cycling'></i>
                                <span class="link-name">Suzuki DR-200-650</span>
                            </a>
                        </li>
                        <li>
                            <div class="icon-link">
                                <a href="#">
                                    <i class='bx bx-cycling'></i>
                                    <span class="link-name dropdown">Jincheng</span>
                                    
                                </a>
                                <i class='bx bx-chevron-down'></i>
                            </div>
                            <ul class="sub-menu">
                                
                                <li class="">
                                    <a href="#" class="dropdown sub-link-name">Jincheng JC-200-18</a>
                                </li>
                                <li class="">
                                    <a href="#"  class="dropdown sub-link-name">Jincheng JC-110-19</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <div class="icon-link">
                                <a href="#">
                                    <i class='bx bx-cycling'></i>
                                    <span class="link-name dropdown">Haojue</span>
                                    
                                </a>
                                <i class='bx bx-chevron-down'></i>
                            </div>
                            <ul class="sub-menu">
                                
                                <li class="">
                                    <a href="#" class="dropdown sub-link-name">Haojue Lucky</a>
                                </li>
                                <li class="">
                                    <a href="#"  class="dropdown sub-link-name">Haojue Elegant</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <div class="icon-link">
                                <a href="#">
                                    <i class='bx bx-cycling'></i>
                                    <span class="link-name dropdown">Zaki</span>
                                    
                                </a>
                                <i class='bx bx-chevron-down'></i>
                            </div>
                            <ul class="sub-menu">
                                <!-- <li>
                                    <a href="#" class="link-name">Haojue</a>
                                </li> -->
                                <li>
                                    <a href="#" class="dropdown sub-link-name">Zaki 150 cc</a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown sub-link-name">Zaki 200 cc</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class='bx bx-cycling'></i>
                                <span class="link-name">Suzuki Intruder</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <i class='bx bx-cycling'></i>
                                <span class="link-name">Suzuki DR-200-650</span>
                            </a>
                        </li> -->
                        <li>
                            <a href="#">
                                <i class='bx bx-bus'></i>
                                <span class="link-name">Super Carry Van</span>
                            </a>
                        </li>
                        <div style="padding:10px">
                            <a href="/boulos_ng"> <img src="./virtual_asset/images/bouloswhite.png"/></a>
                        </div>
                    </ul>
                    
                </div>
                 
                 
            

            <div class="myClass" id="element">
                    <div id="sideLeft">
                     
                    </div>
                    <div id="main">
                            
                    </div>
                    <div id="sideRight">
                        
                    </div>

            </div>
        </div>
       
       

        
        
    </main>
    <!-- Footer-->
    
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fi-chevron-up"> </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <link href= "virtual_asset/style.css" rel="stylesheet" />
    <link href= "virtual_asset/sidebar.css" rel="stylesheet" />
    
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="vendor/jarallax/dist/jarallax-element.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
    <!-- Load our React component. -->
    <script src="js/style.css"></script>
    <script src="js/main.js"></script>
    <script src="virtual_asset/js/nav.js"></script>
    <script src="virtual_asset/js/cover.js"></script>
    <script src="virtual_asset/js/index.js"></script>
    

    <?php include_once "includes/reactcdn.php"; ?>

    <script>
        window.addEventListener('load', function() {
            var x  =  document.getElementById('loader');
            x.classList.add('d-none');
            var nav = document.querySelector('.sidebar').children[1].children[0].children[0];
            
            var bikename = nav.children[1].textContent.replace(/ /g, '').toLowerCase()
            console.log('SidebAr',bikename)
            loadImage(bikename);
            // loadImage('haojueblue');
        })

      
       
        
    </script>
</body>

</html>