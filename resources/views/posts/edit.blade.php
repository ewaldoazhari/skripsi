@extends('layouts/app')

@section('content')
<h2>update post</h2>
@if($errors->all())
<div class="alert alert-danger">
	@foreach($errors->all() as $errors)
	<li>{{$errors}}</li>
	@endforeach
</div>
@endif

@if(session()->has('message'))
<div class="alert alert-success">
	{{session()->get('message')}}
</div>		
@endif

<form action="{{route('posts.update', $post->id)}}" method="post">
	@csrf
	@method('put')
	<div class="form-group">
		<label for="title" >Title</label>
		<input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
	</div>
	<div class="form-group">
		<label for="description">Description</label>
		<textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-outline-info">update post</button>
	</div>
</form>
@endsection	