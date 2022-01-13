
<section class="container pt-sm-1 pb-5 mb-md-4">
    <div class="d-sm-flex align-items-center justify-content-between mb-4 pb-sm-2">
        <h2 class="h3  mb-2 mb-sm-0" style="color:#0d3050">Top offers</h2><a class=" btn btn-link btn-light fw-normal px-0" href="#">View all offers<i class="fi-arrow-long-right fs-sm mt-0 ps-1 ms-2"></i></a>
    </div>
    <div class="row">
        <div class="col-lg-6" id="maintarget">
            <!-- Item-->
            
        </div>
        <div class="col-lg-6" id="suboffer">
            
            
            
        </div>
    </div>
</section>
<script type="text/javascript" src="./js/jquery-3.5.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var dataset="";
        var datasett="";
        $.ajax({
            
            url:'api/topoffer.php',
            method:'get',
            success:function(data){ 
                console.log('data',JSON.parse(data).data)
                console.log('data',JSON.parse(data).random)
                var real = JSON.parse(data).data;
                var topOffer = real.splice(0,1);
                var suboffer = real;
                var getCurrentUrl = location.pathname;
                topOffer.forEach((d)=>{
                    dataset = `
                                <div class="card card-light card-hover h-lg-100 mb-4 mb-lg-0" style="border:1px solid #d5d5d5">
                                    <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href="vechicles#${d.category.replace(" ","_")}"></a>

                                    <a href="vechiles#${d.category.replace(" ","_")}">
                                        <div>
                                            <img src="./admin/api/${d.image_url}" alt="Image">   
                                        </div>
                                    </a>

                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm  me-3" style="color:#0d3050;font-weight:bold">${d.sub_category_name}</span>
                                            <div class="form-check" style="color:#0d3050">
                                               
                                                <label class="form-check-label fs-sm" for="compare1"><a href="${getCurrentUrl}vechicles#${d.category.replace(/ /g, '_')}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}" class="text-danger">View More</a></label>
                                            </div>
                                        </div>
                                        <h3 class="h6 mb-1"><a class="nav-link-light  text-danger" href="#">${d.vechicle_name}</a></h3>

                                        <div class="fs-sm  opacity-70" style="color:#0d3050"><i class="fi-map-pin me-1" style="color:#ff0000"></i>Boulos,Nigeria</div>
                                    </div>
                                    <div class="card-footer border-0 pt-0">
                                        <div class="border-top border-light pt-3">
                                            <div class="row g-2">
                                                <div class="col me-sm-1">
                                                    <div class="rounded text-center w-100 h-100 p-2" style="background-color:#0d3050">
                                                        <a class="nav-link-light" href="${getCurrentUrl}vechicles#${d.category.replace(/ /g, "_")}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">
                                                                <i class="d-block h4 text-light mb-0 mx-center"><img src="img/logo/gear.png" alt="" srcset="" style="height:30px"></i><span class="fs-xs text-light"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col me-sm-1">
                                                    <div class="rounded text-center w-100 h-100 p-2" style="background-color:#0d3050">
                                                        <a class="nav-link-light" href="${getCurrentUrl}vechicles#${d.category.replace(/ /g, "_")}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">
                                                            <i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    
                                                    <div class="rounded text-center w-100 h-100 p-2" style="background-color:#0d3050">
                                                    <a class="nav-link-light" href="${getCurrentUrl}vechicles#${d.category.replace(/ /g, "_")}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">
                                                        <i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light"></span>
                                                    </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>`
               })
               
                
               suboffer.forEach((d)=>{
                   datasett += `
                                <div class="card card-light card-hover card-horizontal mb-4" style="border:1px solid #d5d5d5">
                                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href="vechicles#${d.category.replace(" ","_")}"></a>
                                    <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">${d.category}</span></div>
                                    <div class="content-overlay end-0 top-0 pt-3 pe-3">
                                        
                                    </div>
                                    <div class="position-absolute top-0 h-100">
                                        <a class="" href="vechicles#${d.category.replace(" ","_")}">
                                            <div><img src="./admin/api/${d.image_url}"  alt="Image"></div>
                                        </a>
                                        
                                        
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm me-3" style="color:#0d3050;font-weight:bold">${d.sub_category_name}</span>
                                        <div class="form-check " style="color:#0d3050">
                                            
                                            <label class="form-check-label fs-sm" for="compare2"><a href="vechicles#TWO_WHEELERS" class="text-danger">View More</a></label>
                                        </div>
                                    </div>
                                    <h3 class="h6 mb-1"><a class="nav-link-light text-danger" href="#">${d.vechicle_name}</a></h3>

                                    <div class="fs-sm  opacity-70" style="color:#0d3050"><i class="fi-map-pin me-1" style="color:#ff0000"></i>Boulos,Nigeria</div>
                                    <div class="border-top border-light mt-3 pt-3">
                                            <div class="row g-2">
                                                <div class="col me-sm-1">
                                                    <div class="rounded text-center w-100 h-100 p-2" style="background-color:#0d3050">
                                                        <a class="nav-link-light" href="${getCurrentUrl}vechicles#${d.category.replace(/ /g, "_")}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">
                                                                <i class="d-block h4 text-light mb-0 mx-center"><img src="img/logo/gear.png" alt="" srcset="" style="height:30px"></i><span class="fs-xs text-light"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col me-sm-1">
                                                    <div class="rounded text-center w-100 h-100 p-2" style="background-color:#0d3050">
                                                        <a class="nav-link-light" href="${getCurrentUrl}vechicles#${d.category.replace(/ /g, "_")}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">
                                                            <i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="rounded text-center w-100 h-100 p-2" style="background-color:#0d3050">
                                                        <a class="nav-link-light" href="${getCurrentUrl}vechicles#${d.category.replace(/ /g, "_")}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">
                                                            <i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                   `
               })


                $("#maintarget").html(dataset);
                $("#suboffer").html(datasett);
            },
            error:function(err){
                console.log(err)
            }
         })
       
    })
  </script>