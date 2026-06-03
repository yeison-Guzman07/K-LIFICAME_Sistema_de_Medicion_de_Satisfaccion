document.addEventListener("DOMContentLoaded", function(){
    const bars = document.getElementById("bars");
    const menu = document.getElementById("menu");
    const bg_menu = document.getElementById("bg_menu");
    var activeMenu = false;

    const lowerInput = document.getElementById("lowerInput");
    const nav = document.getElementById("nav");
    var activeNav = false

    const accessibilityMenu = document.getElementById("accessibilityMenu");
    const accessMenu = document.getElementById("accessMenu");
    const bg_access = document.getElementById("bg_access");
    var activeAccessibility = false;
    
    lowerInput.addEventListener("click", function(){
        if(activeNav == false){
            nav.classList.add('activeNav');
            lowerInput.classList.add('activeLower');
            activeNav = true;

            menu.classList.remove('active1');
            bg_menu.classList.remove('active2');
            menu.classList.add('disable1');
            bg_menu.classList.add('disable2');
            activeMenu = false;

            accessMenu.classList.remove('activeAccess1');
            bg_access.classList.remove('activeAccess2');
            accessMenu.classList.add('disableAccess1');
            bg_access.classList.add('disableAccess2');
            activeAccessibility = false;
        }else{
            nav.classList.remove('activeNav');
            lowerInput.classList.remove('activeLower');
            activeNav = false;
        }
    });

    bars.addEventListener("click", function(){
        if(activeMenu == false){
            menu.classList.add('active1');
            bg_menu.classList.add('active2');
            menu.classList.remove('disable1');
            bg_menu.classList.remove('disable2');
            activeMenu = true;

            nav.classList.remove('activeNav');
            lowerInput.classList.remove('activeLower');
            activeNav = false;
        }else{
            menu.classList.remove('active1');
            bg_menu.classList.remove('active2');
            menu.classList.add('disable1');
            bg_menu.classList.add('disable2');
            activeMenu = false;
        }
    });

    bg_menu.addEventListener("click", function(){
        if(activeMenu == true){
            menu.classList.remove('active1');
            bg_menu.classList.remove('active2');
            menu.classList.add('disable1');
            bg_menu.classList.add('disable2');
            activeMenu = false;
        }
    });

    accessibilityMenu.addEventListener("click", function(){
        if(activeAccessibility == false){
            accessMenu.classList.add('activeAccess1');
            bg_access.classList.add('activeAccess2');
            accessMenu.classList.remove('disableAccess1');
            bg_access.classList.remove('disableAccess2');
            activeAccessibility = true;

            nav.classList.remove('activeNav');
            lowerInput.classList.remove('activeLower');
            activeNav = false;
        }else{
            accessMenu.classList.remove('activeAccess1');
            bg_access.classList.remove('activeAccess2');
            accessMenu.classList.add('disableAccess1');
            bg_access.classList.add('disableAccess2');
            activeAccessibility = false;
        }
    });

    bg_access.addEventListener("click", function(){
        if(activeAccessibility == true){
            accessMenu.classList.remove('activeAccess1');
            bg_access.classList.remove('activeAccess2');
            accessMenu.classList.add('disableAccess1');
            bg_access.classList.add('disableAccess2');
            activeAccessibility = false;
        }
    });
});