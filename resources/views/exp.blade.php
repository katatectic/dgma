<form method="POST" action="{{route('CheckAge')}}">	
	Возраст: <input type="text" name="age">
	<input type="submit" name="submit">
	{{ csrf_field() }}
</form>