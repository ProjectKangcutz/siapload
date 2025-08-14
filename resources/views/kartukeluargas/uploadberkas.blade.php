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

@include('kartukeluargas.form_uploadReadonly')

				
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