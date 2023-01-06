// HEADER MOBILE

document.getElementById('show_menu').onclick = () => {
    let header = document.getElementById('main_header');
    let menuStatus = header.getAttribute('class');
    if(menuStatus === null || menuStatus === ''){
        header.classList.add('header_menu_on');
    }else{
        header.classList.remove('header_menu_on');
    }
};