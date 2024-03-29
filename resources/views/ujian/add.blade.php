@extends('template')

@section('content')

<div class="container">
	<br>
	<h2>Input Data Ujian</h2>
	<br>
	<form action="{{route('ujian.save')}}" method="post">

		@csrf
		
		<div class="form-group">
			<label>Mata Kuliah</label>
			<input type="text" name="nama_mk" class="form-control">
		</div>
			<div class="form-group">
			<label>Dosen</label>
			<input type="text" name="dosen" class="form-control">
		</div>
			<div class="form-group">
			<label>Jumlah Soal</label>
			<input type="number" name="jumlah_soal" class="form-control">
		</div>
		<div class="form-group">
			<label>Keterangan</label>
			<textarea name="keterangan" class="form-control"></textarea>
		</div>
		
		<br>
		<input type="submit" name="submit" value="Save Data" class="btn btn-primary">
		<a href="{{route('ujian.index')}}" class="btn btn-secondary">Cancel</a>
	</form>	
</div>


@endsection