$(function () {

    $('.logo').click(function () {
        $('html, body').animate({
            scrollTop: $('#granDia').offset().top
        });
        return false;
    });

    iniciarReloj();

    // Get the navbar
    var navbar = document.getElementById("mainNav");
    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    $(window).scroll(function () {
        navbarScroll();
    });

    linksActivosControl();

    $('#menu-info>div').mouseenter(function (e) {
        $(e.currentTarget).toggleClass('menu-info-selected');
        $(e.currentTarget).find('div').toggleClass('circle');
        $(e.currentTarget).find('i').toggleClass('icono');
    }).mouseleave(function (e) {
        $(e.currentTarget).toggleClass('menu-info-selected');
        $(e.currentTarget).find('div').toggleClass('circle');
        $(e.currentTarget).find('i').toggleClass('icono');
    });

    $("select#asistencia-boda-form").change(function () {
        var selectedOption = $(this).children("option:selected").val();
        if (selectedOption === 'SI') {
            $('input#nAdultos').prop("disabled", false);
            $('input#nNinios').prop("disabled", false);
            $('textarea#alergias-asistencia').prop("disabled", false);
            $('textarea#comentarios-asistencia').prop("disabled", false);
            $('input#asistencia-preboda-form-si').prop("disabled", false);
            $('input#asistencia-preboda-form-no').prop("disabled", false);
        } else {
            $('input#nAdultos').prop("disabled", true);
            $('input#nNinios').prop("disabled", true);
            $('textarea#alergias-asistencia').prop("disabled", true);
            $('textarea#comentarios-asistencia').prop("disabled", true);
            $('input#asistencia-preboda-form-si').prop("disabled", true);
            $('input#asistencia-preboda-form-no').prop("disabled", true);
        }
    });

    function iniciarReloj() {
        var clock;

        // Grab the current date
        var currentDate = new Date();

        // Set some date in the future. In this case, it's always Jan 1
        var futureDate = new Date(2020, 5, 20);
        futureDate.setHours(19, 30, 0, 0);

        console.log(futureDate);

        // Calculate the difference in seconds between the future and current date
        var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

        // Instantiate a coutdown FlipClock
        clock = $('.clock').FlipClock(diff, {
            clockFace: 'DailyCounter',
            countdown: true,
            language: 'es'
        });
    }

    function navbarScroll() {
        if (window.pageYOffset >= sticky) {
            $('#mainNav').addClass('fixedNav');
            $('#mainNav img').addClass('size-change-img');
        } else {
            $('#mainNav').removeClass('fixedNav');
            $('#mainNav img').removeClass('size-change-img');
        }
    }

    function linksActivosControl() {
        let mainNavLinks = document.querySelectorAll("#mainNav a");
        let mainSections = document.querySelectorAll("main section");

        let lastId;
        let cur = [];

        window.addEventListener("scroll", event => {
            let fromTop = window.scrollY;

            mainNavLinks.forEach(link => {

                let section = document.querySelector(link.hash);

                if (
                    section.offsetTop <= fromTop &&
                    section.offsetTop + section.offsetHeight > fromTop
                ) {
                    link.classList.add("active");
                } else {
                    link.classList.remove("active");
                }
            });
        });
    }

});
