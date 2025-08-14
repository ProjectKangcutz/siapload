				<form method="post" action="{{ route('skpwnis.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<label for="no_skpwni" class="col-2 col-form-label">No SKPWNI</label> 
						<div class="col-10">
							<input id="no_skpwni" name="no_skpwni" type="text" class="form-control" value="{{ $no_skpwni ?? 'kosong' }}" readonly>
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