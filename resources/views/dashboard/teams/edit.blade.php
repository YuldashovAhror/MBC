@extends('layouts.dashboard.main')
@section('content')

<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Команда </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
        <img style="padding-left: 15rem" src="{{$team->photo}}" alt="">
    </div>
    <div class="card-body">
        <form action="{{route('admin.teams.update', $team->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-8">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..."  value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="video">видео</label>
                    <div class="input-group">
                        <input class="form-control" name="video" id="video" type="file" placeholder="..." aria-describedby="inputGroupPrepend2"  value="{{$team->video}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="name_uz">Название Uz</label>
                    <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." value="{{$team->name_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="name_ru">Название Ru</label>
                    <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="{{$team->name_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="name_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$team->name_en}}">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="position_uz">Должность Uz</label>
                    <input class="form-control" name="position_uz" id="position_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="{{$team->position_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="position_ru">Должность Ru</label>
                    <input class="form-control" name="position_ru" id="position_ru" type="text" placeholder="..." required="" value="{{$team->position_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="position_en">Должность En</label>
                    <div class="input-group">
                        <input class="form-control" name="position_en" id="position_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$team->position_en}}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Изменить</button>
        </form>
    </div>
</div>

@endsection