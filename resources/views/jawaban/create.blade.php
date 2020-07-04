@extends('master')
@section('content-title')
Jawaban
@endsection
@section('content')
<form action="/jawaban/{pertanyaan_id}" method="POST">
  @csrf
  <div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" id="isi" name="isi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection