<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="/img/favicon.ico" type="/image/x-icon">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/intlTelInput.min.css">
	<link rel="stylesheet" href="/css/custom.select.css">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/main.css">
	<title>Murad Buildings</title>
</head>
<body>
	@include('components.front.mobile_menu')
	@include('components.front.header')
	<section class="news-single">
		<div class="news-single__banner">
			{{-- <img src="{{$new->photo_main}}" alt="news"> --}}
			<div class="container">
				<h1 class="news-single__title">
					{{$new['title_'.$lang]}} 
				</h1>
			</div>
		</div>
		<div class="news-single__main">
			<div class="container">
				<div class="news-single__content">
					<a href="/news" class="news-single__back">
						<div>
							<svg width="14" height="6" viewBox="0 0 14 6" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1.18313 3.09229L12.2182 3.09229L13.002 3.09229M1.18313 3.09229L3.65875 5.45605M1.18313 3.09229L3.65875 0.728443" stroke="white"/>
							</svg>
						</div>
						<span>{{__('asd.Назад')}}</span>
					</a>
					<div class="news-single__text">
						<img src="{{$new->photo_main}}" alt="news">
						<p>{!!$new['description_'.$lang]!!}</p>
						<img src="{{$new->photo}}" alt="news">
					</div>
				</div>
				<div class="news-single__sidebar">
					<div class="news-single__more">
						{{__('asd.Другие новости')}}
					</div>
					@foreach ($news as $new)
						<div class="news-item">
							<div class="news-item__head">
								<div class="/news-item__date">
									{{$new->date}}
								</div>
								<div class="news-item__category">
									{{$new['type_'.$lang]}}
								</div>
							</div>
							<div class="news-item__name">
								{{$new['title_'.$lang]}}
							</div>
							<div class="news-item__img">
								<img src="{{$new->photo}}" alt="news">
							</div>
							<div class="news-item__line">
								<img src="/img/news.svg" alt="ico">
							</div>
							<div class="news-item__text">
								{!!$new['description_'.$lang]!!} 
							</div>
							<div class="news-item__btn">
								<a href="{{route('news.show', $new->slug)}}">
									{{__('asd.Подробнее')}}
								</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	@include('components.front.footer')

	<script src="/js/jquery-3.4.1.min.js"></script>
	<script src="/js/intlTelInput-jquery.min.js"></script>
	<script src="/js/owl.carousel.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="/js/map.js"></script>
	<script src="/js/line.js"></script>
	<script src="/js/jquery.custom-select.js"></script>
	<script src="/js/jquery.nicescroll.min.js"></script>
	<script src="/js/wow.min.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>