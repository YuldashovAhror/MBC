<div>
    <div class="news-years">
        <div class="news-years__btn">
            {{__('asd.год')}} <span>{{$current_year}}</span> 
            <svg width="15" height="8" viewBox="0 0 15 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 1L7.5001 7L1 1" stroke="#110D60"/>
            </svg>												
        </div>
        <div class="news-years__dropdown">
            <ul>
                {{-- <li class="current">
                    2022    
                </li> --}}
                @foreach($news_years as $key=>$news_year)
                    @if($current_year != $news_year['year'])
                        <li wire:click="changeYear({{$news_year['year']}})">
                            {{$news_year['year']}}
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="news-tabs">
        <!-- СКОЛЬКО ЛЕТ СТОЛЬКО ТАБОВ -->
        <div class="news-tab">
            <div class="news-page__wrap">
                @foreach($news as $new)
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
                        <img src="{{$new->photo_main}}" alt="news">
                    </div>
                    <div class="news-item__line">
                        <img src="img/news.svg" alt="ico">
                    </div>
                    <div class="news-item__text">
                        {!!substr($new['description_'.$lang], 0, 300)!!}
                    </div>
                    {{-- substr($new->description1_ru, 0, 200) --}}
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
</div>
