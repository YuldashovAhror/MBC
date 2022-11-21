$(window).on('load', () => {




    //_________________ABOUT NUMBERS_________________

     let showCounter = true;
     $(window).on("scroll load resize", function () {
         if (!showCounter) return false; 
         let w_top = $(window).scrollTop(); 
         if (w_top >= $(window).height()/2) {
            
            $(".about-numbers__value span").each(function() {
             $(this).prop("col",0).animate({
                     counter:$(this).text()},{
                     duration: 2000,
                     easing: "swing",
                     step:function(now){
                         $(this).text(Math.ceil(now));
                     }
                 });
             });
            showCounter = false;
         }
 
    }); 


    //_____________FEEDBACK_________________



    $('.feedback-open').click((e) => {
        e.preventDefault()
        $('.feedback').show(); 
        setTimeout(() => {
            $('.feedback-content').addClass('feedback-show')
        }, 100)
      
    })



    $('.feedback__close').click(() => {
        $('.feedback-content').removeClass('feedback-show')
        setTimeout(() => {
            $('.feedback').hide(); 
        }, 600)

    })



    $('.feedback').click(e => {
        let div = $(".feedback-content");
        if (!div.is(e.target) 
            && div.has(e.target).length === 0) { 
            $('.feedback-content').removeClass('feedback-show')
            setTimeout(() => {
                $('.feedback').hide(); 
            }, 600)
        }
    })

    
    //_________MOBILE-MENU____________


    $('.header-mobile').click(function() {
        $('.mobile-menu').slideToggle(500)
    })

    $('.mobile-menu__close').click(function() {
        $('.mobile-menu').slideToggle(500)
    })

    



    //______________PROJECTS_________________


    $('.projects-item').hover(function() {
        $('.projects-item').addClass('hover')
        $(this).removeClass('hover')
    },
    function() {
        $('.projects-item').removeClass('hover')
    })


    let carouselIndex = 0;
    let prevIndex
    let click = true

    $('.projects-arrows .arrow-left').click(() => {
        if(click) {
            if(carouselIndex == 0) {
                click = false
                prevIndex = carouselIndex
                carouselIndex = $('.projects-carousel__item').length - 1
                showSlide(carouselIndex, prevIndex)
            } else {
                click = false
                prevIndex = carouselIndex
                carouselIndex--
                showSlide(carouselIndex, prevIndex)
            }
        }
    })

    $('.projects-arrows .arrow-right').click(() => {
        if(click) {
            if(carouselIndex == $('.projects-carousel__item').length - 1) {
                click = false
                prevIndex = carouselIndex
                carouselIndex = 0
                showSlide(carouselIndex, prevIndex)
            } else {
                click = false
                prevIndex = carouselIndex
                carouselIndex++
                showSlide(carouselIndex, prevIndex)
            }
        }

    })

    let showSlide = (index, prevIndex) => {
        $('.projects-carousel__item').eq(prevIndex).css({
            position: 'absolute',
            zIndex: '5'
        })

        $('.projects-carousel__item').eq(prevIndex).children().map((index, item) => {
            if(index % 2 == 0) {

                if(($(window).width() < 1080 && $(window).width() < $(window).height()) || $(window).width() < 768) {
                    $(item).css('transform', 'translateX(100%)')
                } else {
                    $(item).css('transform', 'translateY(100%)')
                }

            } else {
                if(($(window).width() < 1080 && $(window).width() < $(window).height()) || $(window).width() < 768) {
                    $(item).css('transform', 'translateX(-100%)')
                } else {
                    $(item).css('transform', 'translateY(-100%)')
                }

            }
        })

        setTimeout(() => {
            $('.projects-carousel__item').eq(prevIndex).css({
                position: 'relative',
                zIndex: '2'
            })
            $('.projects-carousel__item').eq(prevIndex).children().map((index, item) => {
                $(item).css('transform', 'none')
            })
            $('.projects-carousel__item').hide()
            $('.projects-carousel__item').eq(index).css('display', 'flex')
            click = true
        }, 800)

        $('.projects-carousel__item').eq(index).css('display', 'flex')
    }


    //_______________NEWS________________

    $('.news-carousel').owlCarousel({
        dots: true,
        nav: false,
        smartSpeed: 700,
        autoWidth: true,
        items: 1,
        loop: true,
    })


    $('.news-arrows .arrow-left').click(() => {
        $('.news-carousel').trigger('prev.owl.carousel', [700]);

    })

    $('.news-arrows .arrow-right').click(() => {
        $('.news-carousel').trigger('next.owl.carousel', [700]);
    })


    
    $('.news-years__btn').click(function() {
        if($(this).hasClass('news-years__btn-close')) {
            $(this).removeClass('news-years__btn-close')
            $('.news-years__dropdown').slideUp(500)
            setTimeout(() => {
                $('.news-years__dropdown ul li').css('opacity', '1')
            }, 600)
        } else {
            $(this).addClass('news-years__btn-close')
            $('.news-years__dropdown').slideDown(500)
            $('.news-years__dropdown ul li').map((index, item) => {
                setTimeout(() => {
                    $(item).css('opacity', '1')
                }, 200+(200*index))
            })
        }

    })

    $('.news-years__dropdown ul li').click(function() {
        $('.news-years__dropdown ul li').removeClass('current')
        $(this).addClass('current')
        $('.news-years__btn span').text($(this).text())
        $('.news-tab').hide()
        $('.news-tab').eq($(this).index()).show()
        $('.news-carousel').trigger('to.owl.carousel', [0, 0])
        $('.news-years__btn').removeClass('news-years__btn-close')
        $('.news-years__dropdown').slideUp(500)
        setTimeout(() => {
            $('.news-years__dropdown ul li').css('opacity', '1')
        }, 600)
    })




    //___________VALUES___________

    $('.values-carousel').owlCarousel({
        dots: false,
        nav: false,
        smartSpeed: 700,
        loop: true,
        responsive: {
            0: {
                items: 1,
                margin: 20,
            },
    
            600: {
                items: 2,
                margin: 20,
            },


            1000: {
                items: 3,
                margin: 30,
            },
        }

    })

    $('.values .arrow-left').click(() => {
        $('.values-carousel').trigger('prev.owl.carousel', [700]);

    })

    $('.values .arrow-right').click(() => {
        $('.values-carousel').trigger('next.owl.carousel', [700]);
    })


    //___________TEAM___________

    let root = parseInt($(':root').css('font-size'))

    $('.team-carousel').owlCarousel({
        dots: false,
        nav: false,
        smartSpeed: 700,
        loop: true,
        responsive: {
            0: {
                items: 1,
                margin: 20,
                stagePadding: 3*root
            },
    
            600: {
                items: 2,
                margin: 20,
                stagePadding: 4*root
            },


            1000: {
                items: 3,
                margin: 30,
                stagePadding: 7*root
            },
        }

    })

    $('.team .arrow-left').click(() => {
        $('.team-carousel').trigger('prev.owl.carousel', [700]);

    })

    $('.team .arrow-right').click(() => {
        $('.team-carousel').trigger('next.owl.carousel', [700]);
    })
    

    
    //__________CAREER-NEWS_______________


    $('.career-news__carousel').owlCarousel({
        dots: true,
        nav: false,
        smartSpeed: 700,
        loop: true,
        responsive: {
            0: {
                items: 1,
                margin: 20,
            },
    
            600: {
                items: 2,
                margin: 20,
            },


            1000: {
                items: 3,
                margin: 30,
            },
        }

    })

    $('.career-news .arrow-left').click(() => {
        $('.career-news__carousel').trigger('prev.owl.carousel', [700]);

    })

    $('.career-news .arrow-right').click(() => {
        $('.career-news__carousel').trigger('next.owl.carousel', [700]);
    })



    //__________BLOG_______________


    $('.blog-carousel').owlCarousel({
        dots: true,
        nav: false,
        smartSpeed: 700,
        loop: true,
        responsive: {
            0: {
                items: 1,
                margin: 20,
            },
    
            600: {
                items: 2,
                margin: 50,
            },

            1100: {
                items: 2,
                margin: 75,
            },


            1500: {
                items: 2,
                margin: 100,
            },
        }

    })

    $('.blog .arrow-left').click(() => {
        $('.blog-carousel').trigger('prev.owl.carousel', [700]);

    })

    $('.blog .arrow-right').click(() => {
        $('.blog-carousel').trigger('next.owl.carousel', [700]);
    })


    //__________FOOTER_______________


    $('.footer-top').click(() => {
        $('html').animate({
            scrollTop: 0
        }, 2000);
    })


    //__________WOW____________

    new WOW({
        offset: 50,
        mobile: false, 
    }).init();
    

    let s,
        spanizeLetters = {
        settings: {
        letters: $('.history-item__text'),
        },
        init: function() {
        s = this.settings;
        this.bindEvents();
        },
        bindEvents: function(){
        s.letters.html(function (i, el) {
            //spanizeLetters.joinChars();
            var spanizer = $.trim(el).split("");
            return '<span>' + spanizer.join('</span><span>') + '</span>';
        });
        },
    };
    spanizeLetters.init();


    //____________CUSTOM SELECT__________

    $('.customSelect').customSelect();



    //_____________INPUTMASK__________

    jQuery.fn.ForceNumericOnly =
    function()
    {
        return this.each(function()
        {
            $(this).keydown(function(e)
            {
                var key = e.charCode || e.keyCode || 0;
                // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                // home, end, period, and numpad decimal
                return (
                    key == 8 || 
                    key == 9 ||
                    key == 13 ||
                    key == 46 ||
                    key == 110 ||
                    key == 190 ||
                    (key >= 35 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });
        });
    }

    $('.form__tel').intlTelInput({
        autoPlaceholder:"polite",
        initialCountry: 'uz',
        nationalMode: false,
    })

    $('.form__tel').val('+998')

    $(".form__tel").ForceNumericOnly();

})