<!DOCTYPE html>
<html>
<head>
	<title>Boulos_NG|Animation</title>
	<link rel="stylesheet" type="text/css" href="/boulos_ng/css/car.css">
	<script type="text/javascript" src="/boulos_ng/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="/boulos_ng/js/magic.js"></script>
	<style type="text/css">
		input{
			display: none;
		}
	</style>
</head>
<body>
<div style="background-color: #fff">
	<form enctype="multipart/form-data">
		<input type="file" name="" id="" />
		<div id="filename" style="color:#000">Ademilola.bg</div>
	</form>
<div>
<div class="night">
	<div class="surface"></div>
	<div class="car">
		<img src="/boulos_ng/img/bikes/bike_man_edit.png">
		
	</div>
	
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var x = document.querySelector("#filename");
		x.addEventListener('click',function(e){
				$("input").click();
				$('input[type="file"]').change(function(e){
	            var fileName = e.target.files[0].name;
	            document.getElementById('filename').innerHTML = fileName;
	        });
		})


	})
</script>
</body>
</html>