<script src="/js/jquery-3.4.1.min.js"></script>
	<script src="/js/intlTelInput-jquery.min.js"></script>
	<script src="/js/owl.carousel.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
    @if(\Request::segment(1) != '' )
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="/js/map.js"></script>
    @endif
	<script src="/js/line.js"></script>
	<script src="/js/jquery.custom-select.js"></script>
	<script src="/js/jquery.nicescroll.min.js"></script>
	<script src="/js/wow.min.js"></script>
	<script src="/js/main.js"></script>



{{-- @if(\Request::segment(1) != 'career' && \Request::segment(1) != 'about')
    <script>

        setTimeout(() => {
            $.getScript("https://api-maps.yandex.ru/2.1/?lang=ru_RU")
            setTimeout(() => {
                $.getScript("js/map.js")
            }, 500)
        }, 1000)

        let loader = false

        setTimeout(() => {
            if(loader) {
                $('.preloader').fadeOut(700)
                setTimeout(() => {
                    $('.main-content__text').addClass('show')
                }, 600)
            } else {
                setTimeout(() => {
                    $('.preloader').fadeOut(700)
                    setTimeout(() => {
                        $('.main-content__text').addClass('show')
                    }, 600)
                }, 1500)
            }
        }, 3800)


        $(window).on('load', () => {

            loader = true

            //_________________ABOUT BG_________________

            VANTA.WAVES({
                el: ".about",
                mouseControls: true,
                touchControls: true,
                gyroControls: false,
                minHeight: 200.00,
                minWidth: 200.00,
                scale: 1.00,
                scaleMobile: 1.00,
                color: 0x3c,
                waveHeight: 11.50,
                waveSpeed: 0.75,
                zoom: 0.99
            })

            //_______NICESCROLL___________

            let root = parseInt($(':root').css('font-size'))

            if($(window).width() > 768 || !('ontouchstart' in window)) {
                $('body').niceScroll({
                    scrollspeed:  root*5,
                    cursorcolor: '#110D60',
                });
            }


            //______________ADVANTAGES________________


            $('.advantages-item').click(function() {
                if($(this).hasClass('open')) {
                    $('.advantages-item').removeClass('open')
                    $('.advantages-item__text').slideUp(500)
                } else {
                    $('.advantages-item').removeClass('open')
                    $('.advantages-item__text').slideUp(500)
                    $(this).addClass('open')
                    $(this).find('.advantages-item__text').slideDown(500)
                }
            })

            var path = document.querySelector('#star-path');

            var pathLength = path.getTotalLength();
            path.style.strokeDasharray = pathLength + ' ' + pathLength;

            path.style.strokeDashoffset = pathLength;

            path.getBoundingClientRect();

            window.addEventListener("scroll", function(e) {


                var scrollPercentage = ($(document).scrollTop() - $('.advantages').offset().top)/(67*root)

                if(scrollPercentage > 0) {
                    var drawLength = pathLength * scrollPercentage;

                    path.style.strokeDashoffset = pathLength - drawLength;

                    if (scrollPercentage >= 0.99) {
                        path.style.strokeDasharray = "none";

                    } else {
                        path.style.strokeDasharray = pathLength + ' ' + pathLength;
                    }
                }




            });


            let advantagesBg = [
                'advantages1.png',
                'advantages2.png',
                'advantages3.png',
                'advantages4.png',
                'advantages5.png',
                'advantages6.png',
                'advantages7.png',
                'advantages8.png',
                'advantages8.png',
            ]



            let changeScroll = true





            if(!('ontouchstart' in window)) {
                $(window).on('load scroll  resize', function () {

                    let currentTop = $(window).scrollTop()
                    let elems = $('.advantages-item')

                    if(currentTop >= $('.projects').offset().top - root*10) {
                        $('.advantages-circle').addClass('hide')
                        $('.advantages-logo').addClass('show')
                    }

                    elems.each(function(){
                        let elemTop 	= $(this).offset().top-(root*22);
                        let elemBottom 	= elemTop + $(this).height()
                        if(currentTop >= elemTop && currentTop <= elemBottom){
                            elems.removeClass('current')
                            elems.removeClass('open')
                            elems.find('.advantages-item__text').slideUp(500)
                            $(this).addClass('current')
                            let index = $(this).index()
                            if(index >= 8) {
                                $('.advantages-circle').addClass('hide')
                                $('.advantages-logo').addClass('show')
                            } else {
                                $('.advantages-circle').removeClass('hide')
                                $('.advantages-logo').removeClass('show')
                            }

                            $('.advantages').css('background-image', `url(./img/${advantagesBg[index]})`)
                            $('.advantages-circle span img').removeClass('show')
                            $('.advantages-circle span img').eq(index).addClass('show')

                        }

                    })

                    let scrollAdv = $('.advantages').offset().top

                    //_______NICESCROLL___________


                    if($(window).width() > 768) {
                        if((currentTop >= scrollAdv) && (currentTop <= (scrollAdv+$('.advantages').height())-root*15)) {
                            if(changeScroll) {
                                $('body').getNiceScroll().remove();
                            }
                            changeScroll = false
                            $('body').niceScroll({
                                scrollspeed:  root*15,
                                cursorcolor: '#110D60',
                            });

                        }  else {
                            if(!changeScroll) {
                                $('body').getNiceScroll().remove();
                            }
                            changeScroll = true
                            $('body').niceScroll({
                                scrollspeed:  root*5,
                                cursorcolor: '#110D60',
                            });
                        }
                    }

                })
            }


        })



    </script>
@endif --}}