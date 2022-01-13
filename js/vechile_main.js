
const search = location.hash.replace('#','');

console.log('search',search)
const _push = url => {
    history.pushState(null, null, url)
    loadComponent(document.location.href);
}

window.onpopstate = e => loadComponent(document.location.href)

//const loadComponent = url =>  url === location.origin + location.pathname ? noHash() : getData(location.hash.replace('#',''));

loadComponent=(url)=>{
	if(url === location.origin + location.pathname){
		console.log('NO hash')
	}
	else{
		console.log("loadash",location.hash.replace("#",""))
		var x = location.hash.replace("#","");
		var split = x.split("/");
		if(split.length === 3){
			console.log("Split",split)
			singlePage(split[1],split[2])
		}
		else{
			getData(location.hash.replace('#',''))
		}
		
	}
}
console.log("href",document.location.href)
const openEntry = search!= "" ? _push(document.location.href) : '';


function noHash(){
	console.log("href",location.href)
}


function move(){
	console.log('animation')
	var elem = document.getElementById('myAnimation');
	var pos=0;
	clearInterval(id);
	id = setInterval(addPos(),1000);
	function addPos(){
		if(pos === 300){
			clearInterval(id);
		}
		else{
			pos++;
			elem.style.top = pos + "px";
			elem.style.left=pos + "px"

		}
	}
}
function getData(hashTag){
	
	var data = information.filter(function(el){
		return el.category == hashTag
	})

	
	if(data.length > 0){
		loadDefaultComponent(data,hashTag);
	}
	else{
		//loadDefaultComponent();
		//window.location='/index.php'
	}
}

let aside = document.querySelector('#aside');

let nav_link = aside.querySelectorAll('.card-nav-link');

let local = location.hash.replace('#','');
let replace_local = local.replace(/_/g," ")
//console.log('myLocal',local.replace(/_/g," "))
	for(var i=0;i<nav_link.length;i++){
		
		if(nav_link[i].innerText != replace_local){
			nav_link[i].classList.remove('active');
		}
		else{
			nav_link[i].classList.add('active');
		}
	}

aside.addEventListener('click',function(e){
	let x = aside.querySelectorAll('.card-nav-link');

	for(var i=0;i<x.length;i++){
		x[i].classList.remove('active');
	}
	e.target.classList.add('active')

})







function loadDefaultComponent(data=[],hashTag){
	
	
	const wrapper = document.getElementById('wrapper');
	let container = document.createElement('div')

	let titleDiv = document.createElement('div');

	let briefDiv = document.createElement('div');
	briefDiv.id="brief";
	

	titleDiv.classList.add('d-flex');
	titleDiv.classList.add('align-items-center');
	titleDiv.classList.add('justify-content-between')
	titleDiv.classList.add('mb-3')

	let titleH1 = document.createElement('h1');
	titleH1.classList.add('h2');
	titleH1.classList.add('text-light');
	titleH1.classList.add('mb-0')
	titleH1.appendChild(document.createTextNode(data[0]['category'].replace(/_/g," ")))
	titleDiv.appendChild(titleH1);

	let paragraph = document.createElement('p');
	paragraph.classList.add('text-light');
	paragraph.classList.add('pt-1');
	paragraph.classList.add('mb-4');
	paragraph.appendChild(document.createTextNode('The ' + data[0].category.toLowerCase() + ' is further categorized into ' + data[0]['subcategory'].length + ' subcategories.'))

	let ul = document.createElement('ul');
	ul.classList.add('nav');
	ul.classList.add('nav-tabs');
	ul.classList.add('nav-tabs-light');
	ul.classList.add('border-bottom');
	ul.classList.add('border-light');
	ul.classList.add('mb-4');
	ul.setAttribute('role','tablist');
	for(var i =0; i<data[0]['subcategory'].length;i++){
		
		var x = createLi_a(data[0]['subcategory'][i],i);
		ul.appendChild(x);
	}
	

	container.appendChild(titleDiv);
	container.appendChild(paragraph);
	container.appendChild(ul);
	container.appendChild(briefDiv)
	$("#wrapper").html(container)
	loadFirstSubcategory(hashTag);

	wrapper.addEventListener('click', function(e){
		//console.log(wrapper.children[0].children[2])
		//console.log(data[0])
		let trace = wrapper.children[0].children[2]
		let ul = trace.querySelectorAll('.active');
		let brief = document.querySelector('#brief');
		if(brief!="" && brief!= null){
			document.getElementById('brief').innerHTML="";
		}
		
		for (var i =0; i<ul.length;i++) {
			ul[i].classList.remove('active');
		}
		e.target.classList.add('active');
		var btn_title  = e.target.innerText;
		if(btn_title !="" && btn_title != null){
			if(data[0][btn_title].length > 1){
				for(var i=0;i<data[0][btn_title].length;i++){
					var content = briefDetails(data[0][btn_title][i],btn_title);
					$('#brief').append(content)
				}
			}
			else{
			var content = briefDetails(data[0][btn_title][0],btn_title);
				$('#brief').append(content)
			}
		}
		
		
	})
	
}

function createLi_a(li_name,index){
	var li = document.createElement('li');
	li.classList.add('nav-item')
	li.classList.add('mb');
	var a = document.createElement('a');
	a.classList.add('nav-link');
	if(index== 0){
		a.classList.add('active')
	}
	a.setAttribute('role','tab');
	a.setAttribute('aria-selected','false');
	a.appendChild(document.createTextNode(li_name));
	li.appendChild(a);
	return li;

}

function briefDetails(data,btntitle){
	
	let hash = location.hash.replace("#",'');
	let url = data['imageUrl'][0];
	let name = data['name'];
	let revamped=name.replace(/ /g,"_");
	let category =btntitle.replace(/ /g,"_");
	console.log('data',category)
	let power = data['Maximum Power'];
	let boreXstroke = data['Bore x Stroke (mm)']
	
	let content = $(`	
			<div class="card card-light card-hover card-horizontal mb-4">
				<div class="tns-carousel-wrapper card-img-top card-img-hover carouselDiv" > <a class="img-overlay"  href="#${hash}/${category}/${revamped}" ><input type="hidden" id="${name}" value="${btntitle}"/></a>
                <div class="position-absolute start-0 top-0 pt-3 ps-3"><span class="d-table badge bg-info">New</span></div>
                
                <div class="w-100 h-100">
                  <img class="bg-size-cover bg-position-center w-100 h-100" src="${url}" style=""/>
                  
                </div>
              </div>
              
              <div class="card-body position-relative">
                
                <div class="fs-sm text-light pb-1">${power}</div>
                <h3 class="h6 mb-1" style="color:#fff"><a class="nav-link-light" href="#"></a>${name}</h3>
                <div class="text-primary fw-bold mb-1">${boreXstroke}</div>
                <div class="fs-sm text-light opacity-70"><i class="fi-map-pin me-1"></i>Boulos Enterprise Limited</div>
                <div class="border-top border-light mt-3 pt-3">
                  <div class="row g-2">
                    <div class="col me-sm-1">
                      <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-dashboard d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">32K mi</span></div>
                    </div>
                    <div class="col me-sm-1">
                      <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-gearbox d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Manual</span></div>
                    </div>
                    <div class="col">
                      <div class="bg-dark rounded text-center w-100 h-100 p-2"><i class="fi-petrol d-block h4 text-light mb-0 mx-center"></i><span class="fs-xs text-light">Gasoline</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>`)
	return content;
}
function loadFirstSubcategory(hashTag){
	let x = document.querySelector('#brief');
	var data = information.filter(function(el){
		return el.category == hashTag
	})
	
	if(hashTag === "TWO_WHEELERS"){

		if(data[0]['Standard Bikes'].length > 0){
			
			for(var i=0;i<data[0]['Standard Bikes'].length;i++){
				var content = briefDetails(data[0]['Standard Bikes'][i],'Standard Bikes');
				$('#brief').append(content)
			}
		}
		
	}
	else if(hashTag === "THREE_WHEELERS"){
		if(data[0]['Galaxy Cargo Tricycle'].length > 0){
			
			for(var i=0;i<data[0]['Galaxy Cargo Tricycle'].length;i++){
				var content = briefDetails(data[0]['Galaxy Cargo Tricycle'][i],'Galaxy Cargo Tricycle');
				$('#brief').append(content)
			}
		}
		
	}
	else if(hashTag === "FOUR_WHEELERS"){

		if(data[0]['Suzuki Super Carry'].length > 0){
			//console.log(data[0]['Suzuki Super Carry'].length)
			for(var i=0;i<data[0]['Suzuki Super Carry'].length;i++){
				var content = briefDetails(data[0]['Suzuki Super Carry'][i],"Suzuki Super Carry");
				$('#brief').append(content)
			}
		}
		
	}
	
}





function extract(){
	console.log('TEMI')
	let carouselDiv = document.querySelector('.carouselDiv')
	
	
	//let wrapper = document.getElementById('wrapper');
	if(carouselDiv != null){
		carouselDiv.addEventListener('click',function(e){
			let subcategory = e.target.firstChild.value;
			let productname = e.target.firstChild.id
			
			singlePage([subcategory,productname])
		})
		

	}
	else{
		console.log('carouselDivNull',carouselDiv)
	}

}
	




function singlePage(subcategory,p_name){
	
	var replace = p_name.replace(/_/g," ")
	

	const category = location.hash.replace('#','').split("/");
	document.querySelector('aside').style.display="none";
	document.querySelector('#mybody').style.display="none";
	let nav = document.querySelector('.breadcrumb')
	let remove_nav = document.querySelectorAll('.breadcrumb-item')

	for(var i=0;i<remove_nav.length;i++){
		remove_nav[i].classList.remove('active');
	}

	let new_li = document.createElement('li');
	new_li.classList.add('breadcrumb-item')
	new_li.classList.add('active')
	new_li.setAttribute('aria-current','page');
	new_li.appendChild(document.createTextNode(p_name))
	
	if(nav.children.length > 2){
		nav.removeChild(nav.children[2]);
		
	}
	nav.appendChild(new_li);
	document.querySelector('#Vechiles').style.cursor="pointer"

	document.querySelector('#Vechiles').addEventListener('click',function(){
		var split = location.hash.replace('#','').split("/");
		var url = location.origin + location.pathname +"#"+ split[0];
		//nav.removeChild(nav.lastChild)
		document.querySelector('#singlepage').style.display="none";
		document.querySelector('aside').style.display="";
		document.querySelector('#mybody').style.display="";
		window.location=url
	})
	document.querySelector('#singlepage').style.display="";
	var dataDisplay = information.filter(function(el){
		return el.category == category[0]
	})
	console.log('subcategory_replaced',subcategory.replace(/_/g,' '))
	console.log('actual',actual)
	var actual = dataDisplay[0][subcategory.replace(/_/g,' ')].filter(function(el){
		return el.name == replace
	})
	
	displaySinglePage(actual)

}
