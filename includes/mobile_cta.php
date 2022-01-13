 <!-- Mobile app CTA-->
 <section class="container pb-3 pb-sm-4 pb-md-5 cta__aboutus_container" style="background-color:#0d3050">
     <?php
        $sql = "SELECT * FROM about_us_page_sections";
        $query_sql = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($query_sql)) {
            extract($row);
        };

        ?>
     <div class="row align-items-center pb-5">
         <div class="col-md-7 col-lg-6 col-xl-5 offset-xl-1 text-center text-md-start mb-4 mb-md-0">
             <h2 class="text-light mb-4"><?php echo $title ?></h2>
             <p class="fs-lg text-light opacity-70 mb-md-5 cta__aboutus_text mt-4"><?php echo $description ?></p>

         </div>
         <div class="col-md-5 col-lg-6 mt-5"><img class="d-block mx-auto" src="img/car-finder/home/mobile-app.png" width="460" alt="Mobile App"></div>
     </div>
 </section>