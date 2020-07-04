@extends('master')
@section('title')
DETAIL PERTANYAAN
@endsection

@section('content-title')
<a href="/pertanyaan" class="btn btn-primary btn-sm">Kembali Ke Pertanyaan</a>
@endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">Isi</th>
      <th scope="col">Tanggal Dibuat</th>
      <th scope="col">Tanggal Diedit</th>
    </tr>
  </thead>
  <tbody>
   @foreach($pertanyaan as $key => $tanya)
   <tr>
    <td>{{ $tanya-> judul }}</td>
    <td>{{ $tanya-> isi }}</td>
    <td>{{ $tanya-> created_at }}</td>
    <td>{{ $tanya-> updated_at }}</td>
   </tr>
   @endforeach
  </tbody>
</table>

@endsection