@extends('layouts.dashboard.main')
@section('content')

<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Ценности </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Добавить</h5>
        {{-- @if(Session::has('message'))
        Success
        @endif --}}
        {{-- <div class="alert alert-secondary" role="alert">
            This is a primary alert—check it out!
        </div> --}}
    </div>
    <div class="card-body">
        <form action="{{route('admin.values.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                
                <div class="col-md-12  mb-3">
                    <label class="form-label" for="photo">Второе фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." required="" value="">
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="title_uz">Заголовок Uz</label>
                    <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="title_ru">Заголовок Ru</label>
                    <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="title_en">Заголовок En</label>
                    <div class="input-group">
                        <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="description_uz">Описание Uz</label>
                    <textarea class="ckeditor form-control" name="description_uz" required=""></textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="description_ru">Описание Ru</label>
                    <textarea class="ckeditor form-control" name="description_ru" required=""></textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="description_en">Описание En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="description_en" required=""></textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>

@endsection