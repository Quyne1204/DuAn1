const headerBox = document.querySelector('.header-box');
const headerAction = document.querySelector('.header-action');

window.addEventListener('scroll', () => {
    
    if (window.scrollY > 117) {
        headerBox.classList.add('active');
        headerAction.style.height = '60px';
    } else {
        headerBox.classList.remove('active');
        headerAction.style.height = null;
    }

})
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

// 

const erMessage = document.querySelector('.er-message');

var messTime = setTimeout(() => {
    erMessage.style.visibility = 'hidden';
}, 3000);