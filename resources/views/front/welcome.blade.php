@extends('layouts.front.main')
@section('styles')
    @livewireStyles
@endsection
@section('content')
    <section class="main">
        <div class="main-bg">
            <img src="img/mainBg.jpg" alt="img">
        </div>
        <div class="main-content">
            <div class="main-content__text">
                <svg width="1455" height="88" viewBox="0 0 1455 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.44 86H23.24V38L44.6 70.64H45.08L66.56 37.76V86H89.72V1.99999H65.12L45.08 34.52L25.04 1.99999H0.44V86ZM104.62 86H141.82C162.34 86 175.54 75.08 175.54 56.96C175.54 38 160.78 28.4 140.62 28.4H127.9V1.99999H104.62V86ZM127.9 66.44V46.64H140.14C147.7 46.64 152.26 50.48 152.26 56.36C152.26 62.96 147.7 66.44 140.02 66.44H127.9ZM185.38 86H208.66V1.99999H185.38V86ZM297.286 87.68C315.886 87.68 326.566 79.64 334.486 68.72L316.966 56.24C311.926 62.36 306.766 66.44 298.006 66.44C286.246 66.44 277.966 56.6 277.966 44C277.966 31.52 286.246 21.56 298.006 21.56C306.046 21.56 311.686 25.28 316.486 31.28L333.526 18.08C326.086 7.76 315.406 0.319994 298.246 0.319994C272.806 0.319994 253.966 19.52 253.966 44C253.966 69.32 273.286 87.68 297.286 87.68ZM365.023 86H388.303V22.4H413.503V1.99999H339.823V22.4H365.023V86ZM423.721 86H447.001V62H458.521C479.401 62 494.641 51.56 494.641 31.76C494.641 12.92 480.961 1.99999 459.721 1.99999H423.721V86ZM447.001 43.76V21.56H457.921C466.321 21.56 471.361 25.4 471.361 32.6C471.361 39.44 466.321 43.76 458.041 43.76H447.001ZM546.703 87.68C572.623 87.68 592.063 68.12 592.063 44C592.063 19.64 572.863 0.319994 546.943 0.319994C521.023 0.319994 501.583 19.88 501.583 44C501.583 68.36 520.783 87.68 546.703 87.68ZM546.943 66.68C534.223 66.68 525.463 56.12 525.463 44C525.463 31.64 533.983 21.32 546.703 21.32C559.543 21.32 568.303 31.88 568.303 44C568.303 56.36 559.783 66.68 546.943 66.68ZM604.19 86H625.91L658.43 38.72V86H681.47V1.99999H659.75L627.23 49.28V1.99999H604.19V86ZM696.299 86H719.099V38L740.459 70.64H740.939L762.419 37.76V86H785.579V1.99999H760.979L740.939 34.52L720.899 1.99999H696.299V86ZM874.2 87.68C892.8 87.68 903.48 79.64 911.4 68.72L893.88 56.24C888.84 62.36 883.68 66.44 874.92 66.44C863.16 66.44 854.88 56.6 854.88 44C854.88 31.52 863.16 21.56 874.92 21.56C882.96 21.56 888.6 25.28 893.4 31.28L910.44 18.08C903 7.76 892.32 0.319994 875.16 0.319994C849.72 0.319994 830.88 19.52 830.88 44C830.88 69.32 850.2 87.68 874.2 87.68ZM968.577 86H991.857V1.99999H968.577V35.96C964.857 38.96 959.457 40.52 953.817 40.52C945.537 40.52 942.297 36.32 942.297 27.32V1.99999H919.017V33.92C919.017 51.56 929.457 62 947.097 62C954.417 62 963.057 59.84 968.577 56.6V86ZM1000.01 86H1024.49L1030.49 71H1062.89L1069.01 86H1093.97L1058.21 1.39999H1035.77L1000.01 86ZM1037.33 52.88L1046.81 29L1056.17 52.88H1037.33ZM1142.56 87.68C1161.16 87.68 1171.84 79.64 1179.76 68.72L1162.24 56.24C1157.2 62.36 1152.04 66.44 1143.28 66.44C1131.52 66.44 1123.24 56.6 1123.24 44C1123.24 31.52 1131.52 21.56 1143.28 21.56C1151.32 21.56 1156.96 25.28 1161.76 31.28L1178.8 18.08C1171.36 7.76 1160.68 0.319994 1143.52 0.319994C1118.08 0.319994 1099.24 19.52 1099.24 44C1099.24 69.32 1118.56 87.68 1142.56 87.68ZM1210.3 86H1233.58V22.4H1258.78V1.99999H1185.1V22.4H1210.3V86ZM1268.99 86H1306.19C1326.71 86 1339.91 75.08 1339.91 56.96C1339.91 38 1325.15 28.4 1304.99 28.4H1292.27V1.99999H1268.99V86ZM1292.27 66.44V46.64H1304.51C1312.07 46.64 1316.63 50.48 1316.63 56.36C1316.63 62.96 1312.07 66.44 1304.39 66.44H1292.27ZM1349.74 86H1417.9V66.2H1372.78V52.88H1413.1V34.52H1372.78V21.8H1417.3V1.99999H1349.74V86ZM1429.9 86H1453.66V65.6H1429.9V86ZM1435.78 58.64H1447.78L1454.74 12.2V1.99999H1428.82V12.2L1435.78 58.64Z" fill="white"/>
                </svg>
            </div>
            <div class="main-content__house">
                <img src="img/main.png" alt="main">
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <h2 class="about__title section-title wow fadeInLeft" data-wow-delay=".3s">
                    {{__('asd.О компании')}}
                </h2>
                <div class="about__subtitle wow fadeInLeft" data-wow-delay=".4s">
                    {{__('asd.Один из ведущих и опытных девелоперов')}}
                </div>
                <div class="about__text wow fadeInLeft" data-wow-delay=".5s">
                    <p>
                        Murad Buildings, {{__('asd.команда профессионалов, ставшая единой семьей, сплоченная единством мысли и духа во имя создания уникальных объектов недвижимости')}}, {{__('asd.призванная приносить счастье, радость и комфорт людям!')}}
                    </p>
                    <a href="/about" class="about-arrow">
                        <svg width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.8352 4.85209L8.65634 4.85209M25.8352 4.85209L21.9814 8.70581M25.8352 4.85209L21.9814 0.998255M4.42505 4.85209L0.0767823 4.85209" stroke="white"/>
                            <circle cx="6.67649" cy="4.9573" r="2.13987" transform="rotate(-90 6.67649 4.9573)" stroke="white"/>
                        </svg>
                    </a>
                </div>
            
                <div class="about-numbers wow fadeInLeft" data-wow-delay=".6s">
                    <div class="about-numbers__item">
                        <div class="about-numbers__value">
                            <span>{{$statistic->year}}</span>
                        </div>
                        <div class="about-numbers__info">
                            {{__('asd.лет на рынке')}}
                        </div>
                    </div>
                    <div class="about-numbers__item">
                        <div class="about-numbers__value">
                            <span>{{$statistic->project}}</span>
                        </div>
                        <div class="about-numbers__info">
                            {{__('asd.успешных проектов')}}
                        </div>
                    </div>
                    <div class="about-numbers__item">
                        <div class="about-numbers__value">
                            <span>{{$statistic->family}}</span><small></small>
                        </div>
                        <div class="about-numbers__info">
                            {{__('asd.счастливых семей')}}
                        </div>
                    </div>
                    <div class="about-numbers__item">
                        <div class="about-numbers__value">
                            <span>{{$statistic->area}}</span><small>+</small><p>m2</p>
                        </div>
                        <div class="about-numbers__info">
                            {{__('asd.площадь проектов')}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-img wow fadeInUp" data-wow-delay="2s">
                <img src="img/about.png" alt="img">
            </div>
        </div>
    </section>

    <!-- ADVANTAGES -->
    <section class="advantages">
        <div class="container">
            <div class="advantages-wrap">
                <div class="advantages-steps">
                    <h2 class="advantages__title section-title">
                        {{__('asd.Преимущества')}}
                    </h2>
                    <div class="advantages-circle">
                        <img src="img/circle.png" alt="img">
                        <span>
							<img src="img/advantages-house1.png" alt="advantages" class="show">
							<img src="img/advantages-house2.png" alt="advantages">
							<img src="img/advantages-house3.png" alt="advantages">
							<img src="img/advantages-house4.png" alt="advantages">
							<img src="img/advantages-house5.png" alt="advantages">
							<img src="img/advantages-house6.png" alt="advantages">
							<img src="img/advantages-house7.png" alt="advantages">
							<img src="img/advantages-house8.png" alt="advantages">
						</span>
                        <svg version="1.1" id="star-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 600 600"  xml:space="preserve">

							<circle id="star-path" fill="none" stroke="#000000" stroke-width="10" cx="300" cy="300" r="290"/>

						</svg>
                    </div>
                    <div class="advantages-logo">
                        <img src="img/advantages-logo.svg" alt="img">
                    </div>
                </div>
                <ul class="advantages-list">
                    <div class="advantages-item current">
                        <div class="advantages-item__main">
                            <div class="advantages-item__info">
                                <div class="advantages-item__name">
                                    {{__('asd.Сервис')}}
                                </div>
                                <div class="advantages-item__desc">
                                    {{__('asd.Индивидуальный подход')}}
                                </div>
                            </div>
                            <div class="advantages-item__btn">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.576 10.648H6.204V6.116H10.78V4.532H6.204V0H4.576V4.532H0V6.116H4.576V10.648Z" fill="#110D60"/>
                                </svg>
                            </div>
                        </div>
                        <div class="advantages-item__text">
                            {{__('asd.Мы предоставляем индивидуальный подход к каждому клиенту с учетом его возможностей и пожеланий при выборе недвижимости.')}}
                        </div>
                    </div>
                    <div class="advantages-item">
                        <div class="advantages-item__main">
                            <div class="advantages-item__info">
                                <div class="advantages-item__name">
                                    {{__('asd.Комфорт')}}
                                </div>
                                <div class="advantages-item__desc">
                                    {{__('asd.Планирование инфраструктуры')}}
                                </div>
                            </div>
                            <div class="advantages-item__btn">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.576 10.648H6.204V6.116H10.78V4.532H6.204V0H4.576V4.532H0V6.116H4.576V10.648Z" fill="#110D60"/>
                                </svg>
                            </div>
                        </div>
                        <div class="advantages-item__text">
                            {{__('asd.Мы подходим к планированию инфраструктуры жилых комплексов и квартир как к постройке собственного дома')}}, {{__('asd.поэтому в них есть все необходимые условия для вашего комфортного проживания')}}
                        </div>
                    </div>
                    <div class="advantages-item">
                        <div class="advantages-item__main">
                            <div class="advantages-item__info">
                                <div class="advantages-item__name">
                                    {{__("asd.Инновации")}}
                                </div>
                                <div class="advantages-item__desc">
                                    {{__('asd.Передовые технологии')}}
                                </div>
                            </div>
                            <div class="advantages-item__btn">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.576 10.648H6.204V6.116H10.78V4.532H6.204V0H4.576V4.532H0V6.116H4.576V10.648Z" fill="#110D60"/>
                                </svg>
                            </div>
                        </div>
                        <div class="advantages-item__text">
                            {{__('asd.При проектировании мы используем только лучшие решения и передовые технологии, будь то материалы для строительства или архитектура здания.')}}
                        </div>
                    </div>
                    <div class="advantages-item">
                        <div class="advantages-item__main">
                            <div class="advantages-item__info">
                                <div class="advantages-item__name">
                                    {{__('asd.Качество')}}
                                </div>
                                <div class="advantages-item__desc">
                                    {{__('asd.Гарантия на своё жильё')}}
                                </div>
                            </div>
                            <div class="advantages-item__btn">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.576 10.648H6.204V6.116H10.78V4.532H6.204V0H4.576V4.532H0V6.116H4.576V10.648Z" fill="#110D60"/>
                                </svg>
                            </div>
                        </div>
                        <div class="advantages-item__text">
                            {{__('asd.Наша цель не объем строительства, а его качество. Все этапы строительства проходят стандартизацию и соответствуют требованиям строительных норм.')}} {{__('asd.Каждый покупатель получает гарантию на свое жилье.')}}
                        </div>
                    </div>
                    <div class="advantages-item">
                        <div class="advantages-item__main">
                            <div class="advantages-item__info">
                                <div class="advantages-item__name">
                                    {{__('asd.Доверие')}}
                                </div>
                                <div class="advantages-item__desc">
                                    {{__('asd.Надёжный застройщик')}}
                                </div>
                            </div>
                            <div class="advantages-item__btn">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.576 10.648H6.204V6.116H10.78V4.532H6.204V0H4.576V4.532H0V6.116H4.576V10.648Z" fill="#110D60"/>
                                </svg>
                            </div>
                        </div>
                        <div class="advantages-item__text">
                            {{__('asd.Компания зарекомендовала себя на рынке как надежный застройщик. Мы помогаем решить самые разные вопросы и постоянно взаимодействуем с покупателями на протяжении строительства объекта.')}}
                        </div>
                    </div>
                    <div class="advantages-item">
                        <div class="advantages-item__main">
                            <div class="advantages-item__info">
                                <div class="advantages-item__name">
                                    {{__('asd.Прозрачность')}}
                                </div>
                                <div class="advantages-item__desc">
                                    {{__('asd.Наблюдение за ходом строительства')}} 24/7
                                </div>
                            </div>
                            <div class="advantages-item__btn">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.576 10.648H6.204V6.116H10.78V4.532H6.204V0H4.576V4.532H0V6.116H4.576V10.648Z" fill="#110D60"/>
                                </svg>
                            </div>
                        </div>
                        <div class="advantages-item__text">
                            {{__('asd.Мы максимально открыты для своих потребителей. При необходимости наши клиенты всегда могут посетить объект и наблюдать за ходом строительства.')}}
                        </div>
                    </div>
                    <div class="advantages-item">
                        <div class="advantages-item__main">
                            <div class="advantages-item__info">
                                <div class="advantages-item__name">
                                    {{__('asd.Уникальность')}}
                                </div>
                                <div class="advantages-item__desc">
                                    {{__('asd.Продуманная архитектурная формула')}}
                                </div>
                            </div>
                            <div class="advantages-item__btn">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.576 10.648H6.204V6.116H10.78V4.532H6.204V0H4.576V4.532H0V6.116H4.576V10.648Z" fill="#110D60"/>
                                </svg>
                            </div>
                        </div>
                        <div class="advantages-item__text">
                            {{__('asd.Каждый наш проект – это продуманная архитектурная формула. Мы не просто реализуем и совершенствуем «штучные» объекты недвижимости, а формируем новый стиль жизни.')}}
                        </div>
                    </div>
                    <div class="advantages-item">
                        <div class="advantages-item__main">
                            <div class="advantages-item__info">
                                <div class="advantages-item__name">
                                    {{__('asd.Забота')}}
                                </div>
                                <div class="advantages-item__desc">
                                    {{__('asd.Комфорт и безопасность')}}
                                </div>
                            </div>
                            <div class="advantages-item__btn">
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.576 10.648H6.204V6.116H10.78V4.532H6.204V0H4.576V4.532H0V6.116H4.576V10.648Z" fill="#110D60"/>
                                </svg>
                            </div>
                        </div>
                        <div class="advantages-item__text">
                            {{__('asd.Мы заботимся о максимально комфортной и беззаботной жизни наших покупателей и после сдачи объекта.')}}
                        </div>
                    </div>
                    <div class="advantages-item advantages-item-last">
                        {{__('asd.Мы строим счастье!')}}
                    </div>
                </ul>
            </div>
        </div>
    </section>

    <!-- PROJECTS -->
    <section class="projects">
        <div class="container">
            <h2 class="projects__title section-title">
                {{__('asd.Наши проекты')}}
            </h2>
        </div>
        
            
        <div class="projects-arrows">
			<span class="arrow-left">
				<svg width="9" height="20" viewBox="0 0 9 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M8 19L1 10.0001L8 1" stroke="white"/>
				</svg>
			</span>
            <span class="arrow-right">
				<svg width="9" height="20" viewBox="0 0 9 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 19L8 10.0001L1 1" stroke="white"/>
				</svg>
			</span>
        </div>
        @php($k=1)
        
            <div class="projects-carousel">
                <!-- КАЖДЫЙ СЛАЙД projects-carousel__item ПО 3 ПРОЕКТА projects-item -->
                @foreach ($projects as $project)
                    <div class="projects-carousel__item">
                        @foreach ($project as $pro)
                        <div class="projects-item">
                            <div class="projects-item__img">
                                <img src="{{$pro->photo}}" alt="project">
                            </div>
                            <div class="projects-item__content">
                                <div class="projects-item__status">
                                    {{$pro->status['name_'.$lang]}}
                                </div>
                                <div class="projects-item__name">
                                    {{$pro['name_'.$lang]}}
                                </div>
                                <div class="projects-item__text">
                                    {!!$pro['description_'.$lang]!!}
                                </div>
                                <a href="{{$pro->link}}" class="projects-item__arrow">
                                    <svg width="27" height="10" viewBox="0 0 27 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M25.8352 4.85209L8.65634 4.85209M25.8352 4.85209L21.9814 8.70581M25.8352 4.85209L21.9814 0.998255M4.42505 4.85209L0.0767823 4.85209" stroke="white"/>
                                        <circle cx="6.67649" cy="4.9573" r="2.13987" transform="rotate(-90 6.67649 4.9573)" stroke="white"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endforeach
                </div>
            </div>
            
    </section>

    <!-- NEWS -->
    <section class="news">
        <div class="container">
            <div class="news-head">
                <h2 class="news__title section-title">
                    {{__('asd.Новости')}}
                </h2>
                <a href="/news" class="news-btn">
                    {{__('asd.Все новости')}}
                </a>
            </div>
            
            <div>
                <div class="news-wrap">
                    <div class="news-years">
                        <div class="news-years__btn">
                            {{__('asd.год')}} <span></span>
                            <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 1L7.5001 7L1 1" stroke="#110D60"/>
                            </svg>
                        </div>
                        <div class="news-years__dropdown">
                            <ul>
                                {{-- <li class="current">
                                    2022
                                </li> --}}
                                <?php $news_years = App\Models\NewPromotion::select('year')->distinct()->orderByDesc('year')->get(); ?>
                                @foreach($news_years as $key=>$news_year)
                                    
                                        <li> 
                                            {{ $news_year->year }}
                                        </li>
                                    
                                @endforeach
                            </ul>
                        </div>
                        <div class="news-arrows">
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
                    <div class="news-tabs">
            
                        <!-- СКОЛЬКО ЛЕТ СТОЛЬКО ТАБОВ -->
                    
                        @foreach($news_years as $key=>$news_year)
                        
                            <div class="news-tab">
                                <div class="news-carousel owl-carousel">
                                    @foreach(App\Models\NewPromotion::where('year', $news_year->year)->get() as $new)
                                        <div class="news-item">
                                            <div class="news-item__head">
                                                <div class="news-item__date">
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
                                                <img src="img/news.svg" alt="ico">
                                            </div>
                                            <div class="news-item__text">
                                                
                                            </div>
                                            <div class="news-item__btn">
                                                <a href="{{route('news.show', $new->id)}}">
                                                    {{__('asd.Подробнее')}}
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection

@section('scripts')
    @include('components.front.scripts_welcome')
    @livewireScripts
@endsection