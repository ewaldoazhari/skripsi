@extends('test')

@section('content')

	<div class="card-header"><h1>{{ Auth::user()->name }}</h1></div>
	<br>
	<br>
	@foreach($posts as $post)
	<div class="card">
		<div class="card-body">
			<h2>
				<a href="{{route('posts.show', $post->id)}}">
					{{$post->title}}
				</a>
				<a href="{{route('posts.edit', $post->id)}}" class="btn btn-info">Edit</a>
				<form onsubmit="return confirm('are you sure to delete this post?')" class="d-inline-block" method="post" action="{{route('posts.destroy' , $post->id)}}">
					@csrf
					@method('delete')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</h2>
		</div>
	</div>
	@endforeach
	<div class="mt-4">
		{{$posts->links()}}
	</div>


@endsection