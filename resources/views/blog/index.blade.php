@extends('admin-tmp.tmp')

@section('Author', 'Blog')

@section('isi')
<div class="row mt4">
    <div class="col10">
        <div class="card">
            <div class="card-header">Data Blog
                <a class="btn btn-sm btn-primary float-right" href="{{url('add-blog')}}">Tambah Blog</a>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>author</th>
                            <th>title</th>
                            <th>body</th>
                            <th>keyword</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogdata as $datb)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $datb->author }}</td>
                            <td>{{ $datb->title }}</td>
                            <td>{{ $datb->body }}</td>
                            <td>{{ $datb->keyword }}</td>
                            <td>
                                <a href="{{route('edit.blog', $datb->id)}}" class="btn btn-info btn-sm">Edit</a>
                                <form action="{{route('delete.blog', $datb->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin?')">Hapus</button>
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