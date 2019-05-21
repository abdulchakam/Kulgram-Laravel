@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Edit Pegawai') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('pegawai.update', $editpegawai->id ) }}">
                    <input type="hidden" name="_method" value="PUT">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_pegawai" class="col-md-4 col-form-label text-md-right">{{ ('Name') }}</label>

                            <div class="col-md-6">
                                <input id="nama_pegawai" type="text" class="form-control{{ $errors->has('nama_pegawai') ? ' is-invalid' : '' }}" name="nama_pegawai" value="{{ $editpegawai->nama_pegawai }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat_pegawai" class="col-md-4 col-form-label text-md-right">{{ ('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat_pegawai" type="text" class="form-control{{ $errors->has('alamat_pegawai') ? ' is-invalid' : '' }}" name="alamat_pegawai" value="{{ $editpegawai->alamat_pegawai }}" required>

                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pekerjaan_pegawai" class="col-md-4 col-form-label text-md-right">{{ ('Pekerjaan') }}</label>

                            <div class="col-md-6">
                                <input id="pekerjaan_pegawai" type="text" class="form-control{{ $errors->has('pekerjaan_pegawai') ? ' is-invalid' : '' }}" name="pekerjaan_pegawai" value="{{ $editpegawai->pekerjaan_pegawai }}" required>

                                @if ($errors->has('pekerjaan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pekerjaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobi_pegawai" class="col-md-4 col-form-label text-md-right">{{ ('Hobi') }}</label>

                            <div class="col-md-6">
                                <input id="hobi_pegawai" type="text" class="form-control" name="hobi_pegawai" value="{{ $editpegawai->hobi_pegawai }}" required>
                                @if ($errors->has('pekerjaan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pekerjaan') }}</strong>
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