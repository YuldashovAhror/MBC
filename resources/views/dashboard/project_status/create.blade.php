@extends('layouts.dashboard.main')
@section('content')

<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Статус </h3>
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
        <form action="{{route('admin.status.store')}}" method="POST">
            @csrf
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="name_uz">Название Uz</label>
                    <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="name_ru">Название Ru</label>
                    <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="name_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>

<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Статус Список</h3>
</div>
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
                            <th scope="col">Название Uz</th>
                            <th scope="col">Название Ru</th>
                            <th scope="col">Название En</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    {{-- @dd($status) --}}
                        <?php
                        $num = 1;
                        ?>
                        <tbody>
                    @foreach ($status as $statu)
                    <tbody>
                        <tr>
                            <th scope="row">{{$num++}}</th>
                            <td >{{$statu->name_uz}}</td>
                            <td>{{$statu->name_ru}}</td>
                            <td>{{$statu->name_en}}</td>
                            <td>
                                <form action="{{route('admin.status.edit', $statu->id)}}" method="GET" style="display: inline;">
                                    <button class="btn btn-xs btn-primary" type="submit"><i data-feather="edit"></i></button>
                                </form>
                                
                                    <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{$statu->id}}" data-bs-original-title="" title=""><i data-feather="trash-2"></i></button>
                            </td>
                            <div class="modal fade" id="exampleModalCenter{{$statu->id}}" tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Rostan ham o'chirmoqchimisiz</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Закрывать</button>
                                        <form action="{{route('admin.status.destroy', $statu->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger" type="submit"  data-bs-original-title="" title="">Удалить</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </tr>
                    </tbody>    
                    @endForeach
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection