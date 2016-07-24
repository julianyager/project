@extends('layout')

@section('content')
<h1>Edit note</h1>
<form method="POST" action="/notes/{{ $note->id }}">
	{{ method_field('PATCH') }}
	{{ csrf_field() }}
	<!--http://stackoverflow.com/questions/28875788/laravel-5-auth-post-submit-tokenmismatchexception-in-verifycsrftoken-php-line-->
		<div class="form-group">
			<textarea name="body" class="form-control" placeholder="Add a note">{{ $note->body }}</textarea>
		</div>

		<div class="form-group">
				<button type="submit" class="btn btn-primary"> Update Note </button>
		</div>
</form>

@stop
