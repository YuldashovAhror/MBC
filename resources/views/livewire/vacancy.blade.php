<div>
    <section class="vacancy" id="vacancy">
		<div class="container">
			<h2 class="vacancy__title career-title">
				{{__('asd.Работа, в которой можно')}}<br>
				<strong>{{__('asd.проявить свои способности')}} </strong>
			</h2>
			<div class="vacancy-filter">
				<label class="vacancy-filter__item">
					<input wire:click='changeCategory("all")' name="all" type="checkbox" @if($check == 'all') checked @endif >
					<span>{{__('asd.Все')}}</span>
				</label>
                @foreach ($categories as $category)
                    <label class="vacancy-filter__item">
                        <input wire:click='changeCategory({{$category->id}})' name="{{$category}}" type="checkbox" @if($check == $category->id) checked @endif>
                        <span>{{$category['name_'.$lang]}}</span>
                    </label>
                @endforeach
				{{-- <label class="vacancy-filter__item">
					<input type="checkbox">
					<span>{{__('asd.Другое')}}</span>
				</label> --}}
			</div>
            {{-- @foreach ($current_categories as $current_category)
                {{$current_category}}
            @endforeach
            @foreach ($vacancies as $vacancy)
                {{$vacancy->name_uz}}
            @endforeach --}}

			<div class="vacancy-result">
                @foreach($vacancies as $vacancy)
                    <div class="vacancy-item">
                        <div class="vacancy-item__img">
                            <img src="{{$vacancy->photo}}" alt="img">
                        </div>
                        <div class="vacancy-item__name">
                            {{$vacancy['name_'.$lang]}}
                        </div>
                        <div class="vacancy-item__wrap">
                            <div class="vacancy-item__date">
                                {{$vacancy->date}}
                            </div>
                            <a href="{{route('career.single', $vacancy->slug)}}" class="vacancy-item__link" onclick="choose({{ $vacancy->id }})">
                                {{__('asd.Подробнее')}}
                            </a>
                        </div>
                    </div>
                @endforeach 
                {{-- {{ $vacancies->links() }} --}}
            
			</div>
        
			<div class="vacancy-more">
				<button 
                style="background: #D2AE6D; padding: 1rem 2.2rem; color: #fff; font-size: 0.9rem; font-weight: 300; border-color: #D2AE6D " 
                wire:click="paginate()">
					{{__('asd.Показать ещё')}}
				</button>
			</div>
		</div>
	</section>
</div>