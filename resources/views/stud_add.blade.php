<form method="POST" action="{{route('student_add')}}">
	<label for="name">Your name: </label>
	<input type="text" name="name" style="display: block;">
	<label for="surname">Your surname: </label>
	<input type="text" name="surname" style="display: block;">
	<label for="phone">Your phone: </label>
	<input type="text" name="phone" style="display: block;">
	<input type="submit" name="submit">
	{{ csrf_field() }}
</form>