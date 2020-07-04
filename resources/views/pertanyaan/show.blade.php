@extends('adminlte.master')
@section('content')
    {{-- <div class="ml-3 mr-3">
            <div class="card card-info mt-3">
                <div class="card-header">
                <h3 class="card-title">{{$tampil->judul}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                  <div class="card-body">
                    <div class="form-group row">
                      <h3>Pertanyaan :</h3>
                    </div>
                      <div class="col-sm-10">
                        {{$tampil->isi}}
                      </div>
                  </div> --}}
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <a href="/jawaban/create" class="btn btn-primary">Berikan jawaban</a>
                  </div>
                  {{-- <!-- /.card-footer -->
              </div>
            </div> --}}
        @foreach($tampila as $key => $answer)
        <div class="ml-3 mr-3">
            <div class="card card-info mt-3">
                <div class="card-body">
                    <div class="form-group row">
                        <h3>Jawaban :</h3>
                    </div>
                    <div class="col-sm-10">
                        {{$answer->isi}}
                    </div>
                </div>
            </div>
        </div> 
        @endforeach
@endsection