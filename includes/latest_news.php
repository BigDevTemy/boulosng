 <!-- Latest news (Blog)-->
 <section class="container pb-4 pb-sm-5 mb-2 mb-md-4" style="background-color:#0d3050">
     <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-sm-2">
         <h2 class="h3 text-light mb-2 mb-sm-0">Latest news</h2><a class="btn btn-link btn-light fw-normal px-0" href="newsletter">View More<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
     </div>
     <div class="tns-carousel-wrapper tns-nav-outside tns-carousel-light">
        <div id="latest_news" style="display:flex;flex-direction:row;justify-content:space-between">
             
             
             
        </div>
     </div>
 </section>
 <script type="text/javascript" src="./js/jquery-3.5.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var dataset="";
        
        $.ajax({
            
            url:'api/latestnews.php',
            method:'get',
            success:function(data){ 
                console.log(data)
                JSON.parse(data).data.forEach((d)=>{
                    dataset += `
                                    <div style="padding:10px">
                                        <article><a class=" d-block rounded-3 overflow-hidden" href="news.php?id=${d.id}"><img class="d-block" src="./admin/api/${d.newsletter_image}" style="width:624px;height:300px" alt="Image"></a>
                                            <div class="py-3"><a class="fs-xs text-uppercase text-danger text-decoration-none" href="news.php?id=${d.id}">${d.newsletter_title}</a>
                                                <h3 class=" fs-base pt-1 text-light"><a class="nav-link" href="news.php?id=${d.id}">${d.newsletter_title}</a></h3><a class="d-flex align-items-center text-decoration-none" href="#">
                                                    <div class="ps-2">
                                                        <h6 class="fs-sm  lh-base text-light mb-1" style="color:#0d3050">Admin</h6>
                                                        <div class="d-flex fs-xs text-light opacity-60"><span class="me-2 pe-1"><i class="fi-calendar-alt me-1"></i>${d.created_at}</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </article>
                                    </div>
                                `
                                
               })
               
                $("#latest_news").html(dataset);
            },
            error:function(err){
                console.log(err)
            }
         })
       
    })
  </script>