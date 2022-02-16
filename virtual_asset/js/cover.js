const element = document.getElementById('element')
//let bikename=document.querySelector('.active').textContent.replace(/ /g,'').toLowerCase();

element.addEventListener('click',function(e){
    bikename=document.querySelector('.active').textContent.replace(/ /g,'').toLowerCase();
    var getotherarrows = document.querySelectorAll('.blink-image');
    const getImage = document.querySelector('.mainCar')
 
  
    

    for(var i=0;i<getotherarrows.length;i++){
        if(getotherarrows[i].classList.contains('front_left') && e.target.classList.contains('front_right')){
            
            getImage.src=`./virtual_asset/images/${bikename}/left_front_3qt.png`;
            // getImage.style.marginTop = "250px"
            // getImage.style.marginLeft = "50px"
            getotherarrows[i].classList.remove('front_left');
            e.target.classList.remove('front_right');

            getotherarrows[i].classList.add('front_view');
            e.target.classList.add('left_side_view');
          

        }
        //Reverse_above
        else if(getotherarrows[i].classList.contains('left_side_view') && e.target.classList.contains('front_view')){
            
            getImage.src=`./virtual_asset/images/${bikename}/front_view.png`;
    
            getotherarrows[i].classList.remove('left_side_view');
            e.target.classList.remove('front_view');

            getotherarrows[i].classList.add('front_right');
            e.target.classList.add('front_left');
           

        }
        //Push 1
        else if(getotherarrows[i].classList.contains('front_view') && e.target.classList.contains('left_side_view')){
           
            getImage.src=`./virtual_asset/images/${bikename}/left_side_view.png`;
            
            // openDoorIcon(element,bikename)
            getotherarrows[i].classList.remove('front_view');
            e.target.classList.remove('left_side_view');

             getotherarrows[i].classList.add('left_side_view');
             e.target.classList.add('left_rear_side');

             


        }
        //Reverse
        else if(getotherarrows[i].classList.contains('left_rear_side') && e.target.classList.contains('left_side_view')){
            removeIcon(element)
            getImage.src=`./virtual_asset/images/${bikename}/left_front_3qt.png`;
    
            getotherarrows[i].classList.remove('left_rear_side');
            e.target.classList.remove('left_side_view');

            getotherarrows[i].classList.add('front_right');
            e.target.classList.add('front_left');
            
           
        }
        else if(getotherarrows[i].classList.contains('front_right') && e.target.classList.contains('front_left')){
            
            removeIcon(element)
            getImage.src=`./virtual_asset/images/${bikename}/front_view.png`;
    
            getotherarrows[i].classList.remove('front_right');
            e.target.classList.remove('front_left');

            getotherarrows[i].classList.add('front_right');
            e.target.classList.add('front_left');
            
            

        }
        //Push 2
        else if(getotherarrows[i].classList.contains('left_side_view') && e.target.classList.contains('left_rear_side')){
            removeIcon(element)
            getImage.src=`./virtual_asset/images/${bikename}/left_rear_3qt.png`;
    
            getotherarrows[i].classList.remove('left_side_view');
            e.target.classList.remove('left_rear_side');

            getotherarrows[i].classList.add('left_side_view');
            e.target.classList.add('back_view');
            
           
        }
        //Reverse
        else if(getotherarrows[i].classList.contains('back_view') && e.target.classList.contains('left_side_view')){
            // openDoorIcon(element)
            getImage.src=`./virtual_asset/images/${bikename}/left_side_view.png`;
    
            getotherarrows[i].classList.remove('back_view');
            e.target.classList.remove('left_side_view');

            getotherarrows[i].classList.add('left_rear_side');
            e.target.classList.add('left_side_view');
            
           
        }
        //Push 3
        else if(getotherarrows[i].classList.contains('left_side_view') && e.target.classList.contains('back_view')){
            openDoorIcon(element,bikename)
            
            getImage.src=`./virtual_asset/images/${bikename}/rear.png`;
    
            getotherarrows[i].classList.remove('left_side_view');
            e.target.classList.remove('back_view');

            getotherarrows[i].classList.add('left_rear_side');
            e.target.classList.add('right_rear_side');
            
            
            
        }
        //Reverse
        else if(getotherarrows[i].classList.contains('right_rear_side') && e.target.classList.contains('left_rear_side')){
            
            removeIcon(element)
            
            // openDoorIcon(element,bikename)
            getImage.src=`./virtual_asset/images/${bikename}/left_rear_3qt.png`;
    
            getotherarrows[i].classList.remove('right_rear_side');
            e.target.classList.remove('left_rear_side');

            getotherarrows[i].classList.add('back_view');
            e.target.classList.add('left_side_view');
        
            
            
        }
        //Push 4
        else if(getotherarrows[i].classList.contains('left_rear_side') && e.target.classList.contains('right_rear_side')){
            removeIcon(element)
            getImage.src=`./virtual_asset/images/${bikename}/right_rear_3qt.png`;
    
            getotherarrows[i].classList.remove('left_rear_side');
            e.target.classList.remove('right_rear_side');

            getotherarrows[i].classList.add('back_view');
            e.target.classList.add('right_side_view');
            
        }
        //Reverse
        else if(getotherarrows[i].classList.contains('right_side_view') && e.target.classList.contains('back_view')){
            // removeIcon(element)
            openDoorIcon(element,bikename)
            getImage.src=`./virtual_asset/images/${bikename}/rear.png`;
    
            getotherarrows[i].classList.remove('right_side_view');
            e.target.classList.remove('back_view');

            getotherarrows[i].classList.add('right_rear_side');
            e.target.classList.add('left_rear_side');
            
        }
        //Push 5
        else if(getotherarrows[i].classList.contains('back_view') && e.target.classList.contains('right_side_view')){
            removeIcon(element)
            getImage.src=`./virtual_asset/images/${bikename}/right_side.png`;
    
            getotherarrows[i].classList.remove('back_view');
            e.target.classList.remove('right_side_view');

            getotherarrows[i].classList.add('left_rear_side');
             e.target.classList.add('right_front_side');
            
        }
        //Reverse
        else if(getotherarrows[i].classList.contains('right_front_side') && e.target.classList.contains('left_rear_side')){
            removeIcon(element)
            getImage.src=`./virtual_asset/images/${bikename}/right_rear_3qt.png`;
    
            getotherarrows[i].classList.remove('right_front_side');
            e.target.classList.remove('left_rear_side');

            getotherarrows[i].classList.add('right_side_view');
            e.target.classList.add('back_view');
            
        }
        //Push 6
        else if(getotherarrows[i].classList.contains('left_rear_side') && e.target.classList.contains('right_front_side')){
            removeIcon(element)
            getImage.src=`./virtual_asset/images/${bikename}/right_front_3qt.png`;
    
            getotherarrows[i].classList.remove('left_rear_side');
            e.target.classList.remove('right_front_side');

            getotherarrows[i].classList.add('right_side_view');
            e.target.classList.add('front_view');
            
        }
        //Reverse
        else if(getotherarrows[i].classList.contains('front_view') && e.target.classList.contains('right_side_view')){
            removeIcon(element)
            getImage.src=`./images/${bikename}/right_side.png`;
        
            getotherarrows[i].classList.remove('front_view');
            e.target.classList.remove('right_side_view');

            getotherarrows[i].classList.add('right_front_side');
            e.target.classList.add('left_rear_side');
            
        }
        //Push 7
        else if(getotherarrows[i].classList.contains('right_side_view') && e.target.classList.contains('front_view')){
            removeIcon(element)
            getImage.src=`./virtual_asset/images/${bikename}/front_view.png`;
    
            getotherarrows[i].classList.remove('right_side_view');
            e.target.classList.remove('front_view');

            getotherarrows[i].classList.add('front_left');
            e.target.classList.add('front_right');
            
        }
        //Next Left 360
        else if(getotherarrows[i].classList.contains('front_right') && e.target.classList.contains('front_left')){
            
           console.log('Click');

        }
        
        
    }
    
    
})