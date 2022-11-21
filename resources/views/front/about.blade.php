@extends('layouts.front.main')

@section('content')


<section class="about-page">
	<div class="container">
		<div class="about-page__content">
			<div class="about-page__subtitle section-title">
				{{__('asd.Приветственное слово руководителя компании')}}
			</div>
			<h1 class="about-page__title">
				{{__('asd.Уважаемый посетитель! Добро пожаловать на нашу виртуальную территорию!')}}
			</h1>
			<div class="about-page__text">
				<p><span>“</span>{{__('asd.Здесь Вы сможете ознакомиться с нашей компанией, а также с миссией и ценностями, по которым мы живём.')}} {{__('asd.Изначально наша компания выбрала путь откровенности и прозрачности во всех наших делах, и это наш приоритет - всегда оставаться в тесных отношениях с нашими гостями, клиентами и партнерами')}}.</p>

				<p>{{__('asd.Мы строим счастье, и это выражается в нашем желании сделать всё,')}} {{__('asd.чтобы потребитель нашей недвижимости оставался довольным и благодарным за то')}}, {{__('asd.что мы смогли помочь ему сделать лучший выбор и предложить достойные решения, максимально отвечающие изъявленным запросам и пожеланиям')}}.</p>

				<p>{{__('asd.Мы будем благодарны, если Вы сообщите нам о возможных ошибках или поделитесь своими рекомендациями по улучшению нашей деятельности по всем направлениям.')}} {{__('asd.Пишите нам, звоните, ну и, конечно, заезжайте к нам в офис, а мы, в свою очередь, обещаем чистосердечный сервис')}}, {{__('asd.чашку настоящего кофе и самую искреннюю консультацию по приобретению недвижимости')}}!<span>”</span></p>
			</div>
		</div>
		<div class="about-page__ceo">
			<div class="about-page__img">
				<img src="img/ceo.png" alt="Murad Nazarov">
			</div>
			<div class="about-page__ceo-content">
				<div class="about-page__ceo-text">
					{{__('asd.С большим уважением и улыбкой на лице')}},
				</div>
				<div class="about-page__ceo-name">
					{{__('asd.Мурад Назаров')}}
				</div>
				<div class="about-page__ceo-post">
					{{__('asd.основатель и руководитель Murad Buildings')}}.
				</div>
			</div>
		</div>
	</div>
</section>


<!-- BUILD -->

<section class="build">
	<div class="build-bg">
		<img src="img/build.jpg" alt="img">
	</div>
	<div class="container">
		<h2 class="build__title section-title wow fadeInUp" data-wow-delay=".3s">
			{{__('asd.Мы строим счастье')}}
		</h2>
		<div class="build-wrap">
			<div class="build__logo wow fadeInLeft" data-wow-delay=".3s">
				<img src="img/big-logo.svg" alt="Murad Buildings">
			</div>
			<div class="build__text wow fadeInRight" data-wow-delay=".3s">
				<div class="lines">
					<span></span>
					<span></span>
				</div>
				<p>
					О{{__('asd.дна из ведущих и быстро развивающихся девелоперских компаний с')}} <strong>{{__('asd.19 летним')}}</strong> {{__('asd.опытом на рынке')}}. {{__('asd.Деятельность компании направлена на создание уникальных жилых комплексов, отличающихся своей инновационностью, смарт-подходом и высоким качеством')}}.
				</p>
				<p>
					<strong>Murad Buildings</strong> - {{__('asd.это также пример социального бизнеса. Благотворительность')}}, {{__('asd.поддержка молодежи и творчества, социальные и образовательные проекты являются неотъемлемой частью деятельности компании')}}.
				</p>
			</div>
		</div>
	</div>
</section>


<!-- HISTORY -->

<section class="history">
	<div class="container">
		<h2 class="history__title section-title">
			{{__('asd.Жизненный путь компании')}}
		</h2>
		<div class="history-timeline">
			@for ($i=2000; $i<=2030; $i++)
				@foreach (App\Models\Gallary::where('year', $i)->get() as $gallary)
					<div class="history-item">
						<div class="history-item__year">
							{{$gallary->year}}
						</div>
						<div class="history-item__wrap">
							<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
								<div class="history-item__img">
									<img src="{{$gallary->photo}}" alt="img">
								</div>
								<div class="history-item__text">
									{{$gallary['title_'.$lang]}}
								</div>
							</div>
						</div>
					</div>
				@endforeach
			@endfor	
			{{-- <div class="history-item">
				<div class="history-item__year wow fadeInUp" data-wow-delay=".3s">
					2008
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2008.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства КД “Millenium” 
						</div>
					</div>
				</div>
			</div>
			<div class="history-item">
				<div class="history-item__year wow fadeInUp" data-wow-delay=".3s">
					2009
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2009.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства БЦ “Avalon”
						</div>
					</div>
				</div>
			</div>
			<div class="history-item">
				<div class="history-item__year wow fadeInUp" data-wow-delay=".3s">
					2015
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2015-1.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства КД “Central”
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2015-2.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства ЖК  “Ko`kcha Qo`rg`oni”
						</div>
					</div>
				</div>
			</div>
			<div class="history-item">
				<div class="history-item__year wow fadeInUp" data-wow-delay=".3s">
					2016
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2016-1.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства ЖК  “Gulsaroy”
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2016-2.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства ЖК  “Amir Temur”
						</div>
					</div>
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2016-3.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства БЦ “Mercury”
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2016-4.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства ЖК  “Green City”
						</div>
					</div>
				</div>
			</div>
			<div class="history-item">
				<div class="history-item__year wow fadeInUp" data-wow-delay=".3s">
					2017
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2017.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings стала обладателем премии “Лучший работодатель Узбекистана” в номинации “Выбор студентов” по версии Davinci
						</div>
					</div>
				</div>
			</div>
			<div class="history-item">
				<div class="history-item__year wow fadeInUp" data-wow-delay=".3s">
					2018
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2018-1.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства ЖК “Felicita”
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2018-2.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства КД “Mufarrah”
						</div>
					</div>
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2018-3.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства КД “Do`stlar”
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2018-4.jpg" alt="img">
						</div>
					</div>
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2018-5.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Завершение строительства ЖК “Cambridge Residence”
						</div>
					</div>
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2018-6.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings получила награду за "Самую инновационную презентацию проекта" на “World Build Tashkent”
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2018-7.jpg" alt="img">
						</div>
					</div>
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2018-8.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings стала обладателем премии “Самый желаемый работодатель” по версии Davinci
						</div>
					</div>
				</div>
			</div>
			<div class="history-item">
				<div class="history-item__year wow fadeInUp" data-wow-delay=".3s">
					2020
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2020-1.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings стала обладателем премии “Лучший работодатель 2020” по версии Davinci
						</div>
					</div>
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2020-2.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings стала обладателем премии “Бренд года 2019” по версии маркетинговой ассоциации Узбекистана
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2020-3.jpg" alt="img">
						</div>
					</div>
				</div>
			</div>
			<div class="history-item">
				<div class="history-item__year wow fadeInUp" data-wow-delay=".3s">
					2021
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2021-1.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings стала обладателем премии “Бренд года 2020” по версии маркетинговой ассоциации Узбекистана
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2021-2.jpg" alt="img">
						</div>
					</div>
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2021-3.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings приняла участие в ежегодном Ташкентском полумарафоне
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2021-4.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings приняла участие в ежегодном Самаркандском полумарафоне
						</div>
					</div>
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2021-5.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Благотворительное мероприятия Umid Kanotlari
						</div>
					</div>
				</div>
			</div>
			<div class="history-item">
				<div class="history-item__year wow fadeInUp" data-wow-delay=".3s">
					2022
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2022-1.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings стала обладателем премии “Бренд года 2021” по версии маркетинговой ассоциации Узбекистана
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2022-2.jpg" alt="img">
						</div>
					</div>
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2022-3.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings приняла участие в ежегодном Ташкентском полумарафоне
						</div>
					</div>
					<div class="history-item__block wow fadeInRight" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2022-4.jpg" alt="img">
						</div>
					</div>
				</div>
				<div class="history-item__wrap">
					<div class="history-item__block wow fadeInLeft" data-wow-delay=".3s">
						<div class="history-item__img">
							<img src="img/history/2022-5.jpg" alt="img">
						</div>
						<div class="history-item__text">
							Компания Murad Buildings стала обладателем бронзовой награды в категории “Digital кампания” на Ташкентском фестивале рекламы
						</div>
					</div>
				</div>
			</div> --}}

			<!-- КОНЕЦ ТАЙМЛАЙНА -->

			<div class="history-lifeline">
				<div class="history-lifeline__container">
					<canvas id="laima_line" width="570" height="14000"></canvas>
				</div>       
			</div>
			<div class="history-gradients">
				<div class="history-gradients__item">
					<img src="/img/historybg1.png" alt="img">
				</div>
				<div class="history-gradients__item">
					<img src="/img/historybg2.png" alt="img">
				</div>
				<div class="history-gradients__item">
					<img src="/img/historybg3.png" alt="img">
				</div>
				<div class="history-gradients__item">
					<img src="/img/historybg4.png" alt="img">
				</div>
				<div class="history-gradients__item">
					<img src="/img/historybg5.png" alt="img">
				</div>
				<div class="history-gradients__item">
					<img src="/img/historybg6.png" alt="img">
				</div>
				<div class="history-gradients__item">
					<img src="/img/historybg7.png" alt="img">
				</div>
			</div>
		</div>
		<div class="history-btn">
			<a href="/">
				<span>{{__('asd.На главную')}}</span>
			</a>
		</div>
		<div class="history-footer">
			<div class="history-footer__copy">
				&copy; 2022 Murad Buildings. {{__('asd.Все права защищены.')}}
			</div>
			<div class="history-footer__social">
				<p>{{__('asd.Мы в соц. сетях')}}</p>
				<ul class="header-social">
					<li>
						<a href="#" target="_blank">
							<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M19.2036 16.3438L19.7145 13.0158H16.521V10.8561C16.521 9.9458 16.9669 9.05791 18.3973 9.05791H19.849V6.2247C19.849 6.2247 18.5318 6 17.2721 6C14.6423 6 12.9234 7.59418 12.9234 10.4797V13.0164H10V16.3444H12.9234V24.39H16.521V16.3444L19.2036 16.3438Z" fill="white"/>
							</svg>									
						</a>
					</li>
					<li>
						<a href="#" target="_blank">
							<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M24.3332 11.4376C24.3219 10.6645 24.1789 9.89745 23.9052 9.17434C23.4262 7.93954 22.4508 6.96313 21.216 6.48514C20.5021 6.21653 19.7473 6.07252 18.9833 6.05617C18.0008 6.01226 17.6893 6 15.1952 6C12.701 6 12.3814 6 11.406 6.05617C10.643 6.07252 9.88826 6.21653 9.17434 6.48514C7.93953 6.96313 6.96313 7.93954 6.48514 9.17434C6.21653 9.88826 6.07149 10.643 6.0572 11.406C6.01328 12.3895 6 12.701 6 15.1952C6 17.6893 6 18.008 6.0572 18.9844C6.07252 19.7483 6.21653 20.5021 6.48514 21.218C6.96415 22.4518 7.93953 23.4282 9.17536 23.9062C9.88622 24.184 10.641 24.3413 11.407 24.3658C12.3906 24.4097 12.7021 24.423 15.1962 24.423C17.6903 24.423 18.01 24.423 18.9854 24.3658C19.7483 24.3505 20.5031 24.2065 21.218 23.9379C22.4529 23.4589 23.4282 22.4825 23.9072 21.2487C24.1759 20.5337 24.3199 19.78 24.3352 19.015C24.3791 18.0325 24.3924 17.721 24.3924 15.2258C24.3903 12.7317 24.3903 12.4151 24.3332 11.4376ZM15.189 19.9117C12.5805 19.9117 10.4674 17.7986 10.4674 15.1901C10.4674 12.5815 12.5805 10.4684 15.189 10.4684C17.7955 10.4684 19.9107 12.5815 19.9107 15.1901C19.9107 17.7986 17.7955 19.9117 15.189 19.9117ZM20.0987 11.3947C19.4889 11.3947 18.9976 10.9025 18.9976 10.2937C18.9976 9.68501 19.4889 9.19273 20.0987 9.19273C20.7064 9.19273 21.1986 9.68501 21.1986 10.2937C21.1986 10.9025 20.7064 11.3947 20.0987 11.3947Z" fill="white"/>
								<path d="M15.1892 18.2572C16.8831 18.2572 18.2563 16.8841 18.2563 15.1901C18.2563 13.4962 16.8831 12.123 15.1892 12.123C13.4953 12.123 12.1221 13.4962 12.1221 15.1901C12.1221 16.8841 13.4953 18.2572 15.1892 18.2572Z" fill="white"/>
							</svg>																		
						</a>
					</li>
					<li>
						<a href="#" target="_blank">
							<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.2764 23.3439L12.6182 18.1807L21.9926 9.73395C22.4076 9.35555 21.9071 9.17246 21.3578 9.50203L9.78633 16.8136L4.78177 15.2268C3.70763 14.9216 3.69542 14.177 5.0259 13.6399L24.5193 6.1209C25.4103 5.7181 26.2647 6.34061 25.923 7.70771L22.6029 23.3439C22.371 24.4547 21.6996 24.7232 20.7719 24.2105L15.7186 20.4754L13.2895 22.8312C13.0088 23.112 12.7769 23.3439 12.2764 23.3439Z" fill="white"/>
							</svg>																		
						</a>
					</li>
					<li>
						<a href="#" target="_blank">
							<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M21.0417 5H9.95833C7.77254 5 6 6.77254 6 8.95833V20.0417C6 22.2275 7.77254 24 9.95833 24H21.0417C23.2283 24 25 22.2275 25 20.0417V8.95833C25 6.77254 23.2283 5 21.0417 5ZM12.3333 20.0417H9.95833V11.3333H12.3333V20.0417ZM11.1458 10.3295C10.3811 10.3295 9.76042 9.70408 9.76042 8.933C9.76042 8.16192 10.3811 7.5365 11.1458 7.5365C11.9106 7.5365 12.5312 8.16192 12.5312 8.933C12.5312 9.70408 11.9114 10.3295 11.1458 10.3295ZM21.8333 20.0417H19.4583V15.6052C19.4583 12.9388 16.2917 13.1407 16.2917 15.6052V20.0417H13.9167V11.3333H16.2917V12.7306C17.3968 10.6834 21.8333 10.5322 21.8333 14.6908V20.0417Z" fill="white"/>
							</svg>																										
						</a>
					</li>		
				</ul>
			</div>
		</div>
	</div>
</section>


@endsection


@section('scripts')
<script>

	let $history = $('.history').height()

	$('.history .history-lifeline canvas').css('height', `${$history*1.05}px`)

	$('.about-page__subtitle').css({
		opacity: '1',
		transform: 'none'
	})

	setTimeout(() => {
		$('.about-page__title').css({
			opacity: '1',
			transform: 'none'
		})
	}, 400)

	setTimeout(() => {
		$('.about-page__text').css({
			opacity: '1',
			transform: 'none'
		})

		$('.about-page__ceo').css('opacity', '1')
	}, 600)
	


	$(window).on('load', () => {
		if(!(($(window).width() < 1080 && $(window).width() < $(window).height()) || $(window).width() < 768)) {
			$(function () {
				init();
				$(window).trigger('scroll');
			});
		}


		let root = parseInt($(':root').css('font-size'))

		let scroll
		let scrollSize = $(window).height()/6






		


		$(window).on('scroll', function(event) {
			
			let scrollDirection = scroll

			scroll = $(window).scrollTop()

			if(scroll > scrollSize) {
				if (scrollDirection > scroll) {
					$('.header').removeClass('header-hide')
				}
				else {           
					$('.header').addClass('header-hide')
					$('.header-lang__dropdown').fadeOut(600)
				}
			}


			if (typeof __stage !== 'undefined') {

				let scrollTop = $(window).scrollTop() - (root*101)
				let height = __stage.canvas.height+$history;
				// let koef = scrollTop / (root*1270)
				let koef = scrollTop / ($history*1.869)
				let frame = null;


				if (scrollTop > 0 && scrollTop < height ) {
					frame = Math.round(koef * window.__duration);
					__exportRoot.gotoAndStop(frame + 0)
				} else if (scrollTop <= 0 && frame !== null) {
					frame = null;
					__exportRoot.gotoAndStop(0)
				}
			}

			$('.history-item__text').map((index, item) => {
				if($(item).offset().top < (scroll + $(window).height()/1.2)) {
					if(!$(item).hasClass('anim')) {
						$(item).addClass('anim')
					}
				}
			})
		})
	})
	</script>
@endsection