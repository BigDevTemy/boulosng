data=[];
document.querySelector('.linkCover').addEventListener('click',function(e){
    var x = document.querySelectorAll('.card-nav-link');
    for(var i=0;i<x.length;i++){
        if(x[i].classList.contains('active')){
            x[i].classList.remove('active')
        }
        else{
            e.target.classList.add('active') 
        }  
    }
    e.target.classList.add('active')
    loadComponent(document.location.href);
    
})

function groupByKey(array, key) {
    return array
      .reduce((hash, obj) => {
        if(obj[key] === undefined) return hash; 
        return Object.assign(hash, { [obj[key]]:( hash[obj[key]] || [] ).concat(obj)})
      }, {})
 }

function grabData(category){
    var dataset = "";
    var dataset_1="";
    var counter=0;
    $.ajax({
        url:'api/data.php',
        method:'post',
        data:{category:category},
        success:function(data){
            // console.log(JSON.parse(data).top_products)
            // return false;
            // var result = groupByKey(JSON.parse(data), 'sub_category_name');
            // var keys = Object.keys(result)
            JSON.parse(data).top_products.forEach((d) => {
              var getCurrentUrl = document.location.href
              counter++;
              dataset += `<div class="col-sm-6 mb-4">
                   
              <div class="card card-light card-hover h-100">
                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href="${getCurrentUrl}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}"></a>
                 
                  <div class="content-overlay end-0 top-0 pt-3 pe-3">
                    
                  </div>
                  <div  style="height: 250px;text-align:center;padding:10px"><img src="./admin/api/${d.image_url}" class="" alt="Image" /></div>
                </div>
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">${d.sub_category_name}</span>
                    
                  </div>
                  <h3 class="h6 mb-1"><a class="nav-link-light" href="${getCurrentUrl}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">${d.vechicle_name}</a></h3>
                  <div class="text-primary fw-bold mb-1"></div>
                  <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Lagos</div>
                </div>
                <div class="card-footer border-0 pt-0">
                  <div class="border-top border-light pt-3">
                   
                  </div>
                </div>
              </div>
            </div>`
                            
                
            });
           

                JSON.parse(data).result.forEach((d) => {
                  var getCurrentUrl = document.location.href
                  counter++;
                  dataset += `<div class="col-sm-6 mb-4">
                       
                  <div class="card card-light card-hover h-100">
                    <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href="${getCurrentUrl}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}"></a>
                     
                      <div class="content-overlay end-0 top-0 pt-3 pe-3">
                        
                      </div>
                      <div  style="height: 250px;text-align:center;padding:10px"><img src="./admin/api/${d.image_url}" class="" alt="Image" /></div>
                    </div>
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between pb-1"><span class="fs-sm text-light me-3">${d.sub_category_name}</span>
                        
                      </div>
                      <h3 class="h6 mb-1"><a class="nav-link-light" href="${getCurrentUrl}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">${d.vechicle_name}</a></h3>
                      <div class="text-primary fw-bold mb-1"></div>
                      <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Lagos</div>
                    </div>
                    <div class="card-footer border-0 pt-0">
                      <div class="border-top border-light pt-3">
                       
                      </div>
                    </div>
                  </div>
                </div>`
                                
                    
                });
                $("#main").html(dataset)
                
                document.querySelector('.allproducts').innerHTML = ""
                document.querySelector('.allproducts').innerHTML = counter + 'products'
        },
        error:function(err){
            console.log(err)
        }
    })
}


