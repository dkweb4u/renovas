const menuicon = document.querySelector('header .menu-icon');
const  navbar = document.querySelector('header .header-box nav');
const logoheight = document.querySelector('header .logo');
const herosection = document.querySelector('.hero');
const submenuToggle = document.querySelectorAll('header .header-box nav ul li.menu-item-has-children');
const header = document.querySelector('header');

menuicon.addEventListener('click',()=>{
    menuicon.classList.toggle("active");
    navbar.classList.toggle('active');
    if(navbar.classList.contains('active')){
        navbar.style.maxHeight = (window.innerHeight - logoheight.offsetHeight) + "px";
    }
    else{
        navbar.style.maxHeight = "0px";
    }
});

submenuToggle.forEach(menu =>{
   menu.addEventListener('click',()=>{
    menu.classList.toggle('active');
   });
});

if(window.innerWidth < 1200){
    herosection.style.paddingTop = (logoheight.offsetHeight + 50 ) +"px";
}

window.addEventListener('scroll',()=>{
   if(window.pageYOffset > logoheight.offsetHeight){
    header.classList.add('scroll');
   }
   else{
    header.classList.remove('scroll');
   }
});

const form = document.querySelector('.hero form');

form.addEventListener('submit',(e)=>{

e.preventDefault();

const number = '7871751238';

const formData = new FormData(e.target);

let url = `https://api.whatsapp.com/send?phone=91${number}&text=Hi,`;

for(let [name,value] of formData.entries()){
    if(value !=""){
        url +=`%0a${name}: ${value}`;
    }
}
window.open(url);
e.target.reset();
});