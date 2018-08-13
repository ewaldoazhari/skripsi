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

						@if($errors->all())
							<div class="alert alert-danger">
								@foreach($errors->all() as $errors)
									<li>{{$errors}}</li>
								@endforeach
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
						<hr>
						<small id="fileHelp" class="form-text text-muted">Silahkan mengisi form pertanyaan dan jawaban apabila kamu ingin menambahkan soal latihan pada video anda.</small>
						<br>
						<small id="fileHelp" class="form-text text-muted">Kamu juga dapat langsung menekan tombol UNGGAH apabila kamu tidak ingin menambahkan soal latihan.</small>
						<br>
						<br>
						<div class="form-group">
							Pertanyaan</label>
							<textarea name="pertanyaan" id="pertanyaan" cols="30" rows="10" class="form-control"></textarea>
						</div>
						<div class="form-group">
							Jawaban 1</label>
							<input type="text" name="jawaban1" id="jawaban1" class="form-control">
						</div>
						<div class="form-group">
							Jawaban 2</label>
							<input type="text" name="jawaban2" id="jawaban2" class="form-control">
						</div>
						<div class="form-group">
							Jawaban 3</label>
							<input type="text" name="jawaban3" id="jawaban3" class="form-control">
						</div>
						<div class="form-group">
							Jawaban Benar</label>
							<input type="text" name="jawaban_benar" id="jawabanBenar" class="form-control">
						</div>

						<button type="submit" class="btn btn-primary">Unggah</button>
					</form>
				</div>
			</div>
		</div>

	@endsection
