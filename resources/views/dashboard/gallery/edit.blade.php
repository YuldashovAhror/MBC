@extends('layouts.dashboard.main')
@section('content')

<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Галерея </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
        <img style="padding-left: 15rem" src="{{$gallery->photo}}" alt="">
    </div>
    <div class="card-body">
        <form action="{{route('admin.gallerys.update', $gallery->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-8">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="year">Год</label>
                    <div class="input-group">
                        <input class="form-control" name="year" id="year" type="text" placeholder="..." min="2000" max="2099" aria-describedby="inputGroupPrepend2" required="" value="{{$gallery->year}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="title_uz">Название Uz</label>
                    <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..."  value="{{$gallery->title_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="title_ru">Название Ru</label>
                    <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..."  value="{{$gallery->title_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="title_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2"  value="{{$gallery->title_en}}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Изменить</button>
        </form>
    </div>
</div>

@endsection

