const slideNav = document.querySelector('.slide');
const slides = document.querySelectorAll('.slide-item');
const owls = document.querySelectorAll('.owl-btn');
let index = 0;

var manualNav = function(manual) {
    owls.forEach(owl => {
        owl.classList.remove('active');
    })

    owls[manual].classList.add('active');
}

var repeat = function () {

    let i = 0;

    var repeater = () => {
        setTimeout(function () {

            owls.forEach(owl => {
                owl.classList.remove('active');
            })

            owls[i].classList.add('active');
            slideNav.style.transform = `translate3d(${i * -100}%, 0, 0)`;

            i++;

            if (i > 3) {
                i = 0;
            }

            repeater();

        }, 2000)

    }

    repeater();
}

repeat();

owls.forEach((owl, e) => {
    owl.addEventListener('click' , () => {
        index = e;
        manualNav(e);

        slideNav.style.transform = `translate3d(${index* -100}%, 0, 0)`;
    })
})