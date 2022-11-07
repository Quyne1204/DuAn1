const tabActive = document.querySelectorAll('.tab');
const tabBanner = document.querySelectorAll('.tab-banner');
let actIndex = 0;

var indexActive = (act) => {
    tabActive.forEach(tab => {
        tab.classList.remove('active');
    })

    tabBanner.forEach(banner => {
        banner.classList.remove('active');
    })


    tabActive[act].classList.add('active');
    tabBanner[act].classList.add('active');

}


tabActive.forEach((tab, i) => {
    tab.addEventListener('click', () => {
        indexActive(i);
        actIndex = i;
    })

})