@extends('adminlte.master')

@section('content')
<div class="ml-3 mr-3">
    <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" value="{{$pertanyaan->judul}}" class="form-control" placeholder="Judul">
        </div>
        <div class="form-group">
        <label for="isi">Pertanyaan:</label>
        <input type="text" name="isi" value="{{$pertanyaan->isi}}" class="form-control" placeholder="Masukkan pertanyaanmu">
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>
@endsection