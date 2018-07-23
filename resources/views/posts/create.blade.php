@extends('layouts/app')

@section('content')`
<div class="card-header"><h2>{{ __('Add a Post') }}</h2></div>
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
				<form action="{{route('posts.store')}}" method="post">
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
						<button type="share" class="btn btn-primary">SHARE</button>
					</div>
				</form>
			</h2>
		</div>
	</div>
</div>

				<!-- <div class="row justify-content-center">
		            <div class="card">
		                <div class="card-header">Upload File</div>
		 
		                <div class="card-body">
		                    @if ($message = Session::get('success'))
		 
		                        <div class="alert alert-success alert-block">
		 
		                            <button type="button" class="close" data-dismiss="alert">×</button>
		 
		                            <strong>{{ $message }}</strong>
		 
		                        </div>
		 
		                    @endif
		 
		                    @if (count($errors) > 0)
		                        <div class="alert alert-danger">
		                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
		                            <ul>
		                                @foreach ($errors->all() as $error)
		                                    <li>{{ $error }}</li>
		                                @endforeach
		                            </ul>
		                        </div>
		                    @endif
		 
		 
		                        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
		                            @csrf
		                            <div class="form-group">
		                                <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile" aria-describedby="fileHelp">
		                                <small id="fileHelp" class="form-text text-muted">Please upload a valid video file. Size of video should not be more than 200MB.</small>
		                            </div>
		                            <div class="form-group">
										<label for="title">Title</label>
										<input type="text" name="title" id="title" placeholder="title" v-model="title" class="form-control" required >
									</div>
									<div class="form-group">
										<label for="description">Description</label>
										<textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
									</div>
		                            <div class="form-group">
										<button type="submit" class="btn btn-outline-info">Add a post</button>
									</div>
		                        </form>
		                </div>
		            </div>
		        </div> -->

@endsection	


