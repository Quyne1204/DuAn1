const headerBox = document.querySelector('.header-box');

window.addEventListener('scroll', () => {
    
    if (window.scrollY > 117) {
        headerBox.classList.add('active');
    } else {
        headerBox.classList.remove('active');
    }

})
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}