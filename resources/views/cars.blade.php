@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Привет, пользователь! Посмотри какие машины.</div>
            	@foreach($cars as $car)
            		<div>Марка машины {{$car->model}}</div>
            		<div>Год выпуска {{$car->year}} г.</div>
            		<div>Цена тебя порадует {{$car->price}} гривен</div>
            		<a href="{{route('deletecars', $car->id)}}">Удалить</a>
            	@endforeach            	
            </div>
            {{$cars->links()}}
        </div>
    </div>
</div>


@endsection