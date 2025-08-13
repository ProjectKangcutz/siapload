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
      <input id="no_kk" name="no_kk" type="text" class="form-control" value="{{$no_kk ?? ''}}">
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
        <option value="surat_cerai">Surat/Akta Perceraian</option>
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


<link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" rel="stylesheet">
<link href="https://cdn.datatables.net/fixedcolumns/5.0.3/css/fixedColumns.dataTables.css" rel="stylesheet">
<style type="text/css">
	/* Ensure that the demo table scrolls */
	div.dataTables_wrapper {
		width: 800px;
		margin: 0 auto;
	}

	th input {
		width: 90%;
	}
</style>

<script type="text/javascript">
	$(document).ready(function() {
    // Setup - add a text input to each footer cell
		$('#example thead tr:eq(1) th').each( function () {
			var title = $(this).text();
			$(this).html( '<input type="text" placeholder="Search '+title+'" class="column_search" />' );
		} );

    // DataTable
		var table = $('#example').DataTable({
			orderCellsTop: true,
			layout: {
				topStart: {
					buttons: ['copy', 'csv', 'excel', 'print']
				}
			}});


// Apply the search
		$( '#example thead'  ).on( 'keyup', ".column_search",function () {

			table
			.column( $(this).parent().index() )
			.search( this.value )
			.draw();
		} );

	} );
</script>

@endsection