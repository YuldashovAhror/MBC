@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Статистика</h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
        {{-- @if(Session::has('message'))
        Success
        @endif --}}
        {{-- <div class="alert alert-secondary" role="alert">
            This is a primary alert—check it out!
        </div> --}}
    </div>
    <div class="card-body">
        <form action="{{route('admin.statistics.update', $statistic)}}" method="POST">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-3">
                    <label class="form-label" for="year">Лет на рынке</label>
                    <input class="form-control" name="year" id="year" type="number" placeholder="..." required="" min="2000" max="2099" value="{{ $statistic->year }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="project">Успешных проектов</label>
                    <input class="form-control" name="project" id="project" type="text" placeholder="..." required="" value="{{ $statistic->project }}">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label" for="family">Cчастливых семей</label>
                    <div class="input-group">
                        <input class="form-control" name="family" id="family" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{ $statistic->family }}">
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label" for="area">Площадь проектов</label>
                    <div class="input-group">
                        <input class="form-control" name="area" id="area" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{ $statistic->area }}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Изменить</button>
        </form>
    </div>
</div>




@endsection