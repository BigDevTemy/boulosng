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
    var dataset = ""
    var counter=0;
    $.ajax({
        url:'api/data.php',
        method:'post',
        data:{category:category},
        success:function(data){
            
            var result = groupByKey(JSON.parse(data), 'sub_category_name');
            var keys = Object.keys(result)
            keys.forEach((key, index) => {
                
                var value = result[key];
                
                value.forEach((d)=>{
                    var getCurrentUrl = document.location.href
                    counter++;
                    var array = d.specification.split(",");
                    for(var i = 0; i < array.length ; i++){
                        
                    }
                    dataset += `<div class="col-sm-6 mb-4">
                   
                    <div class="card card-light card-hover h-100">
                      <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href="${getCurrentUrl}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}"></a>
                       
                        <div class="content-overlay end-0 top-0 pt-3 pe-3">
                          
                        </div>
                        <div  style="height: 250px;text-align:center;padding:10px"><img src="./admin/api/${d.image_url}" class="" alt="Image" style="width:300px;height:250px"/></div>
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
                          <div class="row g-2">
                         
                            <div class="col me-sm-1">
                              <div class="bg-dark rounded text-center w-100 h-100 p-2">
                              <a class="nav-link-light" href="${getCurrentUrl}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">
                                  <i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light" id="spec"></span>
                              </a>
                                 
                              </div>
                            </div>
                            <div class="col me-sm-1">
                              <div class="bg-dark rounded text-center w-100 h-100 p-2">
                              <a class="nav-link-light" href="${getCurrentUrl}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">
                                <i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light" id="spec1"></span>
                              </a>
                                </div>
                            </div>
                            <div class="col">
                              <div class="bg-dark rounded text-center w-100 h-100 p-2">
                                <a class="nav-link-light" href="${getCurrentUrl}/${d.sub_category_name.replace(/ /g, '+')}/${d.vechicle_name.replace(/ /g, '+')}">
                                  <i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light" id="spec2"></span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>`
                })
                
                $("#main").html(dataset)
                document.querySelector('.allproducts').innerHTML = ""
                document.querySelector('.allproducts').innerHTML = counter + 'products'
                
            });
            //console.log(Object.keys(result));
           
            // console.log(result.Standard Bikes)
            // Object.keys(result).forEach((key,index) => {
            //     // console.log(result[key][0].sub_category_name); // 'Bob', 47
            //     dataset += `${result[key][0].sub_category_name}`
            //   });
            //   $("#main").html(dataset)
        },
        error:function(err){
            console.log(err)
        }
    })
}


