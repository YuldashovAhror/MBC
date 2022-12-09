<header class="header @if(\Request::segment(1) == 'about')header-about @elseif(\Request::segment(1) == 'career')header-static header-career @elseif(\Request::segment(1) == 'contact' || \Request::segment(1) == 'news' || \Request::segment(1) == 'projects')header-static @endif">
    <div class="container">
        <div class="header-wrap">
            <div class="header-left">
                <ul class="header-menu">
                    <li>
                        <a href="/about">{{__('asd.О компании')}}</a>
                    </li>
                    <li>
                        <a href="/projects">{{__('asd.Проекты')}}</a>
                    </li>
                    <li>
                        <a href="/news">{{__('asd.Новости')}}</a>
                    </li>
                    <li>
                        <a href="/career">{{__('asd.Карьера')}}</a>
                    </li>
                    <li>
                        <a href="/contact">{{__('asd.Контакты')}}</a>
                    </li>
                </ul>
            </div>
            <div class="header__logo">
                <a href="/">
                    <img src="/img/logo.svg" alt="Murad Buildings">
                </a>
            </div>
            <div class="header-right">
                <ul class="header-social">
                    <li>
                        <a href="https://www.facebook.com/muradbuildings" target="_blank">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2036 16.3438L19.7145 13.0158H16.521V10.8561C16.521 9.9458 16.9669 9.05791 18.3973 9.05791H19.849V6.2247C19.849 6.2247 18.5318 6 17.2721 6C14.6423 6 12.9234 7.59418 12.9234 10.4797V13.0164H10V16.3444H12.9234V24.39H16.521V16.3444L19.2036 16.3438Z" fill="white"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/murad_buildings/" target="_blank">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.3332 11.4376C24.3219 10.6645 24.1789 9.89745 23.9052 9.17434C23.4262 7.93954 22.4508 6.96313 21.216 6.48514C20.5021 6.21653 19.7473 6.07252 18.9833 6.05617C18.0008 6.01226 17.6893 6 15.1952 6C12.701 6 12.3814 6 11.406 6.05617C10.643 6.07252 9.88826 6.21653 9.17434 6.48514C7.93953 6.96313 6.96313 7.93954 6.48514 9.17434C6.21653 9.88826 6.07149 10.643 6.0572 11.406C6.01328 12.3895 6 12.701 6 15.1952C6 17.6893 6 18.008 6.0572 18.9844C6.07252 19.7483 6.21653 20.5021 6.48514 21.218C6.96415 22.4518 7.93953 23.4282 9.17536 23.9062C9.88622 24.184 10.641 24.3413 11.407 24.3658C12.3906 24.4097 12.7021 24.423 15.1962 24.423C17.6903 24.423 18.01 24.423 18.9854 24.3658C19.7483 24.3505 20.5031 24.2065 21.218 23.9379C22.4529 23.4589 23.4282 22.4825 23.9072 21.2487C24.1759 20.5337 24.3199 19.78 24.3352 19.015C24.3791 18.0325 24.3924 17.721 24.3924 15.2258C24.3903 12.7317 24.3903 12.4151 24.3332 11.4376ZM15.189 19.9117C12.5805 19.9117 10.4674 17.7986 10.4674 15.1901C10.4674 12.5815 12.5805 10.4684 15.189 10.4684C17.7955 10.4684 19.9107 12.5815 19.9107 15.1901C19.9107 17.7986 17.7955 19.9117 15.189 19.9117ZM20.0987 11.3947C19.4889 11.3947 18.9976 10.9025 18.9976 10.2937C18.9976 9.68501 19.4889 9.19273 20.0987 9.19273C20.7064 9.19273 21.1986 9.68501 21.1986 10.2937C21.1986 10.9025 20.7064 11.3947 20.0987 11.3947Z" fill="white"/>
                                <path d="M15.1892 18.2572C16.8831 18.2572 18.2563 16.8841 18.2563 15.1901C18.2563 13.4962 16.8831 12.123 15.1892 12.123C13.4953 12.123 12.1221 13.4962 12.1221 15.1901C12.1221 16.8841 13.4953 18.2572 15.1892 18.2572Z" fill="white"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://telegram.me/muradbuildings" target="_blank">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.2764 23.3439L12.6182 18.1807L21.9926 9.73395C22.4076 9.35555 21.9071 9.17246 21.3578 9.50203L9.78633 16.8136L4.78177 15.2268C3.70763 14.9216 3.69542 14.177 5.0259 13.6399L24.5193 6.1209C25.4103 5.7181 26.2647 6.34061 25.923 7.70771L22.6029 23.3439C22.371 24.4547 21.6996 24.7232 20.7719 24.2105L15.7186 20.4754L13.2895 22.8312C13.0088 23.112 12.7769 23.3439 12.2764 23.3439Z" fill="white"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/murad-buildings/mycompany/" target="_blank">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.0417 5H9.95833C7.77254 5 6 6.77254 6 8.95833V20.0417C6 22.2275 7.77254 24 9.95833 24H21.0417C23.2283 24 25 22.2275 25 20.0417V8.95833C25 6.77254 23.2283 5 21.0417 5ZM12.3333 20.0417H9.95833V11.3333H12.3333V20.0417ZM11.1458 10.3295C10.3811 10.3295 9.76042 9.70408 9.76042 8.933C9.76042 8.16192 10.3811 7.5365 11.1458 7.5365C11.9106 7.5365 12.5312 8.16192 12.5312 8.933C12.5312 9.70408 11.9114 10.3295 11.1458 10.3295ZM21.8333 20.0417H19.4583V15.6052C19.4583 12.9388 16.2917 13.1407 16.2917 15.6052V20.0417H13.9167V11.3333H16.2917V12.7306C17.3968 10.6834 21.8333 10.5322 21.8333 14.6908V20.0417Z" fill="white"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="header-lang">
                    <div class="header-lang__btn">
                        <span>@if($lang == 'uz') O’Z @elseif($lang == 'ru') РУ @elseif($lang == 'en') EN @endif</span>
                        <img src="/img/chevron-down.svg" alt="ico">
                    </div>
                    <div class="header-lang__list">
                        @if($lang != 'ru')<a href="/languages/ru">РУ</a>@endif
                        @if($lang != 'uz')<a href="/languages/uz">O’Z</a>@endif
                        @if($lang != 'en')<a href="/languages/en">EN</a>@endif
                    </div>
                </div>
                <a href="tel:+998712208822" class="header-tel">
                    <div class="header-tel__text">
                        +998 <span>71 220 88 22</span>
                    </div>
                    <div class="header-tel__ico">
                        <img src="/img/tel.svg" alt="ico">
                    </div>
                </a>
                <div class="header-mobile">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </div>
    </div>
</header>