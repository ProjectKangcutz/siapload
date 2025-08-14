@extends('layouts.main')

@section('top-content')
<h1>SKPWNI</h1>
<nav>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
		<li class="breadcrumb-item active">SKPWNI</li>
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
			<div class="card-header">SKPWNI</div>
			<div class="card-body">

				<div class="content-container">
					<header>
						<h1 class="center-text">NO SKPWNI {{$no_skpwni}}</h1>
					</header>
					<div id="portfolio-content" class="center-text">
						<div class="portfolio-page" id="page-1">
							@foreach($files as $index => $berkas)
							<div class="portfolio-group">
								<a class="portfolio-item" href="{{ asset('storage/'.$berkas->path) }}">
									<img src="{{ asset('storage/'.$berkas->path) }}" alt="image {{ $index+1 }}">
									<div class="detail">
										<h3>Gambar {{ $index+1 }} - {{ $berkas->doc ?? 'Tanpa Judul' }}</h3>
										<p style="text-transform: uppercase;">{{ $berkas->jenis ?? 'Tanpa Jenis Dok'}}</p>
										<span class="btn">View</span>
									</div>
								</a>				
							</div>
							@endforeach
						</div>
						 <!-- page 3 	
						<div class="pagination">
							<ul class="nav">
								<li class="active">1</li>
								<li>2</li>
								<li>3</li>
							</ul>
						</div>-->	
					</div>
				</div>	<!-- /.content-container -->	


			</div>
		</div>
	</div>
</div>

</div>

</div>

</div>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="{{asset('plipturn/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plipturn/css/magnific-popup.css')}}" rel="stylesheet"> 
<link href="{{asset('plipturn/css/templatemo_style.css')}}" rel="stylesheet" type="text/css">	

<script type="text/javascript" src="{{asset('plipturn/js/jquery-1.11.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plipturn/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('plipturn/js/modernizr.2.5.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plipturn/js/jquery.magnific-popup.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('plipturn/js/templatemo_script.js')}}"></script>
<script type="text/javascript">
	$(function () {
		$('.pagination li').click(changePage);
		$('.portfolio-item').magnificPopup({ 
			type: 'image',
			gallery:{
				enabled:true
			}
		});
	});
</script>	
@endsection