@extends('adminlte.master')

@section('content')
<div class="ml-3 mr-3">
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Pertanyaan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($jawaban as $key => $answer)
      <tr>
        <td>{{$key + 1}}</td>
        <td>{{$answer->isi}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection