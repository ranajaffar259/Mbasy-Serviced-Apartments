$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: true
            },
            1100: {
                items: 3,
                nav: true,
            }
        }
    })
})