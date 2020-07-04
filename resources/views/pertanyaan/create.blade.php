@extends('master')
@section('title')
Pertanyaan
@endsection

@section('content-title')
<a href="/pertanyaan" class="btn btn-primary btn-sm">Kembali Ke Pertanyaan</a>
@endsection

@section('content')
<form action="/pertanyaan" method="POST">
	@csrf
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" name="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" id="isi" name="isi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection