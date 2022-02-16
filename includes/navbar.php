  <!-- Sign In Modal-->
  <div class="modal fade" id="signin-modal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
          <div class="modal-content  border-light" style="background-color:#0d3050">
              <div class="modal-body px-0 py-2 py-sm-0">
                  <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
                  <div class="row mx-0 align-items-center">
                      <div class="col-md-6 border-end-md border-light p-4 p-sm-5">
                          <h2 class="h3 text-light mb-4 mb-sm-5">Hey Whats Up!<br>Wanna Talk with Us?.</h2><img class="d-block mx-auto" src="img/signin-modal/contactreal.svg" width="344" alt="Illustartion">
                          <div class="text-light mt-4 mt-sm-5"><span class="opacity-60">We'll never share your email with anyone else. </span><a class="text-light" href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal"></a></div>
                      </div>
                      <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                          <div class="mb-4">
                              <label class="form-label text-light mb-2" for="signin-email">Name</label>
                              <input class="form-control form-control-light" type="text" name="" id="fullname" placeholder="Enter your Full name" required>
                          </div>
                          <form class="needs-validation" novalidate>
                              <div class="mb-4">
                                  <label class="form-label text-light mb-2" for="signin-email">Email address</label>
                                  <input class="form-control form-control-light" type="email" id="email" placeholder="Enter your email" required>
                              </div>
                              <div class="mb-4">
                                  <div class="d-flex align-items-center justify-content-between mb-2">
                                      <label class="form-label text-light mb-0" for="signin-password" id="">Message</label>
                                  </div>
                                  <div class="mb-4">

                                      <textarea class="form-control form-control-light" type="text" name="client_name" id="message" placeholder="Enter your Message here" required></textarea>
                                  </div>
                              </div>
                              <button class="btn btn-danger btn-lg w-100" type="submit" id="add">Submit </button>
                              <div id="response"></div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <header class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#0d3050" data-scroll-header>
      <div class="container">
          <a class="navbar-brand me-3 me-xl-4" href="/boulos_ng">
              <img class="d-block" src="img/logo/bouloswhite.png" width="116" alt="Boulos">
              <!-- <h4 class="text-white">Boulos NG</h4> -->
          </a>
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <a class=" btn  btn-sm ms-2 order-lg-3 text-white d-sm-none d-md-block" style="border:2px solid #fff;" href="virtualshowroom"><i class="fa-solid fa-store me-2"></i>Virtual Showroom</a>
          <a class=" btn colour_bg btn-danger btn-sm ms-2 d-sm-none d-md-block order-lg-3 text-white" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Contact Us</a>
          
          <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
              <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
                  <!-- Menu items-->
                  <li class="nav-item active"><a class="nav-link" href="/boulos_ng">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="about-us">About</a></li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="vechiles" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Products</a>
                      <ul class="dropdown-menu dropdown-menu-dark">
                          <li><a class="dropdown-item"  href="vechicles#TWO_WHEELERS">Two Wheelers</a></li>
                          <li><a class="dropdown-item" href="vechicles#THREE_WHEELERS">Three Wheelers</a></li>
                          <li><a class="dropdown-item"  href="vechicles#FOUR_WHEELERS">Four Wheelers</a></li>
                          <li><a class="dropdown-item" href="vechicles#OBM">OBM</a></li>
                          <li><a class="dropdown-item" href="https://lamberet.groupboulos.com/boulos/exhibition"  target="_blank">Cold Chain Solutiuons</a></li>
                      </ul>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="after-sales">After Sales</a></li>
                  <li class="nav-item"><a class="nav-link" href="newsletter">News Center</a></li>
                  <li class="nav-item"><a class="nav-link" href="career">Careers</a></li>
                  <li class="nav-item d-none d-sm-block d-md-none"><a class="nav-link btn  btn-sm ms-2 order-lg-3 text-white "  href="virtualshowroom"><i class="fa-solid fa-store me-2"></i>Virtual Showroom</a></li>
                  <li class="nav-item btn-danger d-none d-sm-block d-md-none"> <a class=" nav-link btn colour_bg  btn-sm ms-2  order-lg-3 text-white" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>Contact Us</a></li>

                  
         
                  <!-- <li class="nav-item"><a class="nav-link" href="virtualshowroom.php">Virtual Showroom</a></li> -->

              </ul>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
      <script type="text/javascript">
            $(document).ready(function(){

                
                $("#add").on('click',function(e){
                    var fullname = document.getElementById('fullname').value;
                    var email = document.getElementById('email').value;
                    var message = $("#message").val();
                    e.preventDefault();

                if(fullname!="" && email!="" && message!=""){
                    $.ajax({
                        url:'api/contact_us',
                        method:'post',
                        data:{
                            fullname:fullname,email:email,message:message
                        },
                        beforeSend:function(){
                                document.getElementById('response').innerHTML ="<span style='font-size:14px;color:#fff;padding:40px'>Please Wait</span>"
                        },
                        success:function(data){
                            
                            if(JSON.parse(data).status){
                                Swal.fire(
                                    'Gratitude!',
                                    JSON.parse(data).data,
                                    'success'
                                    )
                                    document.getElementById('response').innerHTML=""
                                    document.getElementById('fullname').value=""
                                     document.getElementById('email').value=""
                                    $("#message").val("");
                            }
                            else{
                                Swal.fire(
                                    'Opps!',
                                    JSON.parse(data).data,
                                    'error'
                                    )

                                    document.getElementById('response').innerHTML=""
                            }
                        },
                        error:function(error){
                            console.log(error)
                        }

                    })
                }
                })
               
            })
            
        </script>
  </header>