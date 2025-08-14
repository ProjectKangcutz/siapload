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

@include('skpwnis.form_upload')
				
			</div>
		</div>
          <!-- End Table with stripped rows 
          <div class="btn-group">
            <button class="btn btn-success" id="export-csv">Export CSV</button>
            <button class="btn btn-secondary" id="export-sql">Export SQL</button>
            <button class="btn btn-secondary" id="export-txt">Export TXT</button>
            <button class="btn btn-secondary" id="export-json">Export JSON</button>
            <button class="btn btn-secondary" id="export-custom">Export Custom</button>
          </div>
		-->
	</div>
</div>

</div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/fixedcolumns/5.0.3/js/dataTables.fixedColumns.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/fixedcolumns/5.0.3/js/fixedColumns.dataTables.js" type="text/javascript"></script>
<!-- exsport -->
<script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js" type="text/javascript"></script>

<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js" type="text/javascript"></script>



@endsection