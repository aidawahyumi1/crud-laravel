@extends('master')
@section('title')
JAWABAN
@endsection
@section('content-title')
<a href="/pertanyaan" class="btn btn-primary btn-sm">Kembali Ke Pertanyaan</a>
@endsection
@section('content')
<div>
  <h5>TAMBAH JAWABAN BARU</h5>
  <form action="/jawaban/{{ $pertanyaan_id }}" method="POST">
  @csrf
  <div class="form-group">
    <input type="hidden" name="pertanyaan_id" value="{{ $pertanyaan_id }}">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" id="isi" name="isi">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div >
<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Kumpulan Jawaban</th>
    </tr>
  </thead>
  <tbody>
   @foreach($jawaban as $key => $jawab)
   <tr>
   	<td>{{ $jawab-> isi }}</td>
   </tr>
   @endforeach
  </tbody>
</table>
</div>

@endsection