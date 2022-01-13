

const displaySinglePage=(actual)=>{

  let content = $(` <div class="col-md-7">
            <!-- Gallery-->
            <div class="tns-carousel-wrapper">
              
              <div>
                <div><img class="rounded-3" src="${actual[0]['imageUrl'][0]}" alt="Image"></div>
                
              </div>
            </div>
            <ul class="tns-thumbnails" id="thumbnails">
              <li class="tns-thumbnail"><img src="${actual[0]['imageUrl'][0]}" alt="Thumbnail"></li>
              <li class="tns-thumbnail"><img src="${actual[0]['imageUrl'][0]}" alt="Thumbnail"></li>
              <li class="tns-thumbnail"><img src="${actual[0]['imageUrl'][0]}" alt="Thumbnail"></li>
              <li class="tns-thumbnail"><img src="${actual[0]['imageUrl'][0]}" alt="Thumbnail"></li>
              <li class="tns-thumbnail"><img src="${actual[0]['imageUrl'][0]}" alt="Thumbnail"></li>
      
              <li class="tns-thumbnail"><a class="d-flex flex-column align-items-center justify-content-center w-100 h-100 bg-faded-light rounded text-light text-decoration-none" href="https://www.youtube.com/watch?v=0ffN2hgKzOE" data-bs-toggle="lightbox"><i class="fi-play-circle fs-5"></i><span class="opacity-70 mt-1">Play video</span></a></li>
            </ul>
            <!-- Specs-->
            <div class="py-3 mb-3">
              <h2 class="h4 text-light mb-4">Specifications</h2>
              <div class="row text-light">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <ul class="list-unstyled" id="specification">

                  </ul>
                </div>
                
              </div>
            </div>
            
            
            <!-- Features-->
            <h2 class="h4 text-light pt-3 mb-4">Features</h2>
            <div class="accordion accordion-light" id="features">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingExterior">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exterior" aria-expanded="false" aria-controls="exterior">Product Uniqueness</button>
                </h2>
                <div class="accordion-collapse collapse" id="exterior" aria-labelledby="headingExterior" data-bs-parent="#features">
                  <div class="accordion-body fs-sm text-light opacity-70">
                    <ul>
                      <li>Efficient</li>
                      <li>Durable</li>
                      <li>Powerful</li>
                      
                    </ul>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingInterior">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#interior" aria-expanded="true" aria-controls="interior">Specification</button>
                </h2>
                <div class="accordion-collapse collapse show" id="interior" aria-labelledby="headingInterior" data-bs-parent="#features">
                  <div class="accordion-body fs-sm text-light opacity-70">
                    <div class="row">
                      <div class="col-sm-6">
                        <ul id="key">
                          
                        </ul>
                      </div>
                      <div class="col-sm-6">
                        <ul id="value">
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div>
            
            
            
          </div>
          <!-- Sidebar-->
          <div class="col-md-5 pt-5 pt-md-0" style="margin-top: -6rem;">
            <div class="sticky-top pt-5">
              <div class="d-none d-md-block pt-5">
                <div class="d-flex mb-4"><span class="badge bg-success fs-base me-2" data-bs-toggle="popover" data-bs-placement="top" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class=&quot;d-flex&quot;&gt;&lt;i class=&quot;fi-award mt-1 me-2&quot;&gt;&lt;/i&gt;&lt;div&gt;This car is checked and&lt;br&gt;certified by Finder.&lt;/div&gt;&lt;/div&gt;">Certified</span></div>
                <div class="h3 text-light">${actual[0]['name']}</div>
                <div class="d-flex align-items-center text-light pb-4 mb-2">
                  
                  <div class="text-nowrap"><i class="fi-map-pin fs-lg opacity-70 me-2"></i><span class="align-middle">Boulos Engineering Limited</span></div>
                </div>
              </div>
              <div class="card card-light card-body mb-4">
                <div class="text-light mb-2">Overview</div>

                <div class="pt-4 mt-2">
                  
                    ${actual[0]['overview']}
                  
                </div>
              </div>
              <div class="card card-body bg-transparent border-light">
                <h5 class="text-light">BOULOS NG</h5>
              
              </div>
            </div>
          </div>
        `)
      for(var index in actual[0]) {

        if(index !="name" && index !="overview"  && index !="imageUrl"){
          //var x = console.log(index + " : " + actual[0][index] )
          var dataset = '<li class="mb-2"><strong>'+index.toUpperCase()+':</strong><span class="opacity-70 ms-1 ml-4">'+actual[0][index] +'</span></li>'
          var dataset_spec_value = '<li>'+actual[0][index]+'</li>';
          var dataset_spec_key = '<li>'+index+'</li>';
          content.find('#specification').append(dataset)
          content.find('#value').append(dataset_spec_value)
          content.find('#key').append(dataset_spec_key)
        }
        
      }
    //for (let key of Object.keys(actual[0])) {
      //for(let value of Object.values(actual[0])){
        //console.log(key+value)
      //}
    //}

    
    document.querySelector('#singlepage').classList.add('row');
    $("#singlepage").html(content);
}



         