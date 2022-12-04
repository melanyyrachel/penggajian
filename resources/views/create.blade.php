@extends('layout.main')

 @section('content')
 		<div class="col-12 ps-4">
 			<h4>> Tambah Data Karyawan</h4>
 				<a href="/karyawan" class="btn btn-info btn-md p-2 mb-3">Kembali</a>
 		</div>
 		<div class="col-12 ps-4">
 			<div class="col-12 bg-light p-2 rounded-3 shadow-sm">
 				<form action="/jabatan/store" method="POST">
 				@csrf
 			<div class="mb-3 row">
 			<label class="col-sm-2 col-form-label">Nama 
			Karyawan</label>
	 <div class="col-sm-10">
 		<input type="text" class="form-control" name="nama_karyawan">
 	 </div>
 	 </div>
 		<div class="mb-3 row">
 				<label  class="col-sm-2 col-form-label">Alamat</label>
 		<div class="col-sm-10">
 				<input type="text" class="form-control" name="alamat">
 		</div>
 		</div>
			 <div class="mb-3 row">
 		<label class="col-sm-2 col-form-label">No Handphone</label>
			<div class="col-sm-10">
 				<input type="text" class="form-control" name="no_hp">
 			</div>
</div>
			 <div class="mb-3 row">
 		<label class="col-sm-2 col-form-label">Tempat Lahir</label>
			<div class="col-sm-10">
 				<input type="text" class="form-control" name="tl">
 			</div>
</div>
			 <div class="mb-3 row">
 		<label class="col-sm-2 col-form-label">Tanggal Lahir</label>
			<div class="col-sm-10">
 				<input type="text" class="form-control" name="tglahir">
 			</div>
</div>
 			<div class="mb-3 row">
 		<label class="col-sm-2 col-form-label">jenis kelamin</label>
			<div class="col-sm-10">
 				<input type="text" class="form-control" name="no_hp">
 			</div>
</div>
				 <div class="d-grid text-end">
			<div class="col-sm-12">
				<button class="btn btn-primary btn-sm"type="submit">CREATE</button>
 			</div>
 			</div>
 		</form>
 </div>
 </div>
 @endsection