@extends('layouts.master')
@section('content')



		<div class="row justify-content-center">
			<div class="card">
				<div class="card-header"></div>

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
					<form action="/upload?{{$user->id}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							Judul</label>
							<input type="text" name="title" id="title" class="form-control">
						</div>
						<div class="form-group">
							Deskripsi</label>
							<textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<input type="file" class="form-control-file" name="file" id="exampleInputFile" aria-describedby="fileHelp">
							<small id="fileHelp" class="form-text text-muted">Pilih video yang akan diunggah.</small>
						</div>
						<button type="submit" class="btn btn-primary">Publikasikan</button>
					</form>
				</div>
			</div>
		</div>

	@endsection
