@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Команда</h3>
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
                            <th scope="col">Фото</th>
                            <th scope="col">Ссылка на видео</th>
                            <th scope="col">Название Uz</th>
                            <th scope="col">Описание Uz</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $num = 1;
                        ?>
                        @foreach ($teams as $team)                            
                            <tr>
                                <th scope="row">{{$num++}}</th>
                                <td><img src="{{$team->photo}}" alt="" style="width: 100px; height: 100px;"></td>
                                <td >{{$team->video}}</td>
                                <td >{{$team->name_uz}}</td>
                                <td>{{$team->position_uz}}</td>
                                <td>
                                    <form action="{{route('admin.teams.edit', $team->slug)}}" method="GET" style="display: inline;">
                                        <button class="btn btn-xs btn-primary" type="submit"><i data-feather="edit"></i></button>
                                    </form>
            
                                    {{-- <button class="btn btn-xs btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" data-bs-original-title="" title=""><i data-feather="trash-2"></i></button> --}}
                                    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal{{ $team->id }}"><i data-feather="trash-2"></i></a>
                                </td>
                                <div id="myModal{{ $team->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myModalLabel">Rostdan ham o'chirmoqchimisiz?</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admin.teams.destroy', $team->id )}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">O'chirish</button>
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