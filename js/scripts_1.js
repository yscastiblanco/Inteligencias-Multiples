/*!
    * Start Bootstrap - Agency v6.0.2 (https://startbootstrap.com/template-overviews/agency)
    * Copyright 2013-2020 Start Bootstrap
    * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-agency/blob/master/LICENSE)
    */
(function ($) {
    "use strict"; // Start of use strict

    // Smooth scrolling using jQuery easing
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - 72,
                    },
                    1000,
                    "easeInOutExpo"
                );
                return false;
            }
        }
    });

    // Closes responsive menu when a scroll trigger link is clicked
    $(".js-scroll-trigger").click(function () {
        $(".navbar-collapse").collapse("hide");
    });

    //Activacion de paginas 
    $(".page-section").hide();
    $(".1").click(function () {
        $(".page-section").hide();
        $(".page-section1").hide();
        $("#" + $(this).attr("id")).removeClass("1");
        $("#" + $(this).attr("id")).addClass("active");
        $("#pregunta" + $(this).attr("id")).show();

    });
    
    
   
    // Contador 
    let h1 = document.querySelector("h1");

    let centecimos = 0;
    let segundos = 60;
    let minutos = 5;

    // ejecutar intervalo
    swal('¡Bienvenido!', 'Tienes 6 minutos para responder todas las preguntas', 'info', {
        button: 'Iniciar'
    }).then((success) => {
        var interval = setInterval(run, 10);
    });
    
    function run() {
        
        if ((centecimos == 0) && (segundos == 0) && (minutos == 0)) {
            
            clearInterval(interval);
            swal({
                title: "Se te acabo el tiempo!",
                text: "¿Deseas intentarlo de nuevo?",
                icon: "error",
                buttons: ['No', 'Si'],
                dangerMode: true,
            }).then((success) => {
                if (success == 'Si') {
                    window.location.href = './questions.php';
                } else {
                    window.location.href = './index_logueo.html';
                }
            });
        } else {
            if (centecimos == 0) {
                --segundos;
                centecimos = 99;
                
                if(segundos == 0){
                    --minutos;
                    segundos = 60;
                }
            } else {
                --centecimos;
            }
            if(segundos < 10){
                $('#segundos').text('0'+segundos);
            }else{
                $('#segundos').text(segundos);
            }
            $('#minutos').text(minutos);
        }
    }
    
    

    // Activate scrollspy to add active class to navbar items on scroll
    $("body").scrollspy({
        target: "#mainNav",
        offset: 74,
    });

    // Collapse Navbar
    /** var navbarCollapse = function () {
       if ($("#mainNav").offset().top > 100) {
            $("#mainNav").addClass("navbar-shrink");
        } else {
            $("#mainNav").removeClass("navbar-shrink");
        }
    };**/
    // Collapse now if page is not at top
    //navbarCollapse();
    // Collapse the navbar when page is scrolled
    //$(window).scroll(navbarCollapse);
})(jQuery); // End of use strict
