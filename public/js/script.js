$('body').css('overflow','hidden');

$(window).on('load', function () {
        $("#preloader").fadeOut("1000");
        $('body').css('overflow','initial');
})

$(document).ready(function (){

    $('.menu-btn').on('click', function (){
       console.log('clicked')
    })

    const menuBtn = document.querySelector('.menu-btn');
    let menuOpen = false;
    menuBtn.addEventListener('click', () => {
        if(!menuOpen) {
            menuBtn.classList.add('open');
            menuOpen = true;
            $('.mobilenav').css('margin-left','0px');
        } else {
            $('.mobilenav').css('margin-left','100vw');
            menuBtn.classList.remove('open');
            menuOpen = false;
        }
    });


    console.log('ça marche !')
    $('.cardsol').hide();
    $('#cardphilo').show();
    CitationMaker();
    setInterval(CitationMaker,7000);

    //ANIMATION CITATION

    var citation = 1;
    var numberCitation = $('.citations div').length;
    console.log(numberCitation)

    function CitationMaker(){
        if (citation < numberCitation) {
            $('.citations div:nth-child('+ citation +')').show(1000);
            setTimeout(function () {
                $('.citations div:nth-child('+ citation +')').hide(1000);
                citation++
            }, 5000)
        }else{
            citation = 1
            $('.citations div:nth-child('+ citation +')').show(1000);
            setTimeout(function () {
                    $('.citations div:nth-child('+ citation +')').hide(1000);
                    citation++
            }, 5000)
        }
    }

    // ANIMATION BOULE

    var i = 0;
    var rotation = 0;
    var oldpositionscroll = 0;
    var positionscroll = $(document).scrollTop();
    var upscroll = 1;
    setInterval(function (){
        oldpositionscroll = positionscroll;
        positionscroll = $(document).scrollTop();
        if (oldpositionscroll > positionscroll){
            if (upscroll == 1){
                upscroll = 1;
            }else {
                upscroll = 1;
                i = 0 ;
            }
        }else if(oldpositionscroll < positionscroll){
            if (upscroll == 0){
                upscroll = 0;
                i += 0.5;
            }else {
                upscroll = 0;
                i = 0;
                i += 0.5;
            }
            rotation = positionscroll + i;
        }
        if (upscroll == 1){
            i+= 0.5;
            rotation = positionscroll - i;
        }else{
            i += 0.5;
            rotation = positionscroll + i;
        }
        console.log(upscroll)
        $('#imgtourne').css('transform','rotate('+ rotation +'deg)');
    }, 20)

    //SCROLL TO

    $('nav a, .linkdown').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top - 20
        }, 500);
        return false;
    });

    //HOVER FOOTER

    $("#facebook").mouseover(function() {
        $(this).attr('src','../img/001-facebook-hover.svg')
    }).mouseout(function (){
        $(this).attr('src','../img/001-facebook.svg')
    });

    $("#linkedin").mouseover(function() {
        $(this).attr('src','../img/010-linkedin-hover.svg')
    }).mouseout(function (){
        $(this).attr('src','../img/010-linkedin.svg')
    });

    $("#twitter").mouseover(function() {
        $(this).attr('src','../img/013-twitter-hover.svg')
    }).mouseout(function (){
        $(this).attr('src','../img/013-twitter.svg')
    });

    // NAVBAR

    var positionscroll = $(document).scrollTop();
    var limitnav = 40;

    if( positionscroll > 40){
        if (positionscroll < 650){
            $('nav a').css('border-bottom','0');
            $('nav a p').css('margin-bottom','0').css('color','#E6E6E6').css('font-size','18px');
        }
        if ( positionscroll > 650 && positionscroll < 2400 ){
            $('#presentationlink').css('border-bottom','#94C8EE solid 5px');
            $('#presentationlink p').css('margin-bottom','-5px').css('color','#94C8EE').css('font-size','20px');
            $('nav a').not('#presentationlink').css('border-bottom','#94C8EE solid 0');
            $('nav p').not('#presentationlink p').css('margin-bottom','0').css('color','#E6E6E6').css('font-size','18px');
        }
        if ( positionscroll > 2400 && positionscroll < 3500  ){
            $('#solutionslink').css('border-bottom','#94C8EE solid 5px');
            $('#solutionslink p').css('margin-bottom','-5px').css('color','#94C8EE').css('font-size','20px');
            $('nav a').not('#solutionslink').css('border-bottom','#94C8EE solid 0');
            $('nav p').not('#solutionslink p').css('margin-bottom','0').css('color','#E6E6E6').css('font-size','18px');
        }
        if ( positionscroll > 3500 && positionscroll < 4400  ){
            $('#savoir-fairelink').css('border-bottom','#94C8EE solid 5px');
            $('#savoir-fairelink p').css('margin-bottom','-5px').css('color','#94C8EE').css('font-size','20px');
            $('nav a').not('#savoir-fairelink').css('border-bottom','#94C8EE solid 0');
            $('nav p').not('#savoir-fairelink p').css('margin-bottom','0').css('color','#E6E6E6').css('font-size','18px');
        }
        if ( positionscroll > 4400){
            $('#contactlink').css('border-bottom','#94C8EE solid 5px');
            $('#contactlink p').css('margin-bottom','-5px').css('color','#94C8EE').css('font-size','20px');
            $('nav a').not('#contactlink').css('border-bottom','#94C8EE solid 0');
            $('nav p').not('#contactlink p').css('margin-bottom','0').css('color','#E6E6E6').css('font-size','18px');
        }
        $(".logo-nav").css('transform','scale(1) translate(-14%)');
        $("nav a").mouseover(function() {
            $(this).css("color","#94C8EE")
            $(this).not('.logo-nav-link').css('border-bottom','#94C8EE solid 5px')
        }).mouseout(function (){
            $(this).css("color","#E6E6E6")
            $(this).not('.logo-nav-link').css('border-bottom','#94C8EE solid 0px')
        });
    }else{
        $(".logo-nav").css('transform','scale(1.65) translate(-14%,-25%)');
        $("nav a").mouseover(function() {
            $(this).css("color","#94C8EE")
            $(this).not('.logo-nav-link').css('border-bottom','#94C8EE solid 5px')
            $(this).find('p').css('margin-bottom','-5px');
        }).mouseout(function (){
            $(this).css("color","#E6E6E6")
            $(this).not('.logo-nav-link').css('border-bottom','#94C8EE solid 0px')
            $(this).find('p').css('margin-bottom','0px');
        });
    }


    $(document).scroll(function (){
        var positionscroll = $(document).scrollTop();
        console.log(positionscroll);
        var limitnav = 40;

        if( positionscroll > 40){
            if (positionscroll < 650){
                $('nav a').css('border-bottom','0');
                $('nav a p').css('margin-bottom','0').css('color','#E6E6E6').css('font-size','18px');
            }
            if ( positionscroll > 650 && positionscroll < 2400 ){
                $('#presentationlink').css('border-bottom','#94C8EE solid 5px');
                $('#presentationlink p').css('color','#94C8EE').css('font-size','20px');
                $('nav a').not('#presentationlink').css('border-bottom','#94C8EE solid 0');
                $('nav p').not('#presentationlink p').css('margin-bottom','0').css('color','#E6E6E6').css('font-size','18px');
            }
            if ( positionscroll > 2400 && positionscroll < 3500  ){
                $('#solutionslink').css('border-bottom','#94C8EE solid 5px');
                $('#solutionslink p').css('color','#94C8EE').css('font-size','20px');
                $('nav a').not('#solutionslink').css('border-bottom','#94C8EE solid 0');
                $('nav p').not('#solutionslink p').css('margin-bottom','0').css('color','#E6E6E6').css('font-size','18px');
            }
            if ( positionscroll > 3500 && positionscroll < 4400  ){
                $('#savoir-fairelink').css('border-bottom','#94C8EE solid 5px');
                $('#savoir-fairelink p').css('color','#94C8EE').css('font-size','20px');
                $('nav a').not('#savoir-fairelink').css('border-bottom','#94C8EE solid 0');
                $('nav p').not('#savoir-fairelink p').css('margin-bottom','0').css('color','#E6E6E6').css('font-size','18px');
            }
            if ( positionscroll > 4400){
                $('#contactlink').css('border-bottom','#94C8EE solid 5px');
                $('#contactlink p').css('color','#94C8EE').css('font-size','20px');
                $('nav a').not('#contactlink').css('border-bottom','#94C8EE solid 0');
                $('nav p').not('#contactlink p').css('margin-bottom','0').css('color','#E6E6E6').css('font-size','18px');
            }
            $(".logo-nav").css('transform','scale(1) translate(-14%)');
            $("nav a").mouseover(function() {
                $(this).css("color","#94C8EE")
                $(this).not('.logo-nav-link').css('border-bottom','#94C8EE solid 5px')
                $(this).find('p').css('margin-bottom','-5px');
            }).mouseout(function (){
                $(this).css("color","#E6E6E6")
                $(this).not('.logo-nav-link').css('border-bottom','#94C8EE solid 0px')
                $(this).find('p').css('margin-bottom','0px');
            });
        }else{
            $(".logo-nav").css('transform','scale(1.65) translate(-14%,-25%)');
            $("nav a").mouseover(function() {
                $(this).css("color","#94C8EE")
                $(this).not('.logo-nav-link').css('border-bottom','#94C8EE solid 5px')
                $(this).find('p').css('margin-bottom','-5px');
            }).mouseout(function (){
                $(this).css("color","#E6E6E6")
                $(this).not('.logo-nav-link').css('border-bottom','#94C8EE solid 0px')
                $(this).find('p').css('margin-bottom','0px');
            });
        }
    })


    // APPROCHE SHOW/HIDE

    $('#philo').on('click', function (){
        $('#philo').css('background-color','#E6E6E6').css('color','#1e1e1e');
        $('.flexcolumncat div').not('#philo').css('background-color','#1e1e1e').css('color','#E6E6E6');
        $('#cardtact').fadeOut('fast');
        $('#cardope').fadeOut('fast');
        $('#cardstrat').fadeOut('fast');
        setTimeout(function (){
            $('#cardphilo').fadeIn('fast');
        },200)
    })

    $('#tact').on('click', function (){
        $('#tact').css('background-color','#E6E6E6').css('color','#1e1e1e');
        $('.flexcolumncat div').not('#tact').css('background-color','#1e1e1e').css('color','#E6E6E6');
        $('#cardphilo').fadeOut('fast');
        $('#cardope').fadeOut('fast');
        $('#cardstrat').fadeOut('fast');
        setTimeout(function (){
            $('#cardtact').fadeIn('fast');
        },200)
    })

    $('#ope').on('click', function (){
        $('#ope').css('background-color','#E6E6E6').css('color','#1e1e1e');
        $('.flexcolumncat div').not('#ope').css('background-color','#1e1e1e').css('color','#E6E6E6');
        $('#cardtact').fadeOut('fast');
        $('#cardphilo').fadeOut('fast');
        $('#cardstrat').fadeOut('fast');
        setTimeout(function (){
            $('#cardope').fadeIn('fast');
        },200)
    })

    $('#strat').on('click', function (){
        $('#strat').css('background-color','#E6E6E6').css('color','#1e1e1e');
        $('.flexcolumncat div').not('#strat').css('background-color','#1e1e1e').css('color','#E6E6E6');
        $('#cardtact').fadeOut('fast');
        $('#cardope').fadeOut('fast');
        $('#cardphilo').fadeOut('fast');
        setTimeout(function (){
            $('#cardstrat').fadeIn('fast');
        },200)
    })

    //AUTOREMPLISSAGE CONTACT

    $('#button1').on('click', function (){
        var title = $('#firsth3').text();
        var message = $('#hidden1').val();
        $('html, body').animate({
            scrollTop: $('#contact').offset().top - 20
        }, 500);
        $('#objet').val('Informations : ' + title );
        $('#message').val(message);
    })

    $('#button2').on('click', function (){
        var title = $('#secondh3').text();
        var message = $('#hidden2').val();
        $('html, body').animate({
            scrollTop: $('#contact').offset().top - 20
        }, 500);
        $('#objet').val('Informations : ' + title );
        $('#message').val(message);
    })

    $('#button3').on('click', function (){
        var title = $('#thirdh3').text();
        var message = $('#hidden3').val();
        $('html, body').animate({
            scrollTop: $('#contact').offset().top - 20
        }, 500);
        $('#objet').val('Informations : ' + title );
        $('#message').val(message);
    })

    $('#button4').on('click', function (){
        var title = $('#lasth3').text();
        var message = $('#hidden4').val();
        $('html, body').animate({
            scrollTop: $('#contact').offset().top - 20
        }, 500);
        $('#objet').val('Informations : ' + title );
        $('#message').val(message);
    })



    //PARALLAX

    $(document).ready(function() {
        $('#solutions').parallax("50%", 0.1);
        $('#savoir-faire').parallax("50%", 0.1);
        $('#contact').parallax("50%", 0.1);
        $('.premierepresentation').parallax("50%", 0.1);
    })
})