let iconMenu =  document.querySelector('.menu');
let iconExit = document.querySelector('.exit');
let menuList = document.querySelector('.ul-menu');



iconMenu.addEventListener('click', ()=>{
    ocultar(iconMenu);
    mostrar(iconExit);
    addAttributes()
})

iconExit.addEventListener('click', ()=>{
    ocultar(iconExit);
    mostrar(iconMenu);
    removeAttributes() 
})




function ocultar(className){
    className.classList.add('hidde')
    className.classList.remove('show')
}

function mostrar(className){
    className.classList.remove('hidde')
    className.classList.add('show')
}

function addAttributes(){
    iconExit.style.position = 'fixed';

    menuList.style.transform = 'scale(1.0)';
    menuList.style.position = 'fixed';
}


function removeAttributes(){
    iconExit.style.position = 'relative';

    menuList.style.transform = 'scale(0)';
    menuList.style.position = 'relative';
}