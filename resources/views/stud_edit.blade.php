<form method="POST" action="{{route('student_edit',$student->id)}}">
	<label for="name">Your name: </label>
	<input type="text" name="name" style="display: block;" value="{{$student->name}}">
	<label for="surname">Your surname: </label>
	<input type="text" name="surname" style="display: block;" value="{{$student->surname}}">
	<label for="phone">Your phone: </label>
	<input type="text" name="phone" style="display: block;" value="{{$student->phone}}">
	<input type="submit" name="submit">
	{{ csrf_field() }}
</form>