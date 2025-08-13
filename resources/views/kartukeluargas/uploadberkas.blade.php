@extends('layouts.main')

@section('top-content')
<h1>Kartu Keluarga</h1>
<nav>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
		<li class="breadcrumb-item active">Kartu Keluarga</li>
	</ol>
</nav>
@endsection

@section('content')

<div class="row">
	<div class="col-lg-12">
		@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
		@endif

		@if ($errors->any())
		<div class="alert alert-danger">
			<strong>Whoops!</strong> Mohon maaf ada kesalahan dalam input anda :<br><br>
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<div class="card">
			<div class="card-header">Kartu Keluarga</div>
			<div class="card-body">

				<form method="post" action="{{ route('kartukeluargas.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<label for="no_kk" class="col-2 col-form-label">No Kartu Keluarga</label> 
						<div class="col-10">
							<input id="no_kk" name="no_kk" type="text" class="form-control" value="{{ $no_kk ?? 'kosong' }}" readonly>
						</div>
					</div> 
					<div class="form-group row">
						<label for="doc" class="col-2 col-form-label">Dokumen</label> 
						<div class="col-10">
							<select id="doc" name="doc" class="custom-select" required="required">
								<option value="formulir">Formulir</option>
								<option value="kk_lama">KK Lama</option>
								<option value="ktp">KTP</option>
								<option value="ijazah">Ijazah</option>
								<option value="akta_lahir">Akta Kelahiran</option>
								<option value="akta_mati">Akta Kematian</option>
								<option value="buku_nikah">Buku Nikah</option>
								<option value="suket">Surat Keterangan</option>
								<option value="sptjm">SPTJM</option>
								<option value="su_pernyataan">Surat Pernyataan</option>
								<option value="su_kehilangan">Surat Kehilangan</option>
								<option value="putusan">Putusan PN</option>
								<option value="lainnya">Dokumen Lainnya</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="file" class="col-2 col-form-label">Upload <span class="small text-danger">Max: 200kb</span></label> 
						<div class="col-10">
							<input id="file" name="file" type="file" accept="image/*" class="form-control">
						</div>
					</div> 
					<div class="form-group row">
						<div class="offset-4 col-8">
							<button name="submit" type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</div>
				</form>

				
			</div>
		</div>

		<div class="card">
			@include('kartukeluargas.gallery')
		</div>
	</div>
</div>

</div>

</div>

</div>

@endsection