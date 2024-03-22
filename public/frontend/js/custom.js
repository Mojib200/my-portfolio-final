$(function () {
     "use strict";
    
    //	menufix starts

    var navOffset = $('.menu').offset().top;
    $(window).scroll(function () {
        var scrolling = $(this).scrollTop();
        if (scrolling > navOffset) {
            $('.menu').addClass('menufixed');
        } else {
            $('.menu').removeClass('menufixed');
        }
    });

    //	menufix ends
 
    
    //	teacher starts
    $('.tech-button.one').on("click", function () {
        $('.teacher-individual.individual').toggleClass('teacher-click');
        $('.individual .tech-button i').toggleClass('fal fa-times');
        $('.individual .tech-button i').toggleClass('fal fa-ellipsis-h');
        $('.individual ul').slideToggle('slow');
    });
    $('.tech-button.two').on("click", function () {
        $('.teacher-individual.individual-2').toggleClass('teacher-click-2');
        $('.individual-2 .tech-button i').toggleClass('fal fa-times');
        $('.individual-2 .tech-button i').toggleClass('fal fa-ellipsis-h');
        $('.individual-2 ul').slideToggle('slow');
    });
    $('.tech-button.three').on("click", function () {
        $('.teacher-individual.individual-3').toggleClass('teacher-click-3');
        $('.individual-3 .tech-button i').toggleClass('fal fa-times');
        $('.individual-3 .tech-button i').toggleClass('fal fa-ellipsis-h');
        $('.individual-3 ul').slideToggle('slow');
    });
    $('.tech-button.four').on("click", function () {
        $('.teacher-individual.individual-4').toggleClass('teacher-click-4');
        $('.individual-4 .tech-button i').toggleClass('fal fa-times');
        $('.individual-4 .tech-button i').toggleClass('fal fa-ellipsis-h');
        $('.individual-4 ul').slideToggle('slow');
    });
    $('.tech-button.five').on("click", function () {
        $('.teacher-individual.individual-5').toggleClass('teacher-click-5');
        $('.individual-5 .tech-button i').toggleClass('fal fa-times');
        $('.individual-5 .tech-button i').toggleClass('fal fa-ellipsis-h');
        $('.individual-5 ul').slideToggle('slow');
    });
    $('.tech-button.six').on("click", function () {
        $('.teacher-individual.individual-6').toggleClass('teacher-click-6');
        $('.individual-6 .tech-button i').toggleClass('fal fa-times');
        $('.individual-6 .tech-button i').toggleClass('fal fa-ellipsis-h');
        $('.individual-6 ul').slideToggle('slow');
    });
    $('.tech-button.seven').on("click", function () {
        $('.teacher-individual.individual-7').toggleClass('teacher-click-7');
        $('.individual-7 .tech-button i').toggleClass('fal fa-times');
        $('.individual-7 .tech-button i').toggleClass('fal fa-ellipsis-h');
        $('.individual-7 ul').slideToggle('slow');
    });
    $('.tech-button.eight').on("click", function () {
        $('.teacher-individual.individual-8').toggleClass('teacher-click-8');
        $('.individual-8 .tech-button i').toggleClass('fal fa-times');
        $('.individual-8 .tech-button i').toggleClass('fal fa-ellipsis-h');
        $('.individual-8 ul').slideToggle('slow');
    });
    //	teacher ends



    

    
    //	counter starts
    $('.counter-student').counterUp({
        delay: 20,
        time: 1000
    });
    $('.counter-teacher').counterUp({
        delay: 20,
        time: 2000
    });
    $('.counter-class').counterUp({
        delay: 20,
        time: 3000
    });
    $('.counter-pass').counterUp({
        delay: 20,
        time: 4000
    });
    //	counter ends   
    
    //gallary starts
    $('.gall-slide').slick({
        centerMode: true,
        centerPadding: '200px',
        slidesToShow: 4,
        prevArrow: '<i class="fal fa-angle-left prev"></i>',
        nextArrow: '<i class="fal fa-angle-right next"></i>',
        responsive: [
            {
                breakpoint: 1201,
                settings: {
                    centerMode: true,
                    centerPadding: '150px',
                    slidesToShow: 3
                }
    },
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
    },
            {
                breakpoint: 576,
                settings: {
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 2
                }
    },
            {
                breakpoint: 325,
                settings: {
                    centerMode: true,
                    centerPadding: '2px',
                    slidesToShow: 1
                }
    }
  ]
    });

    //    gallery venobox

    $('.venobox').venobox({
        spinner: 'three-bounce',
        spinColor: '#db9abc',
        overlayColor: 'rgba(6, 28, 65, 0.8)',
        border: '10px',
        bgcolor: '#db9abc',

    });

    //    gallery venobox


    //   gallary ends

    //testi-slide starts
    $('.testi-slide').slick({
        slidesToShow: 2,
        prevArrow: '<i class="fal fa-angle-left prev"></i>',
        nextArrow: '<i class="fal fa-angle-right next"></i>',
        arrows: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    arrows: false
                    
                }
    },
            {
                breakpoint: 576,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
    }
  ]

    });
    //  testi-slide ends

    //  top-to-button starts
    $('.top-to-button').click(function () {
        $('html,body').animate({
            scrollTop: 0
        }, 100);
    });
    //  top-to-button ends

    //    skill-progress-bar starts
    $('.pass-rate').LineProgressbar({
        percentage: 90,
        ShowProgressCount: true,
        fillBackgroundColor: '#aa005d',
        backgroundColor: '#ddd',
        radius: '5px',
        height: '10px',
        width: '100%'
    });
    $('.satisfaction-rate').LineProgressbar({
        percentage: 80,
        ShowProgressCount: true,
        fillBackgroundColor: '#64aa09',
        backgroundColor: '#ddd',
        radius: '5px',
        height: '10px',
        width: '100%'
    });
    $('.grooming-rate').LineProgressbar({
        percentage: 70,
        ShowProgressCount: true,
        fillBackgroundColor: '#eac81f',
        backgroundColor: '#ddd',
        radius: '5px',
        height: '10px',
        width: '100%'
    });


    //    skill-progress-bar ends

   
    

    
    
    
});