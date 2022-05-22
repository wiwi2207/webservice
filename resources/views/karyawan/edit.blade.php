@extends('admin-tmp.tmp')

@section('judul', 'Edit Data Karyawan')

@section('isi')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row mt10">
    <div class="col10">
        <div class="card">
            <div class="card-header">Edit Data Karyawan
                <a class="btn btn-sm btn-info float-right" href="{{url('data-karyawan')}}"><i class="fas fa-backward"></i>Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{ route('update.karyawan', $id->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="from-group">
                        <label>Nama Karyawan</label>
                        <input type="text" name="nama_karyawan" class="form-control" value="{{ $id->nama_karyawan }}">
                    </div>

                    <div class="from-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" name="jk" class="form-control" value="{{ $id->jk }}">
                    </div>

                    <div class="from-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{ $id->alamat }}">
                    </div>

                    <div class="from-group">
                        <label>Devisi</label>
                        <input type="text" name="devisi" class="form-control" value="{{ $id->devisi }}">
                    </div>

                    <div class="from-group">
                        <label>Level</label>
                        <input type="text" name="level" class="form-control" value="{{ $id->level }}">
                    </div>

                    <div class="from-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="{{ $id->jabatan }}">
                    </div>
                    <br><br>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                    <a class="btn btn-warning float-right" href="{{ url('data-karyawan') }}"><i class="fas fa-backward"></i>Batal</a>
                </form>
            </div>
        </div>
    </div>
    @endsection