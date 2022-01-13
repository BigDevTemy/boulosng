$(document).ready(function(){
	var surface = $(".surface");
	var car = $(".car");

	$(document).on('keypress',function(e){
		console.log(e.which);
		if(e.which == 13){
			surface.toggleClass("surface_animation");
			car.toggleClass("car_animation");
		}
	})
})