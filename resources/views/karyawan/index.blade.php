@extends('admin-tmp.tmp')

@section('Author', 'Karyawan')

@section('isi')
<div class="row mt4">
    <div class="col10">
        <div class="card">
            <div class="card-header">Data Karyawan
                <a class="btn btn-sm btn-primary float-right" href="{{url('add-karyawan')}}">Tambah Karyawan</a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama Karyawan</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Devisi</th>
                            <th>Level</th>
                            <th>Jabatan</th>
                            <th>Create_at</th>
                            <th>Updated_at</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dtkrywn as $dtk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $dtk->nama_karyawan }}</td>
                            <td>{{ $dtk->jk }}</td>
                            <td>{{ $dtk->alamat }}</td>
                            <td>{{ $dtk->devisi }}</td>
                            <td>{{ $dtk->level }}</td>
                            <td>{{ $dtk->jabatan }}</td>
                            <td>{{ $dtk->created_at }}</td>
                            <td>{{ $dtk->updated_at }}</td>
                            <td>
                            <form action="{{route('delete.karyawan', $dtk->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin?')">Hapus</button>
                                    <a href="{{ route('edit.karyawan', $dtk->id )}}" class="btn btn-info btn-sm">Edit</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection