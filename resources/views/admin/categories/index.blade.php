@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="lead">
                        Halaman Kategori
                    </div>
                    <a href="{{route('category.create')}}">
                        <button class="btn btn-primary">Tambah Category</button>
                    </a>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $key => $d)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$d->name}}</td>
                            <td>{{$d->deskripsi}}</td>
                            <td class="d-flex">
                                <a href="{{route('category.edit', $d->slug)}}" class="mr-2">
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                </a>
                                <span> </span>
                                <!-- <form action="{{route('category.destroy', $d->slug)}}" method="post" class="hidden">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">
                                        Hapus
                                    </button>
                                </form> -->

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">
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