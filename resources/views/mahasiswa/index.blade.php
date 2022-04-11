@extends('template.master')

@section('')

@section('isi')
<h1>Data Mahasiswa</h1>
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
        <tr>
            <td>{{ $lopp->iteration }}</td>
            <td>{{ $row->nim }}</td>
            <td>{{ $row->nama_mahasiswa }}</td>
            <td>{{ $row->semester }}</td>
            <td>
                <a href="">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection