$(document).ready(function() {
    $('#hotel_slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 7000,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                }
            }
        ]
    });

    $('#main_news_slider').slick({
        dots: true,
        arrows: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7000
    });

    $('#sponsorship_slider').slick({
        dots: true,
        arrows: false,
        speed: 400,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 10000,
    });

    $('.search_bar').hide();
    $('#nav-search').click(function() {
        $('.search_bar').slideToggle();
    });

    AOS.init();

    $('#my_star5').click( function() {
        $(this).addClass('text-warning'); 
        $('#my_star4').addClass('text-warning');
        $('#my_star3').addClass('text-warning');
        $('#my_star2').addClass('text-warning');
        $('#my_star1').addClass('text-warning');
    });
    $('#my_star4').click( function() {
        $(this).addClass('text-warning');
        $('#my_star5').removeClass('text-warning'); 
        $('#my_star3').addClass('text-warning');
        $('#my_star2').addClass('text-warning');
        $('#my_star1').addClass('text-warning');
    });
    $('#my_star3').click( function() {
        $(this).addClass('text-warning'); 
        $('#my_star5').removeClass('text-warning');
        $('#my_star4').removeClass('text-warning');
        $('#my_star2').addClass('text-warning');
        $('#my_star1').addClass('text-warning');
    });
    $('#my_star2').click( function() {
        $(this).addClass('text-warning'); 
        $('#my_star5').removeClass('text-warning');
        $('#my_star4').removeClass('text-warning');
        $('#my_star3').removeClass('text-warning');
        $('#my_star1').addClass('text-warning');
    });
    $('#my_star1').click( function() {
        $(this).toggleClass('text-warning');
        $('#my_star5').removeClass('text-warning');
        $('#my_star4').removeClass('text-warning');
        $('#my_star3').removeClass('text-warning');
        $('#my_star2').removeClass('text-warning'); 
    });

    $('#banner_hotel_slider').slick({
        dots: true,
        arrows: false,
        slidesToScroll: 1,
        slidesToShow: 1,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 5000,
    });
});
