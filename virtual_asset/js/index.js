
function loadImage(bikename){

   
     
    if(document.getElementById('main').children.length > 0){
        document.getElementById('main').innerHTML = " "
        document.getElementById('sideLeft').innerHTML = " "
        document.getElementById('sideRight').innerHTML = " "
    }
    
    
    const maincar = document.createElement('img');
    const sideLeft = document.createElement('img');
    const sideRight = document.createElement('img');


    maincar.src=`./virtual_asset/images/${bikename}/front_view.png`
    sideLeft.src=`./virtual_asset/images/restore.png`
    sideRight.src=`./virtual_asset/images/white_arrow.png`

    maincar.setAttribute('class','mainCar');

    sideLeft.setAttribute('class','blink-image front_left');
   
    
    sideRight.setAttribute('class','blink-image front_right');
  
   
    const main = document.getElementById("main");
    const left_element = document.getElementById("sideLeft");
    const right_element = document.getElementById("sideRight");

    main.appendChild(maincar);
    left_element.appendChild(sideLeft);
    right_element.appendChild(sideRight)
    
    console.log(document.getElementById('element'))
    // trackClick(bikename);
    removeIcon(element)
    
}


function openDoorIcon(element,bikename){
                var div = document.createElement('div');
                
                var img = document.createElement('img');
                img.src="./virtual_asset/images/open1.png"
                img.setAttribute('class','imageOpen blink-image ');
                img.setAttribute('id','opencar')
                div.appendChild(img);
                // div.classList.add('openDiv')
                element.appendChild(img);
              

            document.querySelector('.imageOpen').addEventListener('click',function(e){
                
                const x = document.getElementById('displayInner');
                x.classList.add('nativemodal')
                var div = document.createElement('div');
                var img = document.createElement('img');
                var help = document.createElement('img');
                var close = document.createElement('img');
                img.src=`./virtual_asset/images/${bikename}/dashboard.png`
                
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
    var icon = document.querySelector('.imageOpen')
    if(icon){
        element.removeChild(icon)
    }
    
}

