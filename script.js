const toggle = document.getElementById('darkToggle');
toggle.addEventListener('change', function(){
    if(this.checked){
        document.body.style.background = '#121212';
        document.querySelector('.sidebar').style.background = '#1e1e1e';
        document.querySelectorAll('.menu-item, .submenu li, .section-title' ).forEach(item =>{
            item.style.color = '#ccc';
        });
    }else{
        document.body.style.background = '#f5f5f5';
        document.querySelector('.sidebar').style.background = '#fff';
        document.querySelectorAll('.menu-item, .submenu li, .section-title' ).forEach(item =>{
            item.style.color = '';
        });
    }
})
