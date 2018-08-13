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

	<form action="/update?{{$video->id}}" method="post" enctype="multipart/form-data">
	<!-- <form action="{{url('update', $video->id)}}" method="post"> -->
		@csrf
		<!-- @method('put') -->
		<div class="form-group">
			Judul</label>
			<input type="text" name="title" id="title" class="form-control" value="{{$video->title}}">
		</div>
		<div class="form-group">
			Deskripsi</label>
			<textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$video->description}}</textarea>
		</div>
		@if( $quiz !== null )
		<div class="form-group">
			Pertanyaan</label>
			<textarea name="pertanyaan" id="pertanyaan" cols="30" rows="10" class="form-control">{{$quiz->pertanyaan}}</textarea>
		</div>
		<div class="form-group">
			Jawaban 1</label>
			<input type="text" name="jawaban1" id="jawaban1" class="form-control" value="{{$quiz->jawaban1}}">
		</div>
		<div class="form-group">
			Jawaban 2</label>
			<input type="text" name="jawaban2" id="jawaban2" class="form-control" value="{{$quiz->jawaban2}}">
		</div>
		<div class="form-group">
			Jawaban 3</label>
			<input type="text" name="jawaban3" id="jawaban3" class="form-control" value="{{$quiz->jawaban3}}">
		</div>
		<div class="form-group">
			Jawaban Benar</label>
			<input type="text" name="jawaban_benar" id="jawabanBenar" class="form-control" value="{{$quiz->jawaban_benar}}">
		</div>
		@endif
		<div class="form-group">
			<button type="submit" class="btn btn-outline-info">Ubah</button>
		</div>
	</form>
</div>
@endsection









