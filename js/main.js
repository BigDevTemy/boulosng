const introText = `<div class="introContainer">
<h1 class="h2 text-light">Introduction</h1>
<div class="text-light pt-1">Get to know us better</div>
<hr style="border: 0.5px solid #d3d3d3; opacity: 0.6;" class="mt-4" />
<div style="text-align: justify;">
  <p class="introduction__text mt-4">
    Boulos Enterprises Limited offers the public high quality products carefully made to suit the Nigerian
    climate and road conditions. What distinguishes it from competitors is its exceptional range of products
    designed to meet the demand of the market in terms of customer satisfaction.
  </p>
  <p>
    Boulos Enterprises Limited is the sole distributors of Suzuki, and Haojue in Nigeria. In addition, it
    carries bikes with engine capacity ranging from 110CC- 1800CC and Suzuki Outboard Engines, Motor Bikes,
    Vans, ATVs, Buses, etc…
  </p>
  <p>
    A great deal of priority is placed on after sales service support in terms of provision and availability
    of genuine spare parts backed up by professionally trained engineers and technicians because BEL is not
    only sales oriented, but market focused in delivering satisfaction to our customers and partners for life.
    This has improved our friendship with customers thereby giving BEL a competitive edge over other
    automotive products in the market.
  </p>
</div>
</div>`;

const visionText = `<div class="visionContainer">
<h1 class="h2 text-light">Our Vision</h1>
<div class="text-light pt-1">Get to know what we're driving towards</div>
<hr style="border: 0.5px solid #d3d3d3; opacity: 0.6;" class="mt-4" />
<div style="text-align: justify;">
  <p class="introduction__text mt-4">
  To be a leading company in Africa providing quality products and services to its numerous customers and upholding distinction in all we do.
  </p>
</div></div>`;

const missionText = `
<h1 class="h2 text-light">Our Mission</h1>
<div class="text-light pt-1">How we plan to get there</div>
<hr style="border: 0.5px solid #d3d3d3; opacity: 0.6;" class="mt-4" />
<div style="text-align: justify;">
  <p class="introduction__text mt-4">
  To be a leading company in terms of market share, administering our intellectual capital effectively and utilizing modern technology for the benefit of the society and environment.
  </p>
</div>`;

const valueText = `
<h1 class="h2 text-light">Our Values</h1>
<div class="text-light pt-1">What we stand for as an organisation</div>
<hr style="border: 0.5px solid #d3d3d3; opacity: 0.6;" class="mt-4" />
<div style="text-align: justify;">
  <ul class="mt-4">
    <li>Innovation</li>
    <li>Professionalism</li>
    <li>Customer Focus</li>
    <li>Solid Responsibility</li>
    <li>Team Spirit</li>
    <li>Integrity</li>
  </ul>
</div>`;

const historyText = `
<h1 class="h2 text-light">Our History</h1>
<div class="text-light pt-1">The Journey: How it all started</div>
<hr style="border: 0.5px solid #d3d3d3; opacity: 0.6;" class="mt-4" />
<div style="text-align: justify;">
  <p class="introduction__text mt-4">
  In 1936, a gentleman by the name of Georges Boulos opened a small Jewellery business on Broad Street, Lagos Nigeria.  This small business, unknown at that time, was to be the foundations of a family empire and birth of Boulos Enterprises Limited and other subsidiaries under the umbrella of the Boulos Group.
  </p>
  <p class="introduction__text mt-4">
  In 1943, Messrs Antoine & Gabriel Boulos delved into the new industry of motorcycles with business relationships developed with the Europeans.
  </p>
  <p class="introduction__text mt-4">
  Boulos Enterprises Limited (BEL) was incorporated in 1964 by the Boulos brothers Anthony and Gabriel Boulos. The main focus of their business initially, was trading and incorporation of general merchandise including some brands of motorcycles from Western Europe. After a few years, they concentrated on the importation of new Suzuki motorcycles and outboard motors to Nigeria from Japan and since then it remained a leading motorcycle and outboard motors distribution company in Nigeria.
  </p>
  <p class="introduction__text mt-4">
  The continued growth in Suzuki motorcycle and Suzuki Outboard motors business in later years stimulated the company to establish the first assembly plant in the country at Oregun, Ikeja Nigeria in 1969 and assembling plant for outboard motors in 1978.  It is worthy to note this was implemented at the initiative of the company as all other competitors in the country were still importing fully built up motorcycles and outboard motors  which were subsequently banned in 1978.  In the 2010, the tricycle assembly plant( Keke) was established.
  </p>
  <p class="introduction__text mt-4">
  The ban of fully built motorcycles gave the company the impetus to embark on manufacturing and assembly plant. Considering the bright future of automobile business in Nigeria and state of technology, the company embarked on the construction of phased integrated motorcycles manufacturing complex located at its present 25 acre plot at Ogba Industrial Scheme Ikeja. This was done on a view to meet growth in the business and develop a real manufacturing complex which was established in 1980. The present integrated plant has an installed capacity of 150,000 units for motorcycles, over 1000 units for outboards and over 14,000 assembling per annum on a single 8-hours shift per working day.
  </p>
  <p class="introduction__text mt-4">
  Most of the outboard motors are currently imported in fully built up condition from Suzuki Motors Corporation Japan, owing to the absence of import duty differential between completely knocked down (CKD) and fully built up (CBU) outboard motors in Nigeria.
  </p>
  <p class="introduction__text mt-4">
  The motorcycle plant and Tricycle plant assembling facility have their own independent service utilities backed up system.
  </p>
</div>`;

// Selecting the Element
const aboutContainer = document.querySelector(".aboutContainer");
const introItem = document.querySelector(".introItem");
const visionItem = document.querySelector(".visionItem");
const missionItem = document.querySelector(".missionItem");
const valuesItem = document.querySelector(".valuesItem");
const historyItem = document.querySelector(".historyItem");

// Load the Introduction Text on load
window.addEventListener("load", () => {
  document.querySelector(".card-nav-link").classList.add("active");
  document.querySelector(".aboutContainer").insertAdjacentHTML("afterbegin", introText);
});

let parentElement = document.querySelector("#sidebarContainer");
parentElement.addEventListener("click", function (e) {
  let check_active = parentElement.querySelectorAll(".card-nav-link");

  for (var i = 0; i < check_active.length; i++) {
    if (check_active[i].classList != "active") {
      check_active[i].classList.remove("active");
    }
  }
  e.target.classList.add("active");

  if (e.target.innerText === "Introduction") {
    document.getElementById("mybody").innerHTML = "";
    document.querySelector(".aboutContainer").insertAdjacentHTML("afterbegin", introText);
  }
  if (e.target.innerText === "Our Vision") {
    document.getElementById("mybody").innerHTML = "";
    document.querySelector(".aboutContainer").insertAdjacentHTML("afterbegin", visionText);
  }
  if (e.target.innerText === "Our Mission") {
    document.getElementById("mybody").innerHTML = "";
    document.querySelector(".aboutContainer").insertAdjacentHTML("afterbegin", missionText);
  }
  if (e.target.innerText === "Our Values") {
    document.getElementById("mybody").innerHTML = "";
    document.querySelector(".aboutContainer").insertAdjacentHTML("afterbegin", valueText);
  }
  if (e.target.innerText === "Our History") {
    document.getElementById("mybody").innerHTML = "";
    document.querySelector(".aboutContainer").insertAdjacentHTML("afterbegin", historyText);
  }
});

//const sidebarParent = document.querySelector("aside").addEventListener("click", (e) => {
//contentBody = e.target.innerText;

// console.log(contentBody);

console.log("==================TEST=====================");
