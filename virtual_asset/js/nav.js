const clickable = [];
let sayHello = false
document.querySelector('.sidebar').addEventListener('click',function(e){
   let loaderSignal = false;
    if(e.target.classList.contains('link-name') || e.target.classList.contains('sub-link-name')){
        var i = document.querySelector('.sidebar').children[1];
        for(var x=0; x<i.children.length;x++){
            
            if(i.children[x].classList.contains('active')){
                i.children[x].classList.remove('active');
               
            }
            if(i.children[x].children.length === 2){
                let subparent = i.children[x].children;
                for(var l=0;l<subparent[1].children.length;l++){
                       
                    if(subparent[1].children[l].classList.contains('active')){
                        console.log('Active Present')
                        subparent[1].children[l].classList.remove('active')
                    }
                    
                }
            }
            
            // if(i.children[x].children > 1 ){
            //     console.log('Here',i.children[x])
            // }
            
            // if(i.children[x].classList.contains('dropdown')){
            //     let subparent = i.children[x].children;
            //     console.log('subparent',subparent)
            // }


            if(e.target.classList.contains('dropdown')){
                
                let subparent = i.children[x].children;
                if(subparent.length > 1){
                    // console.log('Here',subparent[1].children.length)
                    // for(var l=0;l<subparent[1].children.length;l++){
                       
                    //     if(subparent[1].children[l].classList.contains('active')){
                    //         console.log('Active Present')
                    //         subparent[1].children[l].classList.remove('active')
                    //     }
                        
                    // }

                    
                    
                    if(e.target.classList.contains('sub-link-name')){
                        e.target.parentElement.classList.add('active');
                        loaderSignal = true;
                        console.log('men',e.target.parentElement.classList)
                    }
                    
                }
                
                  
            }
            else {
            
                // if(i.children[x].classList.contains('active')){
                //     i.children[x].classList.remove('active');
                // }
                let parent  = e.target.parentElement;
                parent.parentElement.classList.add('active');
                loaderSignal = true;
            }
            

            // if(i.children[x].children.length > 1){
            //     let subparent = i.children[x].children[1];
            //     console.log('j',subparent.children)
            //     for(var z=0;z<subparent.children.length;z++){
            //         if(subparent.children[z].classList.contains('active')){
            //             subparent.children[z].classList.remove('active');
                        
            //             // e.target.classList.add('active');
            //         }
            //         let parent  = e.target;
            //         console.log('Yea',parent)
            //     }
            // }
            
            
            
            
        }
        console.log('i',i)

        

        const bikename = e.target.textContent.replace(/ /g, '').toLowerCase();
        if(loaderSignal){
            console.log(bikename);
            loadImage(bikename) 
        }
         
     }
    
    
      
    
})