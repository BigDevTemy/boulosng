function filterData(x){
    // $("#mybody").css('display','none')
    // $("nav").css('display','none')
    $("#mybody").hide();
    $("nav").hide();
    document.getElementsByName('single').innerHTML="";
    var split = x.toString().split(',');
    // var vechicle_name = split[2].replace(/ + /g, "   ")
    var vechicle_name = split[2].split('+').join(" ");
    var category_name = split[0].replace("_"," ")
    var sub_category_name = split[1].split('+').join(" ");
    console.log(sub_category_name)
    $.ajax({
        url:'api/single.php',
        method:'post',
        data:{vechicle_name:vechicle_name,sub_category_name:sub_category_name},
        
        success:function(data){
            console.log(JSON.parse(data).related)
            if(JSON.parse(data).status){
               JSON.parse(data).data.forEach((d)=>{
                   var splitter =  d[4].split(',');
                   var content = $(`<div class="container  mb-md-4 py-5">
                    <!-- Breadcrumb-->
                    <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a href="/boulos_ng">Home</a></li>
                        <li class="breadcrumb-item"><a href="#${split[0]}">${category_name}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">${vechicle_name}</li>
                    </ol>
                    </nav>
                    <!-- Title + Sharing-->
                    <div class="d-sm-flex align-items-end align-items-md-center justify-content-between position-relative mb-4" style="z-index: 1025;">
                    <div class="me-3">
                        <h1 class="h2 text-light mb-md-0">${d[2]}</h1>
                        <div class="d-md-none">
                        <div class="d-flex align-items-center mb-3">
                            
                           
                        </div>
                        <div class="d-flex flex-wrap align-items-center text-light mb-2">
                           
                            
                        </div>
                        </div>
                    </div>
                    <div class="text-nowrap pt-3 pt-sm-0">
                        
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-7">
                        <!-- Gallery-->
                        <div class="tns-carousel-wrapper">
                        
                        <div>
                            <div><img class="rounded-3" src="./admin/api/${d[3]}" alt="Image"></div>
                            
                        </div>
                        </div>
                        <ul class="tns-thumbnails" id="thumbnails">
                        <li class="tns-thumbnail"><img src="./admin/api/${d[3]}" alt="Thumbnail"></li>
                        <li class="tns-thumbnail"><img src="./admin/api/${d[3]}" alt="Thumbnail"></li>
                        <li class="tns-thumbnail"><img src="./admin/api/${d[3]}" alt="Thumbnail"></li>
                        <li class="tns-thumbnail"><img src="./admin/api/${d[3]}" alt="Thumbnail"></li>
                       
                        
                        </ul>
                        <!-- Specs-->
                        <div class="py-3 mb-3">
                        <h2 class="h4 text-light mb-4">Specifications</h2>
                        <div class="row text-light">
                            <div class="col-sm-12 col-md-12 col-lg-12" >
                            <ul class="list-unstyled" id="spec">
                          

                                
                            </ul>
                            </div>
                            
                        </div>
                        </div>
                        <!-- Card with icon boxes-->
                        
                        <!-- Features-->
                   
                        
                        <!-- Description-->
                        <div class="pb-4 mb-3">
                        <h2 class="h4 text-light pt-4 mt-3">Product Overview</h2>
                        <p class="text-light opacity-70 mb-1">${d[5]}</p>
                        <div class="collapse" id="seeMoreDescription">
                            
                        </div>
                        <a class="collapse-label collapsed" href="#seeMoreDescription" data-bs-toggle="collapse" data-bs-label-collapsed="Show more" data-bs-label-expanded="Show less" role="button" aria-expanded="false" aria-controls="seeMoreDescription"></a>
                        </div>
                        <!-- Post meta-->
                        
                    </div>
                    <!-- Sidebar-->
                    <div class="col-md-5 pt-5 pt-md-0" style="margin-top: -6rem;">
                        <div class="sticky-top pt-5">
                        <div class="d-none d-md-block pt-5">
                            
                            <div class="d-flex align-items-center text-light pb-4 mb-2">
                            <div class="text-nowrap border-end border-light pe-3 me-3"><i class="fi-dashboard fs-lg opacity-70 me-2"></i><span class="align-middle">${category_name}</span></div>
                            <div class="text-nowrap"><i class="fi-map-pin fs-lg opacity-70 me-2"></i><span class="align-middle">Boulos, Nigeria</span></div>
                            </div>
                        </div>
                        <div class="card card-light card-body mb-4">
                            <div class="text-light mb-2">${sub_category_name}</div><a class="d-flex align-items-center text-decoration-none mb-3">
                            <div class="ps-2">
                                <h5 class="text-light mb-0">${d[2]}</h5><span class="star-rating"><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i><i class="star-rating-icon fi-star-filled active"></i></span><span class="fs-sm text-light opacity-70 align-middle ms-1">(5 reviews)</span>
                            </div></a>
                            <div class="pt-4 mt-2">
                            <button class="btn btn-outline-light btn-lg px-4 mb-3" type="button" style="background:#f23c49"><i class="fi-phone me-2"></i>09033864676</button><br><a class="btn btn-primary btn-lg" style="background:#f23c49" href="#send-mail" data-bs-toggle="collapse"><i class="fi-chat-left me-2"></i>Send message</a>
                            <div class="collapse" id="send-mail" >
                                <form class="needs-validation pt-2" novalidate>
                                <div class="mb-3">
                                    <textarea class="form-control form-control-light" rows="5" placeholder="Write your message" required></textarea>
                                    <div class="invalid-feedback">Please enter you message.</div>
                                </div>
                                <button class="btn btn-outline-primary" type="submit">Submit</button>
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="card card-body bg-transparent border-light">
                            <h5 class="text-light">Kindly Drop your Email for prompt notification on our newly arrived products:</h5>
                            <form class="form-group form-group-light mb-3">
                            <div class="input-group"><span class="input-group-text"> <i class="fi-mail"></i></span>
                                <input class="form-control" type="email" placeholder="Your email" required>
                            </div>
                            <button class="btn btn-primary" type="submit">Subscribe</button>
                            </form>
                            
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Related posts (Carousel)-->
                    <h2 class="h3 text-light pt-5 pb-3 mt-md-4">You may be interested in</h2>
                        <div style="display:flex;flex-direction:row;min-Height:10vh;padding:20px;flex-wrap:wrap;justify-content:space-between" id="myrelated">
                            
                            
                            
                        </div>
                </div>`)
                var datasett = ""
                var datarelated=""
                
                splitter.forEach((x)=>{
                    var cut = x.split(":");
                        datasett += `
                                
                                <li class="mb-4" style="display:flex;justify-content:space-between;width:90%;padding-left:40px;padding-right:40px;align-items:center"><strong>${cut[0]}</strong><span class="opacity-70 ms-1">${cut[1]}</span></li>
                                `
                    
                })
                var getCurrentUrl = location.pathname
                JSON.parse(data).related.forEach((d)=>{
                    datarelated += `
                                        <div class="card" style="width: 23rem;margin:10px">
                                            <img class="card-img-top" src="./admin/api/${d.image_url}" style="width:300px;height:250px;" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">${d.vechicle_name}</h5>
                                                <p class="card-text">${sub_category_name}</p>
                                                <a href="${getCurrentUrl}#${split[0]}/${sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}" class="btn btn-primary">View more</a>

                                            </div>
                                        </div>
                                    ` 
                    
                })
                
                $(content).find('#myrelated').append(datarelated);
                $(content).find('#spec').append(datasett);
                
                // $(content).find('#spec').append(`
                // <li class="mb-2"><strong>Manufacturing Year:</strong><span class="opacity-70 ms-1">2018</span></li>
                // <li class="mb-2"><strong>Mileage:</strong><span class="opacity-70 ms-1">25K miles</span></li>
                // <li class="mb-2"><strong>Body Type:</strong><span class="opacity-70 ms-1">Convertible</span></li>
                // <li class="mb-2"><strong>Drivetrain:</strong><span class="opacity-70 ms-1">Front Wheel Drive</span></li>
                // <li class="mb-2"><strong>Engine:</strong><span class="opacity-70 ms-1">2.5L Turbo 6 Cylinder</span></li>
                // <li class="mb-2"><strong>Transmission:</strong><span class="opacity-70 ms-1">7-Speed Shiftable Automatic</span></li>
                // `)
   
    $("#single").html(content)
               })
            }
            else{
                document.getElementsById('mybody').innerHTML = JSON.parse(data).data
            }
        },
        error:function(err){
            console.log(err)
        }
    })
    
    
}



