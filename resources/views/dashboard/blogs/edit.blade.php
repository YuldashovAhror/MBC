@extends('layouts.dashboard.main')
@section('content')

<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Блоги </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
        <img style="padding-left: 30rem" src="{{$blog->photo}}" alt="">
    </div>
    {{-- @dd($blog) --}}
    <div class="card-body">
        <form action="{{route('admin.blogs.update', $blog->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-8">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..."  value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="video_link">Ссылка на видео</label>
                    <div class="input-group">
                        <input class="form-control" name="video_link" id="video_link" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$blog->video_link}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="title_uz">Заголовок Uz</label>
                    <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$blog->title_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="title_ru">Заголовок Ru</label>
                    <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$blog->title_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="title_en">Заголовок En</label>
                    <div class="input-group">
                        <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$blog->title_en}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label for="inputAddress" class="form-label">Описание Uz</label>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="description_uz" required="">{{$blog->description_uz}}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="description_ru">Описание Ru</label>
                    <textarea class="ckeditor form-control" name="description_ru" required="">{{$blog->description_ru}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="description_en">Описание En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="description_en" required="">{{$blog->description_en}}</textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Изменить</button>
        </form>
    </div>
</div>

@endsection