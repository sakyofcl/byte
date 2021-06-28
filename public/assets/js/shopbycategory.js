var nxtico = "<i class='fas fa-chevron-right'></i>";
var prvico = "<i class='fas fa-chevron-left'></i>";

$('#shop-by-category').owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    dots: false,
    navText: [prvico, nxtico],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 7
        }
    }
})