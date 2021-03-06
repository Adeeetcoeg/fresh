@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Spesialis</div>
                    <div class="card-body">
                        <form action="{{ route('spesialis.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Nama spesialis</label>
                                <input type="text" name="spesialis"
                                    class="form-control @error('spesialis') is-invalid @enderror">
                                @error('spesialis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection
