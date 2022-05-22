@extends('admin-tmp.tmp')

@section('author', 'Tambah Data Karyawan')

@section('isi')

<div class="row mt10">
    <div class="col10">
        <div class="card">
            <div class="card-header">Tambah Data Karyawan
                <a class="btn btn-sm btn-info float-right" href="{{url('data-karyawan')}}"><i class="fas fa-backward"></i>Kembali</a>
            </div>
            <div class="card-body">
                <form action="{{url('simpan-karyawan')}}" method="POST">
                    @csrf
                    <div class="from-group">
                        <label>Nama Karyawan</label>
                        <input type="text" name="nama_karyawan" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" name="jk" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Devisi</label>
                        <input type="text" name="devisi" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Level</label>
                        <input type="text" name="level" class="form-control">
                    </div>

                    <div class="from-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control">
                    </div>
                    <br><br>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                    <a class="btn btn-warning float-right" href="{{url('data-karyawan')}}">
                        <i class="fas fa-backward"></i>Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection