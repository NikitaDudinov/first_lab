document.addEventListener("DOMContentLoaded", (event) => {
    let burger_button = document.getElementById("burger_menu");
    let burger_menu = document.getElementById("burger__navigation");
    burger_button.addEventListener('click', (e)=>{
        burger_menu.style.display = 'flex';
    });
    burger_menu.addEventListener('click', (e)=>{
        burger_menu.style.display = 'none';
    });
  });