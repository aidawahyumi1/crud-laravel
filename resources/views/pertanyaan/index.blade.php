@extends('master')
@section('title')
PERTANYAAN
@endsection

@section('content-title')
<a href="/pertanyaan/create" class="btn btn-primary btn-sm">BUAT PERTANYAAN</a>
@endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Isi</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
   @foreach($pertanyaan as $key => $tanya)
   <tr>
   	<td>{{ $key+1 }}</td>
   	<td>{{ $tanya-> judul }}</td>
   	<td>{{ $tanya-> isi }}</td>
   	<td><a href="/jawaban/{{ $tanya->id }}" class="btn btn-primary" >Jawab</a>
      <a href="/pertanyaan/{{ $tanya->id }}" class="btn btn-secondary">Detail</a>
       <a href="/pertanyaan/{{ $tanya->id }}/edit"class="btn btn-success">Edit</a>
       <form action="/pertanyaan/{{ $tanya->id }}" method="POST" style="display: inline;">
         @csrf
         @method('DELETE')
         <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
       </form>
    </td>
   </tr>
   @endforeach
  </tbody>
</table>
@endsection