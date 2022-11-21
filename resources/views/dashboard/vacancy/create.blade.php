@extends('layouts.dashboard.main')
@section('content')

<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Вакансия </h3>
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
        <form action="{{route('admin.vacancy.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-4 mb-3">
                {{-- <label class="form-label" >Название статуса</label> --}}
                <div class="col-md-4" style="padding-top: 2rem">
                    <select  name="category_id" class="form-control"  required="">
                        <option required="">Категория вакансии</option>
                            @foreach (App\Models\VacancyCategory::all() as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name_ru}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." required="" value="">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="date">Дата</label>
                    <input class="form-control" name="date" id="date" type="date" placeholder="..." required="" value="">
                </div>
            </div>
            <div class="row g-4 mb-3">
                <div class="col-md-4">
                    <label class="form-label" for="name_uz">Название Uz</label>
                    <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" value="">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="name_ru">Название Ru</label>
                    <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="name_en">Название En</label>
                    <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." required="" value="">
                </div>
            </div>
            <div class="row g-4 mb-3">
                <div class="col-md-4">
                    <label class="form-label" for="duty_uz">Долг Uz</label>
                    <textarea class="ckeditor form-control" name="duty_uz" required=""></textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="duty_ru">Долг Ru</label>
                    <textarea class="ckeditor form-control" name="duty_ru" required=""></textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="duty_en">Долг En</label>
                    <textarea class="ckeditor form-control" name="duty_en" required=""></textarea>
                </div>
            </div>
            <div class="row g-4 mb-3">
                <div class="col-md-4">
                    <label class="form-label" for="skills_uz">Навыки и умения Uz</label>
                    <textarea class="ckeditor form-control" name="skills_uz" required=""></textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="skills_ru">Навыки и умения Ru</label>
                    <textarea class="ckeditor form-control" name="skills_ru" required=""></textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="skills_en">Навыки и умения En</label>
                    <textarea class="ckeditor form-control" name="skills_en" required=""></textarea>
                </div>
            </div>
            <div class="row g-4 mb-3">
                <div class="col-md-4">
                    <label class="form-label" for="advantage_uz">Преимущество Uz</label>
                    <textarea class="ckeditor form-control" name="advantage_uz" required=""></textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="advantage_ru">Преимущество Ru</label>
                    <textarea class="ckeditor form-control" name="advantage_ru" required=""></textarea>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="advantage_en">Преимущество En</label>
                    <textarea class="ckeditor form-control" name="advantage_en" required=""></textarea>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Изменить</button>
        </form>
    </div>
</div>

@endsection