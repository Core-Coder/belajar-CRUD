@extends('adminlte.master')

@section('content')
<div class="ml-3 mr-3">
    <form action="/jawaban/{id}" method="POST">
        @csrf
        <div class="form-group">
        <label for="isi">Jawaban:</label>
        <input type="text" name="isi" class="form-control" placeholder="Masukkan jawabanmu">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection