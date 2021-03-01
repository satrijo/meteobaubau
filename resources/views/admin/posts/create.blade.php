@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="lead">
                        Tambah Post
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
                    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="name" class="font-weight-bold text-capitalize">Title</label>
                                    <input type="text" name="name" placeholder="Judul artikel" value="{{old('name')}}" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="image" class="font-weight-bold text-capitalize">Image</label>
                                    <input type="file" name="image" placeholder="Upload Image" value="{{old('image')}}" class="form-control-file" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="font-weight-bold text-capitalize">category</label>
                            <select name="category_id" class="form-control">
                                @foreach($category as $c)
                                <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="text" class="font-weight-bold text-capitalize">text</label>
                            <textarea type="text" name="text" placeholder="Deskripsi (Optional)" rows="10" class="d-block w-100 form-control">{{old('text')}}</textarea>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection