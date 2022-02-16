<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from finder.createx.studio/car-finder-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:13:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<!-- =======INCLUDE HEAD TAG ====== -->
<?php include_once "includes/head.php"; ?>
<?php include_once "connections/conn.php"; ?>
<!-- Body-->

<body class="bg-light"  >
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
    <section class="bg-top-center bg-repeat-0 pt-5 bg-dark" style="background-image: url(img/bikes/aftersales-service.png); background-size: cover; background-position:center; background-repeat:no-repeat; height:530px">
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
    
    <section class='section2'>
      <div class="after-sales-container  mt-5" style="width:80%; margin:auto">
        <div class="row">
          <div class="col-sm-12 col-lg-6 mb-5">

            <div class="card " style='box-shadow: 0 15px 20px  rgba(0 0 0 / 50%)'>
              <div class="row">
                <div class="col-md-6">
                  <img class=" img-fluid" src="img/car-finder/after-sales/motorcycle.png" alt="Card image cap">
                </div>

                  <div class="col-md-6">
                    <div class="card-body d-flex flex-column text-center">
                      <i class="fas fa-truck mb-3 fa-2x"></i>
                      <h6 style="font-size:16px">MOTORCYCLE</h6>
                      <button id="motorcycle" style="background-color:#e12220; color:#fff; padding:.4rem" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Our Network &nbsp;<span><i class="fas fa-hand-point-right"></i></span></button>

                      <div class="offcanvas offcanvas-end" style="width:1000px" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                          <h5 id="offcanvasRightLabel">Our Network</h5>
                          <button  type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8070159.95304742!2d4.1766391510156495!3d9.017356009356151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sng!4v1636076291987!5m2!1sen!2sng" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                          <!-- <div id="map" style="height: 100%;width: 100%;background-color: grey;"></div> -->
                          <!-- <div id="demoMap" style="height:250px"></div> -->
                          <div id="map" style="width: 100vw; height: 100vh;"></div>
                        
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-6 mb-5">
            <div class="card" style=" box-shadow: 0 15px 20px  rgba(0 0 0 / 50%);">
              <div class="row">
              <div class="col-md-6">
                  <img class=" img-fluid" src="img/car-finder/after-sales/outboard.jpg" alt="Card image cap" style="height:100%; width:fit-content">
                </div>
                <div class="col-md-6">
                  <div class="card-body d-flex flex-column text-center">
                    <i class="fas fa-cogs mb-3 fa-2x"></i>
                    <h6 style="font-size:16px">OUTBOARD ENGINES</h6>
                    <button id="outboard" style="background-color:#e12220; color:#fff; padding:.4rem" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Our Network &nbsp;<span><i class="fas fa-hand-point-right"></i></span></button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel"> Our Network</h5>
                        <button  type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                      <div id="map_canvas" style="width: 100vw; height: 100vh;"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end md 6 of card -->
                
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-lg-6 mb-5">

            <div class="card" style=" box-shadow: 0 15px 20px  rgba(0 0 0 / 50%);">
              <div class="row">
                <div class="col-md-6">
                  <img class=" img-fluid" src="img/car-finder/after-sales/tricycle.png" alt="Card image cap" style="height:100%; width:fit-content">
                </div>

                <div class="col-md-6">
                  <div class="card-body d-flex flex-column text-center">
                    <i class="fas fa-store-alt mb-3 fa-2x"></i>
                    <h6 style="font-size:16px">TRICYCLE</h6>
                    <button  id="dealer_outlet" style="background-color:#e12220; color:#fff; padding:.4rem" class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Our Network &nbsp;<span><i class="fas fa-hand-point-right"></i></span></button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Location</h5>
                        <button  type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>

            <div class="col-sm-12 col-lg-6 mb-5">

            <div class="card" style=" box-shadow: 0 15px 20px  rgba(0 0 0 / 50%);">
              <div class="row">
                <div class="col-md-6">
                  <img class=" img-fluid" src="img/car-finder/after-sales/bolus-truck.jpg" alt="Card image cap" style="height:100%; width:fit-content">
                </div>

                <div class="col-md-6">
                  <div class="card-body d-flex flex-column text-center">
                    <i class="fas fa-store-alt mb-3 fa-2x"></i>
                    <h6 style="font-size:16px">FOUR WHEELERS</h6>
                    <button  id="dealer_outlet" style="background-color:#e12220; color:#fff; padding:.4rem" class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Our Network &nbsp;<span><i class="fas fa-hand-point-right"></i></span></button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Location</h5>
                        <button  type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>


          <div class="col-sm-12 col-lg-6 mb-5">
            <div class="card" style=" box-shadow: 0 15px 20px  rgba(0 0 0 / 50%);">
              <div class="row">

              <div class="col-md-6">
                  <img class=" img-fluid" src="img/car-finder/after-sales/mechanic.jpg" alt="Card image cap" style="height:100%; width:fit-content">
                </div>
                <div class="col-md-6">
                  <div class="card-body d-flex flex-column text-center">
                    <i class="fas fa-tools mb-3 fa-2x"></i>
                    <h6 style="font-size:16px">COMPETENT MECHANICS</h6>
                    <button id="competent_mechanics" style="background-color:#e12220; color:#fff; padding:.4rem" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Our Network &nbsp;<span><i class="fas fa-hand-point-right"></i></span></button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Our Network</h5>
                        <button  type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                     
                      </div>  
                    </div>
                  </div>
                </div>
                <!-- end md 6 of card -->
                
              </div>
            </div>
          </div>



          <div class="col-sm-12 col-lg-6 mb-5">

            <div class="card" style=" box-shadow: 0 15px 20px  rgba(0 0 0 / 50%);">
              <div class="row">
                <div class="col-md-6">
                  <img class=" img-fluid" src="img/car-finder/after-sales/dealer_outlet.jpg" alt="Card image cap" style="height:100%; width:fit-content">
                </div>

                <div class="col-md-6">
                  <div class="card-body d-flex flex-column text-center">
                    <i class="fas fa-store-alt mb-3 fa-2x"></i>
                    <h6 style="font-size:16px">DEALER OUTLET</h6>
                    <button  id="dealer_outlet" style="background-color:#e12220; color:#fff; padding:.4rem" class="btn " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Our Network &nbsp;<span><i class="fas fa-hand-point-right"></i></span></button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                      <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Location</h5>
                        <button  type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- where cards end -->
        </div>
      </div>
      </div>

    </section>


  </main>
  <!-- Footer-->
  <?php include_once "includes/footer.php"; ?>


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
  <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
	<!-- <script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script> -->
  <!-- <script src="OpenLayers-2.13.1/OpenLayers.js"></script> -->
  <link rel="stylesheet" href="leaflet/leaflet.css" /> 
   <script src="leaflet/leaflet.js"></script>
   <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="scripts/index.js"></script>
  
<!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-2rJ7S913RRzptTaG5C3WJQVyAMYjlts&callback=initMap">
</script> -->
<script>
  $(document).ready(function(){

        

    $("#dealer_outlet").on('click',function(e){
      var dealers = [
            [ 12.1704057, 6.659996296, "Zamfara" ],
            [ 11.74899608, 11.96600457, "Yobe" ],
            [ 7.870409769, 9.780012572, "Taraba" ],
            [ 13.06001548, 5.240031289, "Sokoto" ],
            [ 9.929973978, 7.010000772, "Rivers" ],
            [ 7.970016092, 3.590002806, "Oyo" ],
            [ 7.629959329, 4.179992634, "Osun" ],
            [ 7.250395934, 5.199982054, "Ondo" ],
            [ 7.160427265, 3.350017455, "Ogun" ],
            [ 12.988244, 7.616925, "Katsina" ],
            [ 11.866396, 8.526006, "Kano" ],
            [ 10.566519, 7.427861, "Kaduna" ],
            [ 5.489274, 7.021177, "Imo" ],
            // [ 6.383456, 5.793245, "Delta" ],
            [ 6.007608, 8.662970 , "Cross River" ],
            [ 9.925470, 5.739967, "Niger" ],
            [ 8.490423603, 8.5200378, "Nassarawa" ],
            [ 7.800388203, 6.739939737, "Kogi" ],
            [ 12.45041445, 4.199939737, "Kebbi" ],
            [ 11.7991891, 9.350334607, "Jigawa" ],
            [ 10.29044293, 11.16995357, "Gombe" ],
            [ 9.083333149, 7.533328002, "FCT" ],
            [ 5.519582, 7.560565, "Abia" ],
            [ 6.867034321, 12.461731, "Adamawa" ],
            [ 9.302872, 7.383362995, "Enugu" ],
            [ 7.630372741, 5.219980834, "Ekiti" ],
            [ 6.340477314, 5.620008096, "Edo" ],
            [ 6.316667, 8.100000, "Ebonyi" ],
            [ 4.867777, 5.898714, "Bayelsa" ],
            [ 10.62042279, 12.18999467, "Borno" ],
            [ 7.190399596, 8.129984089, "Benue" ],
            [ 11.68040977, 10.19001339, "Bauchi" ],
            [ 6.210433572, 7.06999711, "Anambra" ],
            [ 5.007996056, 7.849998524, "Akwa Ibom" ],
          ];
          
          init(dealers)
    })

    $("#competent_mechanics").on('click',function(){
      var mechanic = [
            [ 12.1704057, 6.659996296, "Zamfara" ],
            [ 11.74899608, 11.96600457, "Yobe" ],
            [ 7.870409769, 9.780012572, "Taraba" ],
            [ 13.06001548, 5.240031289, "Sokoto" ],
            [ 9.929973978, 7.010000772, "Rivers" ],
            [ 7.970016092, 3.590002806, "Oyo" ],
            [ 7.629959329, 4.179992634, "Osun" ],
            [ 7.250395934, 5.199982054, "Ondo" ],
            [ 7.160427265, 3.350017455, "Ogun" ],
            [ 12.988244, 7.616925, "Katsina" ],
            [ 11.866396, 8.526006, "Kano" ],
            [ 10.566519, 7.427861, "Kaduna" ],
            [ 5.489274, 7.021177, "Imo" ],
            // [ 6.383456, 5.793245, "Delta" ],
            [ 6.007608, 8.662970 , "Cross River" ],
            [ 9.925470, 5.739967, "Niger" ],
            [ 8.490423603, 8.5200378, "Nassarawa" ],
            [ 7.800388203, 6.739939737, "Kogi" ],
            [ 12.45041445, 4.199939737, "Kebbi" ],
            [ 11.7991891, 9.350334607, "Jigawa" ],
            [ 10.29044293, 11.16995357, "Gombe" ],
            [ 9.083333149, 7.533328002, "FCT" ],
            [ 5.519582, 7.560565, "Abia" ],
            [ 6.867034321, 12.461731, "Adamawa" ],
            [ 9.302872, 7.383362995, "Enugu" ],
            [ 7.630372741, 5.219980834, "Ekiti" ],
            [ 6.340477314, 5.620008096, "Edo" ],
            [ 6.316667, 8.100000, "Ebonyi" ],
            [ 4.867777, 5.898714, "Bayelsa" ],
            [ 10.62042279, 12.18999467, "Borno" ],
            [ 7.190399596, 8.129984089, "Benue" ],
            [ 11.68040977, 10.19001339, "Bauchi" ],
            [ 6.210433572, 7.06999711, "Anambra" ],
            [ 5.007996056, 7.849998524, "Akwa Ibom" ],
          ];
      
      init(mechanic)
    })

    $("#outboard").on('click',function(){
      var outboard = [
            [ 6.007608, 8.662970 , "Cross River" ],
            [ 6.540502, 3.314178, "Lagos" ],
            [ 4.818451, 6.966769, "Rivers" ],
            [ 6.383456, 5.793245, "Delta" ],
          ];
          
      init(outboard);
    })

    $("#motorcycle").on('click',function(){
      var motorcycle = [
            [ 5.519582, 7.560565, "Abia" ],
            [ 9.302872, 12.461731, "Adamawa" ],
            [ 4.818451, 6.966769, "Rivers" ],
            [ 7.138960, 3.362070, "Ogun" ],
            [ 9.925470, 5.739967, "Niger" ],
            [ 6.540502, 3.314178, "Lagos" ],
            [ 9.193450, 4.336444, "Kwara" ],
            [ 12.988244, 7.616925, "Katsina" ],
            [ 11.866396, 8.526006, "Kano" ],
            [ 10.566519, 7.427861, "Kaduna" ],
            [ 5.489274, 7.021177, "Imo" ],
            [ 5.551578, 5.637424, "Edo" ],
            [ 6.383456, 5.793245, "Delta" ],
            [ 6.007608, 8.662970 , "Cross River" ],
            [ 4.934849, 7.811093, "Akwa Ibom" ],

         ];
         
      init(motorcycle)
    })


    

    function init(markers) {

     
      // switch(check) {
      //   case 'MOTORCYCLE':
      //     console.log(check)
      //     var map = new L.Map('map');
      //     break;
      //   case 'DEALER':
      //     console.log(check)
      //     var map = new L.Map('map_dealer');
      //     // code block
      //     break;
      //     case 'OUTBOARD':
      //       console.log(check)
      //     var map = new L.Map('map_outboard');
      //     // code block
      //     break;
      //     case 'MECHANICS':
      //       console.log(check)
      //     var map = new L.Map('map_mechanic');

      //   default:
      //     // code block
      // }
        // if(map != undefined || map != null){
        //     map.remove();
        //   $("#map").html("");
        //   console.log('i am here')
    
        // }
        // else{
          
        // }
        var container = L.DomUtil.get('map');
        if(container != null){
        container._leaflet_id = null;
        }
        var map = new L.Map('map');
          // map.off();
          // map.remove();
          map.invalidateSize();
           map.scrollWheelZoom.disable();
          map.on('focus', () => { map.scrollWheelZoom.enable(); });
          map.on('blur', () => { map.scrollWheelZoom.disable(); });
          
         
      	 L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 6
         }).addTo(map);
         map.attributionControl.setPrefix(''); // Don't show the 'Powered by Leaflet' text.

         var nigeria = new L.LatLng(9.618508,7.884950); 
         map.setView(nigeria, 10);
        //  var markers = [
        //     [ 5.519582, 7.560565, "Abia" ],
        //     [ 9.302872, 12.461731, "Adamawa" ],
        //     [ 4.934849, 7.811093, "Bauchi" ] 
        //  ];
         
         //Loop through the markers array
         for (var i=0; i<markers.length; i++) {
           
            var lon = markers[i][0];
            var lat = markers[i][1];
            var popupText = markers[i][2];
            
             var markerLocation = new L.LatLng(lat, lon);
             var marker = new L.Marker(markerLocation);
             map.addLayer(marker);
         
             marker.bindPopup(popupText);
         
         }

      }

  })

</script>
<script>
  

    
  

    
 
  

      // init();

  
    // var map;
    // var mapLat = 9.618508;
		// var mapLng = 7.884950;
    // var mapDefaultZoom = 6;
    
    // function initialize_map() {
    //   map = new ol.Map({
    //     target: "map",
        
    //     layers: [
    //         new ol.layer.Tile({
    //             source: new ol.source.OSM({
    //                   // url: "https://maps.wikimedia.org/osm-intl/{z}/{x}/{y}.png"
    //                  url:"https://a.tile.openstreetmap.org/{z}/{x}/{y}.png"
    //             })
    //         })
    //     ],
    //     view: new ol.View({
    //         center: ol.proj.fromLonLat([mapLng, mapLat]),
    //         zoom: mapDefaultZoom
    //     })
    //   });
    // }

    // function add_map_point(lat, lng) {
    //   var vectorLayer = new ol.layer.Vector({
    //     source:new ol.source.Vector({
    //       features: [new ol.Feature({
    //             geometry: new ol.geom.Point(ol.proj.transform([parseFloat(lng), parseFloat(lat)], 'EPSG:4326', 'EPSG:3857')),
    //         })]
    //     }),
    //     style: new ol.style.Style({
    //       image: new ol.style.Icon({
    //         anchor: [0.5, 0.5],
    //         anchorXUnits: "fraction",
    //         anchorYUnits: "fraction",
    //         src: "https://upload.wikimedia.org/wikipedia/commons/e/ec/RedDot.svg"
    //       })
    //     })
    //   });

    //   map.addLayer(vectorLayer); 
    // }

    // initialize_map();
    // add_map_point(-33.8688, 151.2093)
    

    // var lat            = 9.618508;
    // var lon            = 7.884950;
    // var zoom           = 5;

    // var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
    // var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
    // var position       = new OpenLayers.LonLat(lon, lat).transform( fromProjection, toProjection);

    // map = new OpenLayers.Map("demoMap");
    // var mapnik   = new OpenLayers.Layer.OSM();
    // map.addLayer(mapnik);

    // var markers = new OpenLayers.Layer.Markers( "Markers" );
    // map.addLayer(markers);
    // markers.addMarker(new OpenLayers.Marker(position));

    // map.setCenter(position, zoom);

//   var fromProjection = new OpenLayers.Projection("EPSG:4326"); // transform from WGS 1984
//       var toProjection = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
//       var extent = new OpenLayers.Bounds(-1.32,51.71,-1.18,51.80).transform(fromProjection,toProjection);
//       function init() {
//         var options = {
//           restrictedExtent : extent,
//           controls: [
//             new OpenLayers.Control.Navigation(),
//             new OpenLayers.Control.PanZoomBar(),
//             new OpenLayers.Control.Attribution()
//           ]
//         };
//         map = new OpenLayers.Map("demoMap", options);
//         var newLayer = new OpenLayers.Layer.OSM(
//           "New Layer", 
//           "URL_TO_TILES/${z}/${x}/${y}.png", 
//           {zoomOffset: 13, resolutions: [19.1092570678711,9.55462853393555,4.77731426696777,2.38865713348389]}
//         );
//         map.addLayer(newLayer);
//         map.setCenter(new OpenLayers.LonLat(-1.25,51.75).transform(fromProjection,toProjection), 0); // 0=relative zoom level
//       }

// init();


    // map = new OpenLayers.Map("demoMap");
    // map.addLayer(new OpenLayers.Layer.OSM());
    // map.zoomToMaxExtent();


    // function init() {
    //     map = new OpenLayers.Map("demoMap");
    //     var mapnik         = new OpenLayers.Layer.OSM();
    //     var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
    //     var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
    //     var position       = new OpenLayers.LonLat(13.41,52.52).transform( fromProjection, toProjection);
    //     var zoom           = 15; 

    //     map.addLayer(mapnik);
    //     map.setCenter(position, zoom );
    // }


    
    // init();

// function initMap() {
//   var center = {lat: 9.618508, lng: 7.884950};
//   var locations = [
//     ['Abia',   5.519582, 7.560565],
//     ['Adamawa', 9.302872, 12.461731],
    
//   ];
// var map = new google.maps.Map(document.getElementById('map'), {
//     zoom: 6,
//     center: center
//   });
// var infowindow =  new google.maps.InfoWindow({});
// var marker, count;
// for (count = 0; count < locations.length; count++) {
//     marker = new google.maps.Marker({
//       position: new google.maps.LatLng(locations[count][1], locations[count][2]),
//       map: map,
//       title: locations[count][0]
//     });
// google.maps.event.addListener(marker, 'click', (function (marker, count) {
//       return function () {
//         infowindow.setContent(locations[count][0]);
//         infowindow.open(map, marker);
//       }
//     })(marker, count));
//   }
// }



//   function initMap() {
//   var center = {lat: 34.024212, lng: -118.496475};
//   var map = new google.maps.Map(document.getElementById('map'), {
//     zoom: 10,
//     center: center
//   });
//   var marker = new google.maps.Marker({
//     position: center,
//     map: map
//   });
//   // var locations = [
//   //   ['Los Angeles', 34.052235, -118.243683],
//   //   ['Santa Monica', 34.024212, -118.496475],
//   //   ['Redondo Beach', 33.849182, -118.388405],
//   //   ['Newport Beach', 33.628342, -117.927933],
//   //   ['Long Beach', 33.770050, -118.193739]
//   // ];

//   //   var infowindow =  new google.maps.InfoWindow({});
//   //   var marker, count;
//   //   for (count = 0; count < locations.length; count++) {
//   //       marker = new google.maps.Marker({
//   //         position: new google.maps.LatLng(locations[count][1], locations[count][2]),
//   //         map: map,
//   //         title: locations[count][0]
//   //       });
//   //   google.maps.event.addListener(marker, 'click', (function (marker, count) {
//   //         return function () {
//   //           infowindow.setContent(locations[count][0]);
//   //           infowindow.open(map, marker);
//   //         }
//   //       })(marker, count));
//   //     }
// }

</script>
</body>

<!-- Mirrored from finder.createx.studio/car-finder-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Aug 2021 15:14:46 GMT -->

</html>