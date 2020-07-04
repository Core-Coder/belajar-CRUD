@extends('adminlte.master')

@section('content')
<div class="ml-3 mr-3">
    <form action="/pertanyaan" method="POST">
        @csrf
        <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul">
        </div>
        <div class="form-group">
        <label for="isi">Pertanyaan:</label>
        <input type="text" name="isi" class="form-control" placeholder="Masukkan pertanyaanmu">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection