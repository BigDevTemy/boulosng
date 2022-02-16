<?php include('includes/head.php');
?>
<!-- body tag starts here -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<div class="wrapper">
    <div class="navbar-minimize-fixed">
        <button class="minimize-sidebar btn btn-link btn-just-icon">
            <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
            <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
        </button>
    </div>

    <!-- ============== SIDE BAR BEGINS ============= -->
    <?php include('includes/sidebar.php') ?>
    <!-- ============== SIDE BAR END ============= -->
    <div class="main-panel">
        <!-- Navbar -->

        <?php include('includes/navbar.php') ?>
        <!-- Navbar end -->

        <?php include('includes/search_bar.php'); ?>
        <!-- End Navbar -->
        <div class="content">
            <h3>Add Newletter</h3>
            <div class="row">   
                <div class="col-md-12" style="min-height:25vh;background:#fff; text-align:center">
                    <div style="width:100% ">
                        <div id="response" style="margin:auto;margin-top:10px"></div>
                    </div>
                      <form style="padding:40px;color:#000;" enctype='multipart/form-data' id="form" >
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">NewsLetter Title</label>
                                <input class="form-control"  placeholder="Provide NewLetter Title" style="color:#000;border:1px solid #000;border-radius:10px" id="title" />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">News Body</label>
                                <textarea class="form-control" style="color:#000;border:1px solid #000;border-radius:10px" id="newsbody" rows="3" cols="10"></textarea>
                            </div>
                            <div>
                                <label for="exampleFormControlTextarea1">News Banner</label>
                                <input type="file" class="form-control" style="color:#000"  accept="image/png, image/gif, image/jpeg" id="image" name="image" value="Select Image" />
                            </div> 

                            <div class="form-group mt-4">
                                <input type="button" class="form-control" style="background:#25486b" value="Add NewsLetter"  id="add" />
                            </div>

                           
                            
    
                     </form>
                      
                </div> 
                  
                    
            </div>
            <div class="row">
                <div class="col-md-12 p-4" >
                <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr style="text-align:center">
                <th>SN</th>
                <th>NEWS TITLE</th>
                <th>NEWS </th>
                <th>CREATED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody id="d_tbody">
            <div id="category_response">

            </div>
        </tbody>
        
    </table>

                </div>
            </div>
        </div>

        <!-- ========== FOOTER BEGINS ======================= -->
        <?php include('includes/footer.php'); ?>
        <!-- ================ FOOTER ENDS ============================= -->
<script type="text/javascript" src="../assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../assets/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    
    $("#add").on('click',function(e){
      
      var title = document.getElementById('title').value;
      var body = $("#newsbody").val()
      
    if(title!="" && body!="" && document.getElementById("image").files.length > 0){
        
        // var trimmed ="";
        // $('#specification').val(function(i,v){
        //       trimmed =  v.replace(/\s+/g,' ').replace(/>(\s)</g,'>\n<');
        // });
        
        var formdata = new FormData();
        formdata.append('title',title)
        formdata.append('body',body)
        formdata.append('image',$('input[type=file]')[0].files[0])
        
        $.ajax({
                    url:'api/addnewsletter.php',
                    method:'post',
                    data:  formdata,
                    contentType: false,
                            cache: false,
                    processData:false,
                    success:function(data){
                        console.log(data)
                        if(JSON.parse(data).status){
                            $("#response").css('color','#003300')
                            document.getElementById('response').innerHTML = JSON.parse(data).message
                            document.getElementById('title').value="";
                            document.getElementById('image').value="";
                            $("#newsbody").val("");
                            
                        }
                        else{
                            $("#response").css('color','#ff0000')
                            document.getElementById('response').innerHTML = JSON.parse(data).message
                        }
                    },
                    error:function(err){
                        console.log(err)
                    }
                })
    }
    else{
        alert('All Field are Required')
    }

     
  })
})
</script>
</html>