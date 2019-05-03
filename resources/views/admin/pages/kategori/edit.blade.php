@extends('admin.main')
@section('title','kategori Edit')
@section('content')
<h1>Kategori <small class="text-muted">Edit</small></h1>
<hr>

@if( session('result') == 'fail')
<div class="alert alert-danger alert-dismissible fade show">
	<strong>Failed !</strong> Gagal diupdate.
	<button type="button" class="close" data-dismiss="alert">
		&times;

	</button>

</div>
@endif
<div class="row">
	<div class="col-md-6 mb-3">
		<form method="POST" action="{{ route('admin.kategori.edit',['id'=>$rc->id]) }}">
			{{ csrf_field() }}
			<div class="card">
				<div class="card-header">
					<h5>Ubah Data Kategori</h5>
				</div><!-- Card Header -->

				<div class="card-body">
					<div class="form-group form-label-group">
						<input type="text" name="kategori"
						class="form-control {{ $errors->has('kategori')?'is-invalid':'' }}"
						value="{{ old('kategori', $rc->nama_kategori) }}"
						id="ikategori" placeholder="kategori" required>
						<label for="ikategori">Kategori</label>
						@if( $errors->has('kategori') )
						<div class="invalid-feedback">{{ $errors->first('kategori') }}</div>
						@endif
					</div><!-- End Form Group -->
				</div><!-- End Card Body -->
				<div class="car-footer">
					<button class="btn btn-primary" type="submit">Update</button>
				</div><!-- End card Footer -- >

			</div><!-- End Card -->
		</form>

	</div>

</div>

@endsection