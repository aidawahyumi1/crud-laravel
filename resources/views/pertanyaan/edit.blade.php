@extends('master')
@section('title')
EDIT Pertanyaan
@endsection

@section('content-title')
<a href="/pertanyaan" class="btn btn-primary btn-sm">Kembali Ke Pertanyaan</a>
@endsection

@section('content')
<form action="/pertanyaan/{{$pertanyaan[0]->id}}" method="POST">
	@csrf
	@method('PUT')

  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" value="{{$pertanyaan[0]->judul}}" id="judul" aria-describedby="emailHelp" name="judul">
  </div>
  <div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" value="{{$pertanyaan[0]->isi}}" id="isi" name="isi">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection