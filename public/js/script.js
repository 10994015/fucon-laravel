const header = document.getElementById('header');
const menuBar = document.getElementById('menu-bar');
const loading  =document.getElementById('loading');
let isMenuOpen = false;
window.addEventListener('scroll', ()=>{
    if(this.scrollY > 100){
        header.classList.add('active')
    }else{
        header.classList.remove('active')
    }
    if(this.scrollY > 500){
        totop.classList.add('active')
    }else{
        totop.classList.remove('active')
    }
})
menuBar.addEventListener('click',()=>{
    isMenuOpen = !isMenuOpen;
    if(isMenuOpen){
        nav.style.top = "0";
        menuBar.classList.add('fa-times');
    }else{
        nav.style.top = "-100%";
        menuBar.classList.remove('fa-times');
    }
})
setTimeout(()=>{
    loading.style.display = "none"
}, 1000)