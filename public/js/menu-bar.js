$(".logo-slider").slick({
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    dots: true,
    variableWidth: true,
    responsive: [{
        breakpoint: 600,
        settings: {
            arrows: false,
        }
    }]
});

function activarContador(x, y) {

    //alert("num");

    var num = document.getElementsByName("contador" + x)[0].value;

    num = parseInt(num, 10);
    if (isNaN(num))
        num = 1;
    if (num >= 30)
        num = 29;
    if (num <= 1)
        num = 1;

    if (y == 'menos' & num > 1)
        num = num - 1;
    if (y == 'plus')
        num = num + 1;

    document.getElementsByName("contador" + x)[0].value = num;
}