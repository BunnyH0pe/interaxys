const swiper = new Swiper('.swiper-container', {
    autoplay: {
        delay: 5000,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: true,
    },
    speed:400,
    spaceBetween: 0,
    slidesPerView: 1,
    loopedSlides: 3,
    // Optional parameters
    direction: 'horizontal',
    effect:'slide',
    loop: true,
    loopPreventsSlide : false,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable : true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    on: {
        slideChangeTransitionEnd: function () {
            $('.slidertitre').addClass('glitch');
            setTimeout(function (){
                $('.slidertitre').removeClass('glitch');
            },1000);

        },
    },
});

/*const swiper2 = new Swiper('.swiper-container2', {
    autoplay: {
        delay: 5000,
        disableOnInteraction : true,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: true,
    },
    coverflowEffect: {
        slideShadows: false,
    },
    slideToClickedSlide : true,
    noSwiping: true,
    allowTouchMove:false,
    speed:600,
    spaceBetween: 0,
    slidesPerView: '3',
    centeredSlides:true,
    // Optional parameters
    direction: 'horizontal',
    effect:'coverflow',
    on: {
        click: function (){
            swiper2.autoplay.stop();
        },
        afterInit: function (){
            //$('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').find('.logoslide').css('margin','20px auto 20px auto');
            //$('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').find('.invisible-text').slideDown(500);

        },
        slideChangeTransitionStart: function () {
           // $('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').css('opacity','1');
            //$('#savoir-faire .swiper-slide-prev, #savoir-faire .swiper-slide-duplicate-prev').css('opacity','1');
            //$('#savoir-faire .swiper-slide-next, #savoir-faire .swiper-slide-duplicate-next').css('opacity','1');
            //$('#savoir-faire .swiper-slide').not('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active, #savoir-faire .swiper-slide-next, #savoir-faire .swiper-slide-duplicate-next, #savoir-faire .swiper-slide-prev, #savoir-faire .swiper-slide-duplicate-prev ').css('opacity','0');
            //$('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').find('.logoslide').css('margin','20px auto 20px auto');
            //$('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').find('.invisible-text').slideDown(500);
            //$('#savoir-faire .swiper-slide-next, #savoir-faire .swiper-slide-duplicate-next').find('.invisible-text').slideUp(400);
            //$('#savoir-faire .swiper-slide-prev, #savoir-faire .swiper-slide-duplicate-prev').find('.invisible-text').slideUp(400);
            //$('#savoir-faire .swiper-slide-next, #savoir-faire .swiper-slide-duplicate-next').find('.logoslide').css('margin','112px auto 20px auto');
            //$('#savoir-faire .swiper-slide-prev, #savoir-faire .swiper-slide-duplicate-prev').find('.logoslide').css('margin','112px auto 20px auto');
        },
    },
}); */

const swiper2 = new Swiper('.swiper-container2', {
    autoplay: {
        delay : 8000,
    },
    direction: 'horizontal',
    effect:'coverflow',
    breakpoints :{
        720: {
            slidesPerView: '1.2',
            spaceBetween: 20
        },

        920: {
            slidesPerView: '1.5',
            spaceBetween: 20
        },

        1080: {
            slidesPerView:'1.8',
            spaceBetween: 20
        }
    },
    speed:800,
    spaceBetween: 0,
    slidesPerView: '1.1',
    centeredSlides:true,
    loop: true,
    coverflowEffect: {
        slideShadows: false,
        rotate: 40,
        stretch: 100,
        depth : 200,
    },
    slideToClickedSlide : true,
    followFinger :false,
    on: {
        click: function (){
            swiper.autoplay.stop()
        },
        afterInit: function (){
            //$('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').find('.logoslide').css('margin','20px auto 20px auto');
            $('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').find('.invisible-text').slideDown(500);
        },
        slideChangeTransitionStart: function () {
            if (window.innerWidth < 780){
                $('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').find('.absolutelogo').css('top','10%');
            }else{
                $('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').find('.absolutelogo').css('top','15%');
            }
            $('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').find('.invisible-text').slideDown(500);
            $('#savoir-faire .swiper-slide-next, #savoir-faire .swiper-slide-duplicate-next').find('.invisible-text').slideUp(400);
            $('#savoir-faire .swiper-slide-prev, #savoir-faire .swiper-slide-duplicate-prev').find('.invisible-text').slideUp(400);
            $('#savoir-faire .swiper-slide-next, #savoir-faire .swiper-slide-duplicate-next').find('.absolutelogo').css('top','50%');
            $('#savoir-faire .swiper-slide-prev, #savoir-faire .swiper-slide-duplicate-prev').find('.absolutelogo').css('top','50%');
            $('#savoir-faire .swiper-slide-next, #savoir-faire .swiper-slide-duplicate-next').css('cursor','pointer');
            $('#savoir-faire .swiper-slide-prev, #savoir-faire .swiper-slide-duplicate-prev').css('cursor','pointer');
            $('#savoir-faire .swiper-slide-active, #savoir-faire .swiper-slide-duplicate-active').css('cursor','initial');
        },
    }
})

const swiper3 = new Swiper('.swiper-container3', {
    autoplay: {
        delay: 3000,
    },
    breakpoints :{
        920: {
            slidesPerView: '3',
        },
        1200: {
            slidesPerView:'4'
        }
    },
    keyboard: {
        enabled: false,
    },
    speed:400,
    slidesPerView : 2,
    spaceBetween: 0,
    // Optional parameters
    direction: 'horizontal',
    effect:'slide',
    loop: true,
});