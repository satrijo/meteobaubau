@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="lead">
                        Halaman Artikel
                    </div>
                    <a href="{{route('post.create')}}">
                        <button class="btn btn-primary">Tambah Artikel</button>
                    </a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Text</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $key => $d)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$d->name}}</td>
                            <td>{{Str::limit($d->text, 60)}}</td>
                            <td>{{$d->category->name}}</td>
                            <td class="d-flex">
                                <a href="{{route('post.edit', $d->slug)}}" class="mr-2">
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                </a>
                                <span> </span>
                                <form action="{{route('post.destroy', $d->slug)}}" method="post" class="hidden">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection