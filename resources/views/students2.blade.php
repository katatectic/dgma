<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   
</head>
<h1>Это совершенно новая вьюха!!!</h1>
{{--Эта вьюшка выводит студентов из базы. Ссылка следующая http://localhost/dgma/public/students--}}
    <div id="articles">        
        <h3>Здравствуйте, Вы видите студентов</h3>
        @foreach ($students as $student)
            <div id="author">
                Имя: {{$student->name}} Фамилия: {{$student->surname}} Телефон: {{$student->phone}}
                <a href="{{route('stud_delete',$student->id)}}">Удалить студента</a>
                <a href="{{route('stud_edit',$student->id)}}">Редактировать студента</a>
            </div>

        @endforeach        
    </div>
    <div><a href="{{route('stud_add')}}">Добавить студента</a></div>
    {{--{{$students->links()}}--}}
</html>