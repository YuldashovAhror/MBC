<header class="main-nav">
    <div class="sidebar-user text-center">
        <img class="img-90 rounded-circle" src="/img/logo.svg" alt="">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6></a>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Menu</h6>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('dashboard.index')}}">
                            <i data-feather="home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('admin.statistics.index')}}">
                            <i data-feather="bar-chart-2"></i>
                            <span>Статистика</span></a>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="box" ></i><span>Проекты</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.projects.index')}}">Список</a></li>
                            <li><a href="{{route('admin.projects.create')}}">Создайте</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit"></i><span>Блоги</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.blogs.index')}}">Список</a></li>
                            <li><a href="{{route('admin.blogs.create')}}">Создайте</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="image"></i><span>Галереи</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.gallerys.index')}}">Список</a></li>
                            <li><a href="{{route('admin.gallerys.create')}}">Создайте</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file"></i><span>Новости</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.news.index')}}">Список</a></li>
                            <li><a href="{{route('admin.news.create')}}">Создайте</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Статус</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.status.create')}}">Создайте</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Команды</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.teams.index')}}">Список</a></li>
                            <li><a href="{{route('admin.teams.create')}}">Создайте</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="save"></i><span>Категория вакансии</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.vacancycategory.index')}}">Список</a></li>
                            {{-- <li><a href="{{route('admin.vacancycategory.create')}}">Создайте</a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown "><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="clipboard"></i><span>Вакансия</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.vacancy.index')}}">Список</a></li>
                            <li><a href="{{route('admin.vacancy.create')}}">Создайте</a></li>
                        </ul>
                    </li>
                    <li class="dropdown mb-1"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Ценности</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{route('admin.values.index')}}">Список</a></li>
                            <li><a href="{{route('admin.values.create')}}">Создайте</a></li>
                        </ul>
                    </li>
                    <li class="dropdown mb-2">
                        <a class="nav-link menu-title link-nav" href="{{route('admin.resume')}}"><i data-feather="list"></i><span>Продолжить</span></a>
                        
                    </li>
                    <li class="dropdown mb-2">
                        <a class="nav-link menu-title link-nav" href="{{route('admin.feedback.index')}}"><i data-feather="phone-call"></i><span>Обратная связь</span></a>
                        
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title link-nav" href="{{route('admin.words.create')}}"><i data-feather="book"></i><span>Словаp</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>