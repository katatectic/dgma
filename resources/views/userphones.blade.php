<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phones</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   
</head>
<h1>Все телефоны {{$user->name}} {{$user->email}}</h1>
    <div id="phones">
        <h3>Здравствуйте, Вы видите телефоны {{$user->name}}</h3>
        @foreach ($phones as $phone)
            <div>Модель {{$phone->model}}</div>
            <div>Описание {{$phone->description}} г.</div>
            <div>Цена тебя порадует {{$phone->price}} гривен</div>
            <div>Email: {{$user->email}}</div>
        </br></br></br>
        @endforeach        
    </div>
    
</html>