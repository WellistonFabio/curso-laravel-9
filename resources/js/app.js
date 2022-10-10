import './bootstrap';
import.meta.glob([
    '../img/**',
]);

// funções

function maiuscula(string){
    res = string.value.toUpperCase();
    string.value =res;
}

function minuscula(string){
    res = string.value.toLowerCase();
    string.value = res;
}

function Atualizar(url) {
    window.location.replace(url);
}

function focoItem(item){
    const styliItem = item.parentNode.querySelector("label")
    console.log(styliItem)
    if(item.value){
        if (styliItem.classList != "itemInput"){styliItem.classList.add("itemInput")}
    }else{
        if (styliItem.classList.value == "itemInput"){styliItem.classList.remove("itemInput")}
    }
}

const selcs = document.querySelectorAll('select')
for ( selc of selcs){if(selc.value){focoItem(selc)}}

const textAreas = document.querySelectorAll('textarea')
for ( textArea of textAreas){if(textArea.value){focoItem(textArea)}}

const itens = document.querySelectorAll('input')
for (iten of itens){if(iten.value){focoItem(iten)}}

// nav
// search-box open close js code
let navbar = document.querySelector(".navbar");
let searchBox = document.querySelector(".search-box .bx-search");

// let searchBoxCancel = document.querySelector(".search-box .bx-x");
searchBox.addEventListener("click", ()=>{
    navbar.classList.toggle("showInput");
    if(navbar.classList.contains("showInput")){
        searchBox.classList.replace("bx-search" ,"bx-x");
    }else {
        searchBox.classList.replace("bx-x" ,"bx-search");
    }
});

// sidebar open close js code
let navLinks = document.querySelector(".nav-menu");
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let menuCloseBtn = document.querySelector(".nav-menu .bx-x");
menuOpenBtn.onclick = function() {
    navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
    navLinks.style.left = "-100%";
}


// sidebar submenu open close js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
    navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
    navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
    navLinks.classList.toggle("show3");
}
