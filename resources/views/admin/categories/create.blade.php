@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="lead">
                        Tambah Category
                    </div>
                </div>

                <div class="card-body ">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="name" class="font-weight-bold text-capitalize">Title</label>
                                    <input type="text" name="name" placeholder="Nama kategori" value="{{old('name')}}" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="image" class="font-weight-bold text-capitalize">Image</label>
                                    <input type="text" name="image" placeholder="Upload Image" value="{{old('image')}}" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi" class="font-weight-bold text-capitalize">deskripsi</label>
                            <textarea type="text" name="deskripsi" placeholder="Deskripsi (Optional)" rows="10" class="d-block w-100 form-control">{{old('deskripsi')}}</textarea>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection