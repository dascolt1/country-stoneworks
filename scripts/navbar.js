window.addEventListener('scroll', function (e) {
    let top = this.scrollY;
    let nav = document.querySelector('.navbar');

    if(top > 60){
        nav.style.transition = 'opacity 800ms'; 
        nav.style.opacity = '.7';
    }

    if(top < 60) {
        nav.style.opacity = '1';
    }
    
});