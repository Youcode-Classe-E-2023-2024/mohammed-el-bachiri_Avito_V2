const menu = document.querySelector('#menu');
const btn = document.querySelector('#profile_btn');
btn.addEventListener('click', ()=>{
    if (menu.style.display === 'none'){
        menu.style.display = 'flex';
    } else {
        menu.style.display = 'none';
    }
});
