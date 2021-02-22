window.addEventListener('scroll', function (e) {
    let top = this.scrollY;
    let nav = document.querySelector('.navbar');

    if(top > 70){
        nav.style.opacity = '.85';
    }

    if(top < 70) {
        nav.style.opacity = '1';
    }
    
});