@extends('admin-tmp.tmp')

@section('Author', 'Blog')

<h1>Blog</h1>
<div class="row mt4">
    <div class="col10">
        <div class="card">
            <div class="card-header">Data Blog
                <a class="btn btn-sm btn-primary float-right" href="{{url('blog/create')}}">Tambah Blog</a>
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
                                <a href=""></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>