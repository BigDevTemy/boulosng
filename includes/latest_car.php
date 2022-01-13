 <!-- Latest cars (carousel)-->
 <section class="container pt-sm-5 pt-4 pb-3">
     <div class="d-sm-flex align-items-center justify-content-between mb-3 mb-sm-4 pb-2">
         <h2 class="h3  mb-3 mb-sm-0" style="color:#0d3050;font-weight:bold">Latest bikes</h2>
         <div class="d-flex align-items-center">
             <ul class="nav nav-tabs nav-tabs-light fs-sm me-4 pe-2 mb-0">
                
             </ul><a class="btn btn-link btn-light fw-normal px-0" href="vechicles#TWO_WHEELERS">View all<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
         </div>
     </div>
     <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-carousel-light">
         <div id="latest-offer" style="display:flex;flex-direction:row;justify-content:space-between">
             
             
             
         </div>
     </div>
 </section>
 <script type="text/javascript" src="./js/jquery-3.5.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var dataset="";
        
        $.ajax({
            
            url:'api/topoffer.php',
            method:'get',
            success:function(data){ 
                JSON.parse(data).data.forEach((d)=>{
                    dataset += `
                        <div>
                            <div class="card card-light card-hover h-100" style="border:1px solid #d5d5d5;padding:10px">
                                <div class="card-img-top card-img-hover"><a class="img-overlay" href=""></a>
                                    
                                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                        
                                    </div><img src="./admin/api/${d.image_url}" alt="Image" style="height:250px">
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm me-3" style="color:#0d3050;font-weight:bold">${d.vechicle_name}</span>
                                        <div class="form-check " style="color:#0d3050">
                                            <!-- <input class="form-check-input" type="checkbox" id="compare4"> -->
                                            <label class="form-check-label fs-sm" for="compare4"><a href="vechicles#${d.category.replace(/ /g, '_')}" class="text-danger">View More</a></label>
                                        </div>
                                    </div>
                                    <h3 class="h6 mb-1"><a class="nav-link-light text-danger" href="#">${d.vechicle_name}</a></h3>

                                    <div class="fs-sm  opacity-70" style="color:#0d3050"><i class="fi-map-pin me-1" style="color:#ff0000"></i>Boulos,Nigeria</div>
                                </div>
                                <div class="card-footer border-0 pt-0">
                                    <div class="border-top  pt-3" style="border-top:1px solid #d5d5d5">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                                `
                                
               })
               
                $("#latest-offer").html(dataset);
            },
            error:function(err){
                console.log(err)
            }
         })
       
    })
  </script>