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
            <h3>Add Vechicle Category</h3>
            <div class="row">   
                <div class="col-md-12" style="min-height:25vh;background:#fff; text-align:center">
                    <div style="width:100% ">
                        <div id="response" style="margin:auto;margin-top:10px"></div>
                    </div>
                      <form style="padding:40px">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Provide the Category name" style="color:#000;border:1px solid #000" id="category" />
                            </div> 
                            <div class="form-group mt-4">
                                <input type="button" class="form-control" style="background:#25486b" value="Add Category"  id="add" />
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
                <th>CATEGORY NAME</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
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
$(document).ready(function() {
   
    loaddata();
  
    
    $("#add").on('click',function(e){
        e.preventDefault();
       console.log(document.getElementById('category').value)
        if(document.getElementById('category').value !=""){
            
                $.ajax({
                url:'api/addCategory.php',
                method:'post',
                beforesend:function(){
                         $("#add").attr("disabled", true)
                       document.getElementById('response').innerHTML="Please Wait";
                },
                data:{
                    category_name:document.getElementById('category').value,
                    
                },
                success:function(data){
                    
                    $("#add").attr("disabled", false)
                    if(JSON.parse(data).status){
                        
                        $("#response").css('color','#003300')
                        document.getElementById('response').innerHTML= JSON.parse(data).data;
                        loaddata();
                    }
                    else{
                        $("#response").css('color','#ff0000')
                        document.getElementById('response').innerHTML= JSON.parse(data).data;
                    }
                },
                error:function(err){
                    console.log(err)
                }
            })
            
        }
    })

    function loaddata(){
        $.ajax({
                url:'api/getCategory.php',
                method:'get',
                beforesend:function(){

                       document.getElementById('category_response').innerHTML="Loading Data";
                },
                
                success:function(data){
                    
                    
                    if(JSON.parse(data).status){
                       document.getElementById('d_tbody').innerHTML ="";
                        JSON.parse(data).data.forEach((d)=>{
                            var dataset = `<tr style="text-align:center">
                                            <td>${d[0]}</td>
                                            <td>${d[1]}</td>
                                            <td>${d[2]}</td>
                                            <td>${d[3]}</td>
                                            <td><i class="bi bi-x"  style="padding-right:10px;color:#ff0000;cursor:pointer"></i><i class="bi bi-pencil-square" style="cursor:pointer"></i></td>
                                            </tr>`
                                $("tbody").append(dataset)
                        })
                    
                    }
                    else{
                        document.getElementById('category_response').innerHTML=JSON.parse(data).data
                    }
                },
                error:function(err){
                    console.log(err)
                }
            })
    }

});
</script>
</html>