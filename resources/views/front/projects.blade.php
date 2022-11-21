@extends('layouts.front.main')

@section('content')
<!-- OFFER -->
	
<section class="offer">
	<div class="offer-bg">
		<img src="img/projectsBg.jpg" alt="projects">
	</div>
	<div class="container">
		<h1 class="offer__title">
			{{__('asd.Наши проекты')}}
		</h1>
	</div>
</section>


<!-- PROJECTS  -->
{{-- @dd($projects) --}}
<section class="projects-page">
	<div class="container">
		<div class="projects-page__wrap">
			@foreach ($projects as $project)
			<a href="{{$project->link}}" class="projects-page__item">
				<div class="projects-page__img">
					<img src="{{$project->photo}}" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status">
					{{$project->status['name_'.$lang]}}
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							{{$project['name_'.$lang]}}
						</div>
						<div class="projects-page__text">
							{!!$project['description_'.$lang]!!}
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			@endforeach
			{{-- <a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/2.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status">
					Идут продажи
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Nest One
						</div>
						<div class="projects-page__text">
							Первый небоскрёб Узбекистана
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			<a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/3.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status last">
					Последние квартиры
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Do’stlar
						</div>
						<div class="projects-page__text">
							Один из самых необычных 
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			<a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/4.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status sold">
					Все квартиры проданы
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Cambridge Residence
						</div>
						<div class="projects-page__text">
							Город в городе 
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			<a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/5.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status sold">
					Все квартиры проданы
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Felicita
						</div>
						<div class="projects-page__text">
							Счастье 
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			<a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/6.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status sold">
					Все квартиры проданы
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Mufarrah
						</div>
						<div class="projects-page__text">
							Восхитительный
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			<a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/7.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status sold">
					Все квартиры проданы
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Green City
						</div>
						<div class="projects-page__text">
							“Зеленый” жилой комплекс
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			<a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/8.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status sold">
					Все квартиры проданы
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Amir Temur
						</div>
						<div class="projects-page__text">
							Город в городе
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			<a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/9.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status sold">
					Все квартиры проданы
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Gulsaroy
						</div>
						<div class="projects-page__text">
							Жилой комплекс 
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			<a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/10.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status sold">
					Все квартиры проданы
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Ko`kcha Qo`rg`oni
						</div>
						<div class="projects-page__text">
							Жилой комплекс 
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			<a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/11.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status sold">
					Все квартиры проданы
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Millenium
						</div>
						<div class="projects-page__text">
							Жилой комплекс
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a>
			<a href="#" class="projects-page__item">
				<div class="projects-page__img">
					<img src="img/projects/12.jpg" alt="project">
				</div>

				<!-- last - последние, sold - проданы -->

				<div class="projects-page__status sold">
					Все квартиры проданы
				</div>
				<div class="projects-page__wrapper">
					<div class="projects-page__info">
						<div class="projects-page__name">
							Central
						</div>
						<div class="projects-page__text">
							Жилой комплекс
						</div>
					</div>
					<div class="about-arrow">
						<svg width="16" height="6" viewBox="0 0 16 6" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M14.3124 2.92007L5.23218 2.92007M14.3124 2.92007L12.2754 4.95703M14.3124 2.92007L12.2754 0.883038M2.99564 2.92007L0.697266 2.92007" stroke="white"/>
							<circle cx="4.1854" cy="2.97574" r="0.895357" transform="rotate(-90 4.1854 2.97574)" stroke="white"/>
						</svg>
					</div>
				</div>
			</a> --}}
		</div>
	</div>
</section>
@endsection

@section('scripts')
	@include('components.front.scripts_welcome')
@endsection