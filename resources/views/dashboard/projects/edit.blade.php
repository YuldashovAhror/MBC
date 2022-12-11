@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Проекты</h3>
</div>
<div class="card">
        <div class="card-header pb-0">
            <h5>Изменить</h5>
            {{-- @dd($project) --}}
            <img style="padding-left: 5rem" src="{{$project->photo}}" alt="">
        </div>
        <div class="card-body">
            <form action="{{route('admin.projects.update',$project->slug)}}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('put') }}
                <div class="row g-4">
                    <div class="col-md-4">
                        <label class="form-label" >Название статуса</label>
                        <select name="status" id="status" class="form-control"  required="">
                                @foreach (App\Models\ProjectStatus::all() as $status)
                                    <option  value="{{ $status->id }}" @selected($status->id == $project->status_id)> {{ $status->name_ru}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="photo">Фото</label>
                        <input class="form-control" name="photo" id="photo" type="file" placeholder="..." value="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="link">Ссылка на сайт</label>
                        <div class="input-group">
                            <input class="form-control" name="link" id="link" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$project->link}}">
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <label class="form-label" for="name_uz">Название Uz</label>
                        <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="{{$project->name_uz}}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="name_ru">Название Ru</label>
                        <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="{{$project->name_ru}}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="name_en">Название En</label>
                        <div class="input-group">
                            <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$project->name_en}}">
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <label class="form-label" for="description_uz">Описание Uz</label>
                        <textarea class="ckeditor form-control" name="description_uz" required="">{{$project->description_uz}}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="description_ru">Описание Ru</label>
                        <textarea class="ckeditor form-control" name="description_ru" required="">{{$project->description_ru}}</textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="description_en">Описание En</label>
                        <div class="input-group">
                            <textarea class="ckeditor form-control" name="description_en" required="">{{$project->description_en}}</textarea>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Изменить</button>
            </form>
        </div>
</div>
</div>

@endsection
