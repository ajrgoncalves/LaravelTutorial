@extends('pages.layout')

@section('content')

<h1>Edit the notes</h1>


<form method="POST" action="/notes/{{$note->id}} ">
	
	<input type="hidden" name="_method" value="PATCH">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	

	<div class="form-group">
		<textarea name="body" class="form-control">{{ $note->body }}</textarea>

	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary"> Update Note</button>
	</div>
</form>	
@stop