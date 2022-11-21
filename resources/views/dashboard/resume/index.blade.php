@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Продолжить</h3>
</div>
{{-- @dd($projects) --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
                <h5>Список</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                <thead>
                    
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Фото</th>
                        <th scope="col">Вакансия Название</th>
                        <th scope="col">Название</th>
                        <th scope="col">Эл.адрес</th>
                        <th scope="col">Телефон 1</th>
                        <th scope="col">Телефон 2</th>
                        <th scope="col">Письмо</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $num = 1;
                        ?>
                        <tbody>
                    @foreach ($resumes as $resume)
                        
                    <tr>
                        <th scope="row">{{$num++}}</th>
                        <td><a href="{{ $resume->file }}"><button class="btn btn-primary">открыть</button></a></td>
                        <th scope="row">{{$resume->vacancies->name_ru}}</th>
                        <td >{{$resume->full_name}}</td>
                        <td>{{$resume->email}}</td>
                        <td>{{$resume->phone1}}</td>
                        <td>{{$resume->phone2}}</td>
                        <td>{!!$resume->letter!!}</td>
                        <td>
                            <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{$resume->id}}" data-bs-original-title="" title=""><i data-feather="trash-2"></i></button>
                        </td>
                        <div class="modal fade" id="exampleModalCenter{{$resume->id}}" tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title">Rostan ham o'chirmoqchimisiz</h5>
                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Закрывать</button>
                                    <form action="{{route('admin.resume.destroy', $resume->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit"  data-bs-original-title="" title="">Удалить</button>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection