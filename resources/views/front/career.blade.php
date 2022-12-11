@extends('layouts.front.main')

@section('content')
	<!-- CAREER -->

	<div class="career-header">
		<div class="container">
			<div class="career-header__text">
				{{__('asd.Карьера в Murad Buildings')}}
			</div>
			<ul class="career-header__nav">
				<li>
					<a href="#values">{{__('asd.Наши ценности')}}</a>
				</li>
				<li>
					<a href="#advantages">{{__('asd.Преимущества')}}</a>
				</li>
				<li>
					<a href="#vacancy">{{__('asd.Вакансии')}}</a>
				</li>
				<li>
					<a href="#blog">{{__('asd.Блог')}}</a>
				</li>
			</ul>
		</div>
	</div>

	{{-- <section class="career">
		<div class="career__slogan">
			{{__('asd.Мы поможем Вам построить путь к успеху')}}
		</div>
	</section> --}}

	<section class="career">
		<div class="career-video">
			<video  pip="false" autoplay="autoplay" loop="loop" muted="muted" playsinline="" webkit-playsinline="">
				<source  src="/video/career.mp4" type="video/mp4"> Ваш браузер не поддерживает HTML5 видео. 
			</video>
		</div>
		<div class="career__slogan">
			{{__('asd.Мы поможем Вам построить путь к успеху')}}
		</div>
	</section>


	<!-- CAREER-INFO -->


	<section class="career-info">
		<div class="career-info__text">
			<strong>Murad Buildings</strong> – {{__('asd.это команда профессионалов, где каждый сотрудник является частью дружной семьи')}}, {{__('asd.где уважение к смелым переменам и оригинальному мышлению вдохновляет на достижение наших общих целей на пути к успеху.')}}
		</div>
	</section>
	

	<!-- VALUES -->

	<section class="values" id="values">
		<div class="container">
			<div class="career-head">
				<h2 class="values__title career-title">
					{{__('asd.То, что')}} <strong>{{__('asd.нас объединяет')}} </strong>
				</h2>
				<div class="career-arrows">
					<span class="arrow-left arrow">
						<svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M-2.38498e-08 2.51459L5.80357 0.514587L5.80357 4.51459L-2.38498e-08 2.51459Z" fill="#D2AE6D"/>
							<path d="M25 2.97647L25 2.05271L5.35714 2.05271L5.35714 2.97647L25 2.97647Z" fill="#D2AE6D"/>
						</svg>								
					</span>
					<span class="arrow-right arrow">
						<svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M25 2.51459L19.1964 0.514587L19.1964 4.51459L25 2.51459Z" fill="#D2AE6D"/>
							<path d="M1.83419e-08 2.97647L2.93576e-08 2.05271L19.6429 2.05271L19.6429 2.97647L1.83419e-08 2.97647Z" fill="#D2AE6D"/>
						</svg>								
					</span>
				</div>
			</div>
			
			<div class="values-carousel owl-carousel">
				@foreach ($values as $value)
				<div class="news-item">
					<div class="news-item__name">
						{{$value['title_'.$lang]}}
					</div>
					<div class="news-item__img">
						<img src="{{$value->photo}}" alt="news">
					</div>
					<div class="news-item__line">
						<img src="img/news.svg" alt="ico">
					</div>
					<div class="news-item__text">
						{!!$value['description_'.$lang]!!}
					</div>
				</div>
				@endforeach

				{{-- <div class="news-item">
					<div class="news-item__name">
						Порядочность
					</div>
					<div class="news-item__img">
						<img src="img/values/2.jpg" alt="news">
					</div>
					<div class="news-item__line">
						<img src="img/news.svg" alt="ico">
					</div>
					<div class="news-item__text">
						Мы уделяем особое внимание на уважение и безоговорочное соблюдение общих договоренностей, интересов, взаимодействия с бизнес-партнерами, клиентами, коллегами и обществом.
					</div>
				</div>
				<div class="news-item">
					<div class="news-item__name">
						Доверие
					</div>
					<div class="news-item__img">
						<img src="img/values/3.jpg" alt="news">
					</div>
					<div class="news-item__line">
						<img src="img/news.svg" alt="ico">
					</div>
					<div class="news-item__text">
						Основой бизнеса и партнерских отношений в нашей компании считается доверие, так как первым шагом на пути к созданию успешных отношений является доверие.
					</div>
				</div>
				<div class="news-item">
					<div class="news-item__name">
						Взаимоуважение
					</div>
					<div class="news-item__img">
						<img src="img/values/4.jpg" alt="news">
					</div>
					<div class="news-item__line">
						<img src="img/news.svg" alt="ico">
					</div>
					<div class="news-item__text">
						Взаимный процесс, при котором руководство уважает мнение своих сотрудников, а сотрудники уважают мнение своего руководства.
					</div>
				</div>
				<div class="news-item">
					<div class="news-item__name">
						Счастье
					</div>
					<div class="news-item__img">
						<img src="img/values/5.jpg" alt="news">
					</div>
					<div class="news-item__line">
						<img src="img/news.svg" alt="ico">
					</div>
					<div class="news-item__text">
						Счастье для нас — это когда люди и внутри, и вне компании испытывают по-настоящему позитивные эмоции от взаимодействия с «лицами» компании, находясь в атмосфере взаимоуважения, доверия и сплоченности.
					</div>
				</div>
				<div class="news-item">
					<div class="news-item__name">
						Сплоченность
					</div>
					<div class="news-item__img">
						<img src="img/values/6.jpg" alt="news">
					</div>
					<div class="news-item__line">
						<img src="img/news.svg" alt="ico">
					</div>
					<div class="news-item__text">
						Наша команда – это группа людей, которые эффективно взаимодействуют друг с другом, избегают конфликтных ситуаций и находят оптимальные решения, нацеленные на результат.
					</div>
				</div>
				<div class="news-item">
					<div class="news-item__name">
						Командный дух
					</div>
					<div class="news-item__img">
						<img src="img/values/7.jpg" alt="news">
					</div>
					<div class="news-item__line">
						<img src="img/news.svg" alt="ico">
					</div>
					<div class="news-item__text">
						Мы как команда всегда готовы и способны совместно достигать поставленных целей.
					</div>
				</div>
				<div class="news-item">
					<div class="news-item__name">
						Развитие и рост
					</div>
					<div class="news-item__img">
						<img src="img/values/8.jpg" alt="news">
					</div>
					<div class="news-item__line">
						<img src="img/news.svg" alt="ico">
					</div>
					<div class="news-item__text">
						Каждый в нашей команде всегда стремится к саморазвитию, чтобы быть полезным для компании и самому расти вместе с ней.
					</div>
				</div> --}}

			</div>
		</div>
	</section>

	<!-- TEAM -->

	<section class="team">
		<div class="container">
			<div class="career-head">
				<h2 class="team__title career-title">
					{{__('asd.Близкие по духу люди')}}, 
					<strong>
						{{__('asd.разделяющие')}} <br>
						{{__('asd.ценности')}} Murad Buildings
					</strong> 

				</h2>
				<div class="career-arrows">
					<span class="arrow-left arrow">
						<svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M-2.38498e-08 2.51459L5.80357 0.514587L5.80357 4.51459L-2.38498e-08 2.51459Z" fill="#D2AE6D"/>
							<path d="M25 2.97647L25 2.05271L5.35714 2.05271L5.35714 2.97647L25 2.97647Z" fill="#D2AE6D"/>
						</svg>								
					</span>
					<span class="arrow-right arrow">
						<svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M25 2.51459L19.1964 0.514587L19.1964 4.51459L25 2.51459Z" fill="#D2AE6D"/>
							<path d="M1.83419e-08 2.97647L2.93576e-08 2.05271L19.6429 2.05271L19.6429 2.97647L1.83419e-08 2.97647Z" fill="#D2AE6D"/>
						</svg>								
					</span>
				</div>
			</div>
		</div>
		<div class="team-carousel owl-carousel">
			@foreach ($teams as $team)
				
			<div class="team-carousel__item">
				<div class="team-carousel__video">
					<iframe width="560" height="315" src="{{ $team->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					{{-- <img src="img/team1.jpg" alt=""> --}}
				</div>
				<div class="team-carousel__info">
					<div class="team-carousel__photo">
						<img src="{{$team->photo}}" alt="people">
					</div>
					<div class="team-carousel__wrap">
						<div class="team-carousel__name">
							{{$team['name_'.$lang]}}
						</div>
						<div class="team-carousel__pos">
							{{$team['position_'.$lang]}}
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</section>

	<!-- CAREER advantages-->

	<section class="career-advantages" id="advantages">
		<div class="career-advantages__sticky">
			<div class="container">
				<h2 class="career-advantages__title career-title">
					{{__('asd.Работая у нас')}}, <strong>{{__('asd.вы получаете')}}</strong>
				</h2>
				<ul class="career-advantages__numbers">
					<li class="current">
						<span>1</span>
					</li>
					<li>
						<span>2</span>
					</li>
					<li>
						<span>3</span>
					</li>
					<li>
						<span>4</span>
					</li>
					<li>
						<span>5</span>
					</li>
					<li>
						<span>6</span>
					</li>
				</ul>
			</div>
			<div class="career-advantages__list">
				<div class="career-advantages__item current">
					<div class="career-advantages__wrap">
						<div class="career-advantages__name">
							{{__('asd.Конкурентноспособную заработную плату')}}
						</div>
						<div class="career-advantages__ico">
							<img src="img/career-advantages/1.svg" alt="ico">
						</div>
					</div>
					<div class="career-advantages__text">
						{{__('asd.Мы компания, которая ценит труд своих сотрудников и старается быть конкурентной на рынке.')}}
					</div>
				</div>
				<div class="career-advantages__item">
					<div class="career-advantages__wrap">
						<div class="career-advantages__name">
							{{__('asd.Прозрачную бонусную систему')}}
						</div>
						<div class="career-advantages__ico">
							<img src="img/career-advantages/2.svg" alt="ico">
						</div>
					</div>
					<div class="career-advantages__text">
						{{__('asd.Для нас очень важен результат работы каждого сотрудника и его вклад в развитие компании.')}} 
						{{__('asd.Мы придерживаемся принципа: “Каждый сотрудник является совладельцем компании и получает от этого дополнительное вознаграждение”.')}}
					</div>
				</div>
				<div class="career-advantages__item">
					<div class="career-advantages__wrap">
						<div class="career-advantages__name">
							{{__('asd.Индивидуальный план развития и карьерный рост')}}
						</div>
						<div class="career-advantages__ico">
							<img src="img/career-advantages/3.svg" alt="ico">
						</div>
					</div>
					<div class="career-advantages__text">
						{{__('asd.Наш успех в прямую связан с людьми, которые у нас работают.')}} {{__('asd.Именно поэтому мы предоставляем возможность построить свой карьерный рост и раскрыть полностью свой потенциал как профессионал.')}} {{__('asd.В компании у каждого сотрудника есть доступ к внутренним и внешним тренингам, где каждый сможет вывести свой карьерный путь на новый уровень.')}}  
					</div>
				</div>
				<div class="career-advantages__item">
					<div class="career-advantages__wrap">
						<div class="career-advantages__name">
							{{__('asd.Корпоративное обучение')}}
						</div>
						<div class="career-advantages__ico">
							<img src="img/career-advantages/4.svg" alt="ico">
						</div>
					</div>
					<div class="career-advantages__text">
						{{__('asd.Наша главная цель – с помощью новых технологий/знаний повысить эффективность работы каждого сотрудника.')}} {{__('asd.Для этого мы на постоянной основе мотивируем сотрудников на обучение и развитие.')}}
					</div>
				</div>
				<div class="career-advantages__item">
					<div class="career-advantages__wrap">
						<div class="career-advantages__name">
							{{__('asd.Тимбилдинг')}}
						</div>
						<div class="career-advantages__ico">
							<img src="img/career-advantages/5.svg" alt="ico">
						</div>
					</div>
					<div class="career-advantages__text">
						{{__('asd.Сплоченность нашей команды не менее важна для нашей компании.')}} {{__('asd.Мы периодически проводим обучающие и спортивные мероприятия для повышения командного духа.')}} 
					</div>
				</div>
				<div class="career-advantages__item">
					<div class="career-advantages__wrap">
						<div class="career-advantages__name">
							{{__('asd.Оплачиваемый отпуск')}}
						</div>
						<div class="career-advantages__ico">
							<img src="img/career-advantages/6.svg" alt="ico">
						</div>
					</div>
					<div class="career-advantages__text">
						{{__('asd.Наша компания предоставляет ежегодный оплачиваемый трудовой отпуск для каждого сотрудника, а также оплачиваемые дни при болезни.')}}
					</div>
				</div>
			</div>
		</div>
		<div class="career-advantages__divs">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
		<div class="career-advantages__helper"></div>

	</section>

	<!-- VACANCY -->

	@livewire('vacancy')

	<!-- BLOG -->

	<section class="blog" id="blog">
		<div class="container">
			<div class="career-head">
				<h2 class="blog__title career-title">
					{{__('asd.Отличные идеи')}} <br>
					<strong>{{__('asd.преодолевают трудности')}}</strong>
				</h2>
				<div class="career-arrows">
					<span class="arrow-left arrow">
						<svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M-2.38498e-08 2.51459L5.80357 0.514587L5.80357 4.51459L-2.38498e-08 2.51459Z" fill="#D2AE6D"/>
							<path d="M25 2.97647L25 2.05271L5.35714 2.05271L5.35714 2.97647L25 2.97647Z" fill="#D2AE6D"/>
						</svg>								
					</span>
					<span class="arrow-right arrow">
						<svg width="25" height="5" viewBox="0 0 25 5" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M25 2.51459L19.1964 0.514587L19.1964 4.51459L25 2.51459Z" fill="#D2AE6D"/>
							<path d="M1.83419e-08 2.97647L2.93576e-08 2.05271L19.6429 2.05271L19.6429 2.97647L1.83419e-08 2.97647Z" fill="#D2AE6D"/>
						</svg>								
					</span>
				</div>
			</div>
			<div class="blog-carousel owl-carousel">
				@foreach ($blogs as $blog)
				
				<div class="blog-carousel__item">
					<div class="blog-carousel__img">
						<img src="{{$blog->photo}}" alt="img">
					</div>
					<div class="blog-carousel__wrap">
						<div class="blog-carousel__title">
							{{$blog['title_'.$lang]}}
						</div>
						<div class="blog-carousel__text">
							{!!$blog['description_'.$lang]!!}
						</div>
						<div class="blog-carousel__link">
							<a href="{{route('career.show', $blog->slug)}}">{{__('asd.Подробнее')}}</a>
						</div>
					</div>
				</div>
					{{-- @dd($blogs) --}}
				@endforeach
				{{-- <div class="blog-carousel__item">
					<div class="blog-carousel__img">
						<img src="img/block.jpg" alt="img">
					</div>
					<div class="blog-carousel__wrap">
						<div class="blog-carousel__title">
							Профессиональные навыки и как их различать
						</div>
						<div class="blog-carousel__text">
							Анализируя большое количество резюме и сопроводительных писем, мы столкнулись с очень частой ошибкой соискателей:
						</div>
						<div class="blog-carousel__link">
							<a href="blog-single.html">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="blog-carousel__item">
					<div class="blog-carousel__img">
						<img src="img/block.jpg" alt="img">
					</div>
					<div class="blog-carousel__wrap">
						<div class="blog-carousel__title">
							Профессиональные навыки и как их различать
						</div>
						<div class="blog-carousel__text">
							Анализируя большое количество резюме и сопроводительных писем, мы столкнулись с очень частой ошибкой соискателей:
						</div>
						<div class="blog-carousel__link">
							<a href="blog-single.html">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="blog-carousel__item">
					<div class="blog-carousel__img">
						<img src="img/block.jpg" alt="img">
					</div>
					<div class="blog-carousel__wrap">
						<div class="blog-carousel__title">
							Профессиональные навыки и как их различать
						</div>
						<div class="blog-carousel__text">
							Анализируя большое количество резюме и сопроводительных писем, мы столкнулись с очень частой ошибкой соискателей:
						</div>
						<div class="blog-carousel__link">
							<a href="blog-single.html">Подробнее</a>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>


	<!-- CAREER-FOOTER -->

	<div class="career-footer">
		<div class="container">
			<p>© 2022 Murad Buildings. {{__('asd.Все права защищены.')}}</p>
			<div class="footer-top arrow">
				<svg width="5" height="25" viewBox="0 0 5 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.50293 2.54292e-07L0.502927 5.80357L4.50293 5.80357L2.50293 2.54292e-07Z" fill="white"/>
					<path d="M2.96481 25L2.04105 25L2.04105 5.35714L2.96481 5.35714L2.96481 25Z" fill="white"/>
				</svg>				
			</div>
		</div>
	</div>
	@endsection

	@section('scripts')
	<script>
		function choose(id)
		{
			$('#vacancy_id').val(id);
		}
	</script>
	<script>
        $(window).on('load', function () {
            $('.header').addClass('header__dark')
            $('.section__news').addClass('page')


            $(document).on('click', '.vacancy__item a', function(event) {
                event.preventDefault();
                $('#content__name').text('');
                $('#content__wrap').html('');

                let $contentName = $(this).parent().find('.title').text();
                let $contentWrap = $(this).parent().find('.box').html();

                console.log($contentName, $contentWrap)

                $('#content__name').text($contentName);
                $('#content__wrap').html($contentWrap);
                $('.popup__back').slideDown('200');

                setTimeout(()=> {
                    $('.popup__vacancy').fadeIn('200');
                }, 800)

            })

            $('.popup__vacancy .close, .popup__back').click((event)=>{
                event.preventDefault();
                $('.popup__vacancy').fadeOut('200')
                setTimeout(()=> {
                    $('#content__name').text('');
                    $('#content__wrap').html('');
                    $('.popup__back').slideUp('200');
                }, 250)
            })
        });
    </script>
	<script>

		let root = parseInt($(':root').css('font-size'))



		$(window).on('load', () => {
			$('.career-header__nav a').click(function(e) {
				e.preventDefault()
				let id = $(this).attr('href')
				$('html').animate({
					scrollTop: $(id).offset().top
				}, 1000);
			})




			$(window).on('load scroll  resize', function () {
				
				let currentTop = $(window).scrollTop()
				let elems = $('.career-advantages__divs div')


				elems.each(function(){
					let elemTop 	= $(this).offset().top-(root*20);
					let elemBottom 	= elemTop + $(this).height()
					if(currentTop >= elemTop && currentTop <= elemBottom){
						let index = $(this).index()
						$('.career-advantages__item').removeClass('current')
						$('.career-advantages__item').eq(index).addClass('current')
						$('.career-advantages__numbers li').removeClass('current')
						$('.career-advantages__numbers li').eq(index).addClass('current')
						
					}
					
				})

				
			})

			let headPosition = $('.header-static').height()

			$(window).on('load scroll', () => {
				if(headPosition <= $(window).scrollTop()) {
					$('.career-header').addClass('fixed')
					$('.career').addClass('career-hide')
				} else {
					$('.career-header').removeClass('fixed')
					$('.career').removeClass('career-hide')
				}

			})
		})

		
	</script>
	@livewireScripts
@endsection

    