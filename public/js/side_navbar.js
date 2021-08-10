document.addEventListener("DOMContentLoaded", () => {

  const showNavbar = (toggleId, navId, bodyId, headerId) =>{
  const toggle = document.getElementById(toggleId),
  nav = document.getElementById(navId),
  bodypd = document.getElementById(bodyId),
  headerpd = document.getElementById(headerId)
  const navshadow = document.getElementById('nav_bar_shadow');
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
      toggle.addEventListener('click', ()=>{
        // show navbar
        nav.classList.toggle('show');
        // change icon
        toggle.classList.toggle('bx-x');
        // add padding to header
        headerpd.classList.toggle('body-pd');
        navshadow.classList.toggle('d-block');
        // add padding to toggler
        toggle.style.setProperty('padding-left','20px');
        toggle.style.setProperty('transition','.5s');
        // remove padding if the sidebar is toggled
        if(toggle.classList.value === "bx bx-menu-alt-left") 
        toggle.style.removeProperty('padding-left')
      })
    }
  }
  
  showNavbar('header-toggle','nav-bar','body-pd','header');
});