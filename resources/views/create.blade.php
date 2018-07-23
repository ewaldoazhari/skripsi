@extends('layouts.master')

@section('content')
<div class="card-header"><h2>{{ __('Add a Learning') }}</h2></div>
<br>
<br>
<div class="main-grid">
	<div class="card">
		<div class="card-body">
			<h2>
				@if($errors->all())
				<div class="alert alert-danger">
					@foreach($errors->all() as $errors)
					<li>{{$errors}}</li>
					@endforeach
				</div>
				@endif
				<form action="{{url('/store')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" id="title" class="form-control">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label for="exercise">Exercise</label>
						<textarea name="exercise" id="exercise" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<button type="share" class="btn btn-outline-info">SHARE</button>
					</div>
				</form>
			</h2>
		</div>
	</div>
</div>


@endsection	


