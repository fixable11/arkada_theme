$(document).ready(function ($) {
        $('.popup-btn').on('click', function (event) {
            $('.popup-call').fadeIn();
        });
        $('.popup-close').on('click', function (event) {
            $('.popup-call').fadeOut();
            $('.popup-thanks').fadeOut();
        });
        $('.thanks-btn').on('click', function (event) {
            $('.popup-thanks').fadeOut();
        });
        $('#manager-call').on('click', function (event) {
            $('.popup-call').fadeIn();
        });

        jQuery(function ($) {
            $("#phone-1").mask("+7 (999) 999-9999");
            $("#phone-2").mask("+7 (999) 999-9999");
            $("#phone-3").mask("+7 (999) 999-9999");
            $("#phone-4").mask("+7 (999) 999-9999");
        });

        $('.slider_ex').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: '<button type="submit" class="prev"></button>',
            nextArrow: '<button type="submit" class="next"></button>',
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        adaptiveHeight: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

        $('#a-1').click(function () {
            $('#shop-cards-1').addClass('active');
            $('#shop-cards-2').removeClass('active');
            $('#shop-cards-3').removeClass('active');
            $('#shop-cards-4').removeClass('active');
            $('#shop-cards-5').removeClass('active');
            $('#a-1').addClass('active-color');
            $('#a-2').removeClass('active-color');
            $('#a-3').removeClass('active-color');
            $('#a-4').removeClass('active-color');
            $('#a-5').removeClass('active-color');
            // $('html, body').animate({scrollTop:$('#shop-cards-1').position().top}, 800);
        });
        $('#a-2').click(function () {
            $('#shop-cards-2').addClass('active');
            $('#shop-cards-1').removeClass('active');
            $('#shop-cards-3').removeClass('active');
            $('#shop-cards-4').removeClass('active');
            $('#shop-cards-5').removeClass('active');
            $('#a-2').addClass('active-color');
            $('#a-1').removeClass('active-color');
            $('#a-3').removeClass('active-color');
            $('#a-4').removeClass('active-color');
            $('#a-5').removeClass('active-color');
            // $('html, body').animate({scrollTop:$('#shop-cards-2').position().top}, 800);
        });
        $('#a-3').click(function () {
            $('#shop-cards-3').addClass('active');
            $('#shop-cards-2').removeClass('active');
            $('#shop-cards-1').removeClass('active');
            $('#shop-cards-4').removeClass('active');
            $('#shop-cards-5').removeClass('active');
            $('#a-3').addClass('active-color');
            $('#a-2').removeClass('active-color');
            $('#a-1').removeClass('active-color');
            $('#a-4').removeClass('active-color');
            $('#a-5').removeClass('active-color');
            // $('html, body').animate({scrollTop:$('#shop-cards-3').position().top}, 800);
        });
        $('#a-4').click(function () {
            $('#shop-cards-4').addClass('active');
            $('#shop-cards-2').removeClass('active');
            $('#shop-cards-3').removeClass('active');
            $('#shop-cards-1').removeClass('active');
            $('#shop-cards-5').removeClass('active');
            $('#a-4').addClass('active-color');
            $('#a-2').removeClass('active-color');
            $('#a-3').removeClass('active-color');
            $('#a-1').removeClass('active-color');
            $('#a-5').removeClass('active-color');
            // $('html, body').animate({scrollTop:$('#shop-cards-4').position().top}, 800);
        });
        $('#a-5').click(function () {
            $('#shop-cards-5').addClass('active');
            $('#shop-cards-2').removeClass('active');
            $('#shop-cards-3').removeClass('active');
            $('#shop-cards-4').removeClass('active');
            $('#shop-cards-1').removeClass('active');
            $('#a-5').addClass('active-color');
            $('#a-2').removeClass('active-color');
            $('#a-3').removeClass('active-color');
            $('#a-4').removeClass('active-color');
            $('#a-1').removeClass('active-color');
            // $('html, body').animate({scrollTop:$('#shop-cards-5').position().top}, 800);
        });

        $('#menu').slicknav({
            label: '',
            duration: 1000,
        });

        $('a[href^="#"]').on('click', function(e){     
            e.preventDefault();
            var href = $(this).attr('href');
            if(href.length > 1){
                $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800, 
                function(){
                    //window.location.hash = href;
                });
            };
        });


});
