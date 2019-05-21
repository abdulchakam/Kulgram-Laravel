@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Edit Siswa') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('siswa.update', $editsiswa->id ) }}">
                    <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group row">
                            <label for="nis" class="col-md-4 col-form-label text-md-right">{{ ('NIS') }}</label>

                            <div class="col-md-6">
                                <input id="nis" type="text" class="form-control{{ $errors->has('nis') ? ' is-invalid' : '' }}" name="nis" value="{{ $editsiswa->nis }}" required autofocus>

                                @if ($errors->has('nis'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_siswa" class="col-md-4 col-form-label text-md-right">{{ ('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama_siswa" type="text" class="form-control{{ $errors->has('nama_siswa') ? ' is-invalid' : '' }}" name="nama_siswa" value="{{ $editsiswa->nama_siswa }}" required autofocus>

                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat_siswa" class="col-md-4 col-form-label text-md-right">{{ ('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat_siswa" type="text" class="form-control{{ $errors->has('alamat_siswa') ? ' is-invalid' : '' }}" name="alamat_siswa" value="{{ $editsiswa->alamat_siswa }}" required>

                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobi_siswa" class="col-md-4 col-form-label text-md-right">{{ ('Hobi') }}</label>

                            <div class="col-md-6">
                                <input id="hobi_siswa" type="text" class="form-control" name="hobi_siswa" value="{{ $editsiswa->hobi_siswa }}" required>
                                @if ($errors->has('hobi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('hobi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ ('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection