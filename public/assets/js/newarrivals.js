var nxtico = "<i class='fas fa-chevron-right'></i>";
var prvico = "<i class='fas fa-chevron-left'></i>";

$('#new-arrivals-carousel').owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    dots: false,
    mouseDrag: true,
    touchDrag: true,
    navText: [prvico, nxtico],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1500: {
            items: 4
        }
    }
})