@extends('adminlte.master')

@section('content')
<div class="ml-3 mr-3">
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pertanyaan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($pertanyaan as $key => $question)
      <tr>
        <td>{{$key + 1}}</td>
        <td>{{$question->judul}}</td>
        <td>{{$question->isi}}</td>
        <td>
          <a href="/pertanyaan/{{$question->id}}" class="btn btn-primary">Detail</a>
          <a href="/pertanyaan/{{$question->id}}/edit" class="btn btn-default">Edit</a>
          <form action="/pertanyaan/{{$question->id}}" method="POST" style="display : inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <hr>
  <a href="/pertanyaan/create" class="btn btn-primary">Ajukan Pertanyaan</a>
</div>
@endsection