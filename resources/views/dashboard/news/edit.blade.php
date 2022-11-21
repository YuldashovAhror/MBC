@extends('layouts.dashboard.main')
@section('content')

<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Новости </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
        
        {{-- @dd($new->photo_main) --}}
        <div >
            
            <div>
                <img style="padding-left: 5rem" src="{{$new->photo_main}}" alt="">
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('admin.news.update', $new->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                {{-- <label class="form-label" >Название статуса</label> --}}
                <div class="col-md-8">
                    <label class="form-label" for="photo_main">Второе фото</label>
                    <input class="form-control" name="photo_main" id="photo_main" type="file" placeholder="..." value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="date">Дата</label>
                    <div class="input-group">
                        <input class="form-control" name="date" id="date" type="date" placeholder="..." aria-describedby="inputGroupPrepend2" value="{{$new->date}}">
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="title_uz">Заголовок Uz</label>
                    <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$new->title_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="title_ru">Заголовок Ru</label>
                    <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$new->title_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="title_en">Заголовок En</label>
                    <div class="input-group">
                        <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$new->title_en}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="description_uz">Описание Uz</label>
                    <textarea class="ckeditor form-control" name="description_uz" required="">{{$new->description_uz}}</textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="description_ru">Описание Ru</label>
                    <textarea class="ckeditor form-control" name="description_ru" required="">{{$new->description_ru}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="description_en">Описание En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="description_en" required="">{{$new->description_en}}</textarea>
                    </div>
                </div>
            </div>
            <div>
                <img style="padding-left: 5rem" src="{{$new->photo}}" alt="">
            </div>
            <div class="row g-4 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..."  value="">
                </div>
            </div>
            <div class="row g-4 mb-3">
                <div class="col-md-4">
                    <label class="form-label" for="type_uz">Тип Uz</label>
                    <input class="form-control" name="type_uz" id="type_uz" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$new->type_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="type_ru">Тип Ru</label>
                    <input class="form-control" name="type_ru" id="type_ru" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$new->type_ru}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="type_en">Тип En</label>
                    <input class="form-control" name="type_en" id="type_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$new->type_en}}">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Изменить</button>
        </form>
    </div>
</div>

@endsection
