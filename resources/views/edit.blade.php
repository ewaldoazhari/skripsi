@extends('test')

@section('content')
<div class="container">
	<h2>Edit</h2>
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

	<form action="{{url('update', $post->id)}}" method="post">
		@csrf
		@method('put')
		<div class="form-group">
			<label for="title" >Judul</label>
			<input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
		</div>
		<div class="form-group">
			<label for="description">Deskripsi</label>
			<textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
		</div>
		<div class="form-group">
			<label for="exercise">Latihan</label>
			<textarea name="exercise" id="exercise" cols="30" rows="10" class="form-control">{{$post->exercise}}</textarea>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-info">Ubah</button>
		</div>
	</form>
</div>
@endsection	