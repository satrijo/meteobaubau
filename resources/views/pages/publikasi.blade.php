@extends('pages.layouts.page')

@section('content')
<section class="bg--secondary space--xs">
    <div class="container">
        <div class="row text-block">
            <div class="col-md-12">
                <h3>Publikasi:</h3>
            </div>
        </div>
        <div class="row">
            @foreach($data as $d)
            <div class="col-md-4">
                <article class="feature feature-1">
                    <a href="{{$d->slug}}" class="block"> <img class="img--fullwidth cover-gambar" alt="Image" src="storage/{{$d->image}}"> </a>
                    <div class="feature__body boxed boxed--border"> <span>{{$d->created_at->diffForHumans()}} &middot; {{$d->category->name}}</span>
                        <h5>{{$d->name}}</h5> <a href="#">
                            Read More
                        </a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{$data->links()}}
        </div>

    </div>
</section>
@endsection