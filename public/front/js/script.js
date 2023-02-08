
$('.the-slider').owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    rtl: true,
    autoplay: true,
    pagination: true,
    autoplayTimeout: 7500,
    smartSpeed: 2000,
    dragEndSpeed: 2000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    animate: true,
    navText: [
        "<i class='fa fa-chevron-right'></i> ",
        "<i class='fa fa-chevron-left'></i>"
    ],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0%";
}


