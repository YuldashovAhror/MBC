<div class="feedback">
    <div class="feedback-content">
        <div class="feedback__close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 19.1421L19.1421 4.99995" stroke="white" stroke-width="2"/>
                <path d="M19.1421 19.1421L4.99995 4.99995" stroke="white" stroke-width="2"/>
            </svg>
        </div>

        <div class="feedback-wrap">
                <div class="feedback__title">
                    {{__('asd.Форма обратной связи')}}
                </div>
                <div class="feedback__text">
                    {{__('asd.Оставьте ваши координаты и мы свяжемся с вами в ближайшее время')}}
                </div>
                <form class="feedback-form" action="#">
                    <div class="feedback-form__input">
                        <span>{{__('asd.Ваше имя')}}</span>
                        <input id="name" type="text" required placeholder="{{__('asd.Имя')}}">
                    </div>
                    <div class="feedback-form__input">
                        <span>{{__('asd.Ваш телефон')}}</span>
                        <input type="tel" id="phone"  required placeholder="{{__('asd.Телефон')}} " class="form__tel" pattern="^[0-9-+\s()]*$">
                        <input id="token" value="{{ csrf_token() }}" type="hidden">
                    </div>
                    <div class="feedback-form__input">
                        <span>{{__('asd.Тип обращения')}}</span>
                        <select required id="feedcat_id" required="" class="customSelect">
                        @foreach (App\Models\Feedcat::all() as $cat)
                            <option value="{{ $cat->id }}">{{ $cat['name_'.$lang]}}</option>
                        @endforeach
                        </select>
                    </div>
                </form>
                <div class="feedback__info">
                    {{__('asd.Даю согласие на обработку моих персональных данных')}}
                </div>
                <button id="button" onclick="send()" type="submit" class="btn">
                    {{__('asd.Отправить')}}
                </button>
        </div>
        <div class="feedback-done">
            <div class="feedback__title">
                {{__('asd.Спасибо!')}}
            </div>
            <div class="feedback__text">
                {{__('asd.Ваша заявка принята, наш менеджер свяжется с вами в ближайшее время')}}
            </div>
            <div class="feedback__img">
                <img src="/img/done.png" alt="ico">
            </div>
        </div>
    </div>
</div>

<script>
    function send() {
        let token = $("#token").val();
        let name = $('#name').val();
        let phone = $('#phone').val();
        let feedcat_id = $('#feedcat_id').val();
        
        $.ajax({
            token: token,
            type: "get",
            url: "/dashboard/feedback",
            data: {
                name: name,
                phone: phone,
                feedcat_id: feedcat_id,
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
        });
        setTimeout(() => {
            $('.feedback-wrap').hide()
            $('.feedback-done').show()
        }, 1000)
        setTimeout(() => {
            $('.feedback-wrap').show()
            $('.feedback-done').hide()
            $('.feedback').hide()
        }, 3000)
    }
</script>