var getHash = location.hash.replace("#","");
const _push = url => {
    
    history.pushState(null, null, url)
    loadComponent(document.location.href);
}

window.onpopstate = e => loadComponent(document.location.href)

 const loadComponent = (url)=>{
    if(url === location.origin + location.pathname){
		location="/boulos_ng"
	}
    else{
        var getnewHash = location.hash.replace("#","");
        
        if(getnewHash.includes('/')){
            var x =  getnewHash.split('/');
            var count = getnewHash.split('/').length -1
            if(count==2){
                filterData(x);
            }

        }
        else{

            document.getElementById('single').innerHTML="";
            document.getElementById('main').innerHTML="";
            $("#mybody").show();
            $("nav").show();
            var category = getnewHash.replace("_"," ");
             assignActiveClass(category);
             grabData(category)
             document.querySelector('.category').innerHTML=category
             document.querySelector('.breadcrumber').innerHTML=category
             
             
             
             
        }
        
        
    }
}

const openEntry = getHash!= "" ? _push(document.location.href) : '';

loadComponent(document.location.href);


function assignActiveClass(text){
    var x = document.querySelectorAll('.card-nav-link');
    
    for(var i=0;i<x.length;i++){
       
        if(x[i].classList.contains('active')){
            x[i].classList.remove('active')
            
        }

        if(x[i].textContent === text.replace("_"," ")){
            x[i].classList.add('active')
        }
         
    }
    
}