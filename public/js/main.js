jQuery(function ($) {
    'use strict',

        //#main-slider
        $(function () {
            $('#main-slider.carousel').carousel({
                interval: 8000
            });
        });


    // accordian
    $('.accordion-toggle').on('click', function () {
        $(this).closest('.panel-group').children().each(function () {
            $(this).find('>.panel-heading').removeClass('active');
        });

        $(this).closest('.panel-heading').toggleClass('active');
    });

    //Initiat WOW JS
    new WOW().init();

    // portfolio filter
    $(window).load(function () {
        'use strict';
        var $portfolio_selectors = $('.portfolio-filter >li>a');
        var $portfolio = $('.portfolio-items');
        $portfolio.isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });

        $portfolio_selectors.on('click', function () {
            $portfolio_selectors.removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            $portfolio.isotope({filter: selector});
            return false;
        });
    });

    // Contact form
    var form = $('#main-contact-form');
    form.submit(function (event) {
        event.preventDefault();
        var form_status = $('<div class="form_status"></div>');


        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'name': $('input[name=name]').val(),
                'email': $('input[name=email]').val(),
                'phone': $('input[name=phone]').val(),
                'message': $('textarea[name=message]').val(),
            },
            beforeSend: function () {
                form.prepend(form_status.html('<p><i class="fa fa-spinner fa-spin"></i> Идет отправка Email...</p>').fadeIn());
            }

        }).done(function (data) {
            form_status.html('<p class="text-success">' + data.message + '</p>').delay(3000).fadeOut();
        });
    });


    //goto top
    $('.gototop').click(function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });

    //Pretty Photo
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: false
    });



    $(window).scroll(function() {

        if($(this).scrollTop() != 0) {

            $('#toTop').fadeIn();

        } else {

            $('#toTop').fadeOut();

        }

    });

    $('#toTop').click(function() {

        $('body,html').animate({scrollTop:0},800);

    });


    $(".navbar-nav").on("click","a", function (event) {
        var id  = $(this).attr('href');
        var top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 2000);
    });


});




