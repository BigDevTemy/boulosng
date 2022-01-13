function loadImage(){
    const cover = document.createElement("div");
    cover.setAttribute('class','cover')
    const start = document.createElement("div");
    const end = document.createElement("div");
    const node = document.createTextNode("Click Here to Start.");
    const nodeII = document.createTextNode("Reverse Trend.");
    start.appendChild(node);
    end.appendChild(nodeII);
    cover.appendChild(start)
    cover.appendChild(end)

    const maincar = document.createElement('img');
    const manageDiv = document.createElement('div');

    manageDiv.setAttribute('class','manageDiv')
    maincar.src="./virtual_asset/images/cars/front_view.png"
    maincar.setAttribute('class','mainCar')

    const side_left = document.createElement('img');
    side_left.src="./virtual_asset/images/restore.png"
    side_left.setAttribute('class','blink-image front_left')
    

    const side_right = document.createElement('img');
    side_right.src="./virtual_asset/images/white_arrow.png"
    side_right.setAttribute('class','blink-image front_right')
    const element = document.getElementById("main");

    element.appendChild(side_left);
    element.appendChild(maincar)
    element.appendChild(side_right);

    trackClick(element);

}

function trackClick(element){
   
    element.addEventListener('click',function(e){
        console.log(e.target.classList)
        var getotherarrows = document.querySelectorAll('.blink-image');
        const getImage = document.querySelector('.mainCar')
        for(var i=0;i<getotherarrows.length;i++){
            if(getotherarrows[i].classList.contains('front_left') && e.target.classList.contains('front_right')){
                
                getImage.src="./virtual_asset/images/cars/left_front_3qt.png";
        
                getotherarrows[i].classList.remove('front_left');
                e.target.classList.remove('front_right');
    
                getotherarrows[i].classList.add('front_view');
                e.target.classList.add('left_side_view');
                console.log('Target', e.target.classList)
                console.log('Non-Target',getotherarrows[i].classList)
  
            }
            //Reverse_above
            else if(getotherarrows[i].classList.contains('left_side_view') && e.target.classList.contains('front_view')){
               
                getImage.src="./virtual_asset/images/cars/front_view.png";
        
                getotherarrows[i].classList.remove('left_side_view');
                e.target.classList.remove('front_view');
    
                getotherarrows[i].classList.add('front_right');
                e.target.classList.add('front_left');
                console.log('Target', e.target.classList)
                console.log('Non-Target',getotherarrows[i].classList)
  
            }
            //Push 1
            else if(getotherarrows[i].classList.contains('front_view') && e.target.classList.contains('left_side_view')){
               
                getImage.src="./virtual_asset/images/cars/left_side_view.png";

                openDoorIcon(element)
                getotherarrows[i].classList.remove('front_view');
                e.target.classList.remove('left_side_view');

                 getotherarrows[i].classList.add('left_side_view');
                 e.target.classList.add('left_rear_side');

                 

                 console.log('Target', e.target.classList)
                 console.log('Non-Target',getotherarrows[i].classList)
  
            }
            //Reverse
            else if(getotherarrows[i].classList.contains('left_rear_side') && e.target.classList.contains('left_side_view')){
                removeIcon(element)
                getImage.src="./virtual_asset/images/cars/left_front_3qt.png";
        
                getotherarrows[i].classList.remove('left_rear_side');
                e.target.classList.remove('left_side_view');

                getotherarrows[i].classList.add('front_right');
                e.target.classList.add('front_left');
                
                console.log('Target', e.target.classList)
                console.log('Non-Target',getotherarrows[i].classList)

            }
            else if(getotherarrows[i].classList.contains('front_right') && e.target.classList.contains('front_left')){
                removeIcon(element)
                getImage.src="./virtual_asset/images/cars/front_view.png";
        
                getotherarrows[i].classList.remove('front_right');
                e.target.classList.remove('front_left');

                getotherarrows[i].classList.add('front_right');
                e.target.classList.add('front_left');
                
                console.log('Target', e.target.classList)
                console.log('Non-Target',getotherarrows[i].classList)

            }
            //Push 2
            else if(getotherarrows[i].classList.contains('left_side_view') && e.target.classList.contains('left_rear_side')){
                removeIcon(element)
                getImage.src="./virtual_asset/images/cars/left_rear_3qt.png";
        
                getotherarrows[i].classList.remove('left_side_view');
                e.target.classList.remove('left_rear_side');

                getotherarrows[i].classList.add('left_side_view');
                e.target.classList.add('back_view');
                
                console.log('Target', e.target.classList)
                console.log('Non-Target',getotherarrows[i].classList)
            }
            //Reverse
            else if(getotherarrows[i].classList.contains('back_view') && e.target.classList.contains('left_side_view')){
                openDoorIcon(element)
                getImage.src="./virtual_asset/images/cars/left_side_view.png";
        
                getotherarrows[i].classList.remove('back_view');
                e.target.classList.remove('left_side_view');

                getotherarrows[i].classList.add('left_rear_side');
                e.target.classList.add('left_side_view');
                
                console.log('Target', e.target.classList)
                console.log('Non-Target',getotherarrows[i].classList)
            }
            //Push 3
            else if(getotherarrows[i].classList.contains('left_side_view') && e.target.classList.contains('back_view')){
                openDoorIcon(element)
                getImage.src="./virtual_asset/images/cars/rear.png";
        
                getotherarrows[i].classList.remove('left_side_view');
                e.target.classList.remove('back_view');

                getotherarrows[i].classList.add('left_rear_side');
                e.target.classList.add('right_rear_side');
                
                
                console.log('Target', e.target.classList)
                console.log('Non-Target',getotherarrows[i].classList)
            }
            //Reverse
            else if(getotherarrows[i].classList.contains('right_rear_side') && e.target.classList.contains('left_rear_side')){
                removeIcon(element)
                getImage.src="./virtual_asset/images/cars/left_rear_3qt.png";
        
                getotherarrows[i].classList.remove('right_rear_side');
                e.target.classList.remove('left_rear_side');

                getotherarrows[i].classList.add('back_view');
                e.target.classList.add('left_side_view');
            
                
                
                console.log('Target', e.target.classList)
                console.log('Non-Target',getotherarrows[i].classList)
            }
            //Push 4
            else if(getotherarrows[i].classList.contains('left_rear_side') && e.target.classList.contains('right_rear_side')){
                removeIcon(element)
                getImage.src="./virtual_asset/images/cars/right_rear_3qt.png";
        
                getotherarrows[i].classList.remove('left_rear_side');
                e.target.classList.remove('right_rear_side');

                getotherarrows[i].classList.add('back_view');
                e.target.classList.add('right_side_view');
                
            }
            //Reverse
            else if(getotherarrows[i].classList.contains('right_side_view') && e.target.classList.contains('back_view')){
                removeIcon(element)
                getImage.src="./virtual_asset/images/cars/rear.png";
        
                getotherarrows[i].classList.remove('right_side_view');
                e.target.classList.remove('back_view');

                getotherarrows[i].classList.add('right_rear_side');
                e.target.classList.add('left_rear_side');
                
            }
            //Push 5
            else if(getotherarrows[i].classList.contains('back_view') && e.target.classList.contains('right_side_view')){
                removeIcon(element)
                getImage.src="./virtual_asset/images/cars/right_side.png";
        
                getotherarrows[i].classList.remove('back_view');
                e.target.classList.remove('right_side_view');

                getotherarrows[i].classList.add('left_rear_side');
                 e.target.classList.add('right_front_side');
                
            }
            //Reverse
            else if(getotherarrows[i].classList.contains('right_front_side') && e.target.classList.contains('left_rear_side')){
                removeIcon(element)
                getImage.src="./virtual_asset/images/cars/right_rear_3qt.png";
        
                getotherarrows[i].classList.remove('right_front_side');
                e.target.classList.remove('left_rear_side');

                getotherarrows[i].classList.add('right_side_view');
                e.target.classList.add('back_view');
                
            }
            //Push 6
            else if(getotherarrows[i].classList.contains('left_rear_side') && e.target.classList.contains('right_front_side')){
                removeIcon(element)
                getImage.src="./virtual_asset/images/cars/right_front_3qt.png";
        
                getotherarrows[i].classList.remove('left_rear_side');
                e.target.classList.remove('right_front_side');

                getotherarrows[i].classList.add('right_side_view');
                e.target.classList.add('front_view');
                
            }
            //Reverse
            else if(getotherarrows[i].classList.contains('front_view') && e.target.classList.contains('right_side_view')){
                removeIcon(element)
                getImage.src="./images/cars/right_side.png";
            
                getotherarrows[i].classList.remove('front_view');
                e.target.classList.remove('right_side_view');

                getotherarrows[i].classList.add('right_front_side');
                e.target.classList.add('left_rear_side');
                
            }
            //Push 7
            else if(getotherarrows[i].classList.contains('right_side_view') && e.target.classList.contains('front_view')){
                removeIcon(element)
                getImage.src="./virtual_asset/images/cars/front_view.png";
        
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
}

function openDoorIcon(element){
    var div = document.createElement('div');
    
                var img = document.createElement('img');
                img.src="./virtual_asset/images/open1.png"
                img.setAttribute('class','imageOpen blink-image');
                img.setAttribute('id','opencar')
                div.appendChild(img);
                div.classList.add('openDiv')
            element.appendChild(div);
            console.log(div)

            document.querySelector('.openDiv').addEventListener('click',function(e){
                const x = document.getElementById('displayInner');
                x.classList.add('nativemodal')
                var div = document.createElement('div');
                var img = document.createElement('img');
                var help = document.createElement('img');
                var close = document.createElement('img');
                img.src="./virtual_asset/images/cars/dashboard.png"
                help.src="./virtual_asset/images/help.png"
                close.src="./virtual_asset/images/close.png"
                
                img.setAttribute('class','modalImage')

                help.setAttribute('class','helpIcon blink-image');
                close.setAttribute('class','closeIcon blink-image');

                div.appendChild(img);
                div.appendChild(help);
                div.appendChild(close);
                div.classList.add('divInterior');
                x.appendChild(div);

                x.addEventListener('click',function(e){
                    if(e.target.classList.contains('closeIcon')){
                        var icon = document.querySelector('.divInterior')
                        x.removeChild(icon)
                        x.classList.remove('nativemodal')
                    }
                });
            })
}

function removeIcon(element){
    var icon = document.querySelector('.openDiv')
    if(icon){
        element.removeChild(icon)
    }
    
}
