@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-header">
                    <a href="{{ route('siswa.create') }}" class="btn btn-sm btn-outline-primary">Tambah</a>
                </div>
                
                <div class="card-body">
                    <table class="table table-dark">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Hobi</th>
                        <th scope="col">Aksi</th> 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datasiswa as $val)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $val->nis }}</td>
                        <td>{{ $val->nama_siswa }}</td>
                        <td>{{ $val->alamat_siswa }}</td>
                        <td>{{ $val->hobi_siswa }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', $val->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                            <a href="/siswa/hapus/{{$val->id}}" class="btn btn-sm btn-outline-danger">Hapus</a>
                        </td>
                        </tr>
                    @endforeach    
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection