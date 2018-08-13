@extends('test')

@section('content')
<div class="container">
	{{--<div class="card-header"><h1>{{$user->name}}</h1></div>--}}
	<br>
	<br>
	@foreach($posts as $video)
	<div class="card">
		<div class="card-body">

			<h2>
				<a href="{{route('show', $video->id)}}">
					{{$video->title}}
				</a>
				<br>
				<a href="{{route('edit', $video->id)}}" class="btn btn-info">Ubah</a>
				<form onsubmit="return confirm('apakah anda yakin untuk menghapus video ini ?')" class="d-inline-block" method="post" action="{{route('posts.destroy' , $video->id)}}">
					@csrf
					@method('delete')
					<button type="submit" class="btn btn-danger">Hapus</button>
				</form>
				<hr>
			</h2>
		</div>
	</div>
	@endforeach
	<div class="mt-4">
		{{$posts->links()}}
	</div>
</div>

@endsection