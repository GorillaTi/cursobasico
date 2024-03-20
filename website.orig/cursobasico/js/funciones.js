$(document).ready(listo);

function listo() {
    $(".hamb").click(function (e) {
        e.preventDefault();
        //mostrando el menu responsivo el la clase mobile
        $("header .container nav").toggleClass("open");
        //Cambiando el icono de menu por una x
        //FIXME: corregir error del no mostrar ico
        // ! falla cambia el icono pero no retorna al anterior
        $(".hamb i").toggleClass("fa-xmark");
        //$(".fa-bars").toggleClass("fa-xmark");
    });
    // * Salta a la sección deseada
    $("header .container nav  a").click(function () {

        $("header .container nav").removeClass("open");
        $(".fa-bars").removeClass("fa-xmark");

        var dev = $(this).attr("href");

        $("html,body").animate({
            "scrollTop": $(dev).offset().top - 76
        })
    })

    // TODO crear la función para que desde VER MAS de INICIO salte a la sección que corresponda
}