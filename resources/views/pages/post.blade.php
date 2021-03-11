@extends('pages.layouts.page')

@section('content')

<section class="bg--secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <article>
                    @foreach($data as $d)
                    <div class="article__title text-center">
                        <h1 class="h2">{{$d->name}}</h1> <span>Category: {{$d->category->name}} </span><br />
                        <span>Created: {{$d->created_at->format('d M Y')}} by {{$d->user->name}}</span>
                    </div>
                    <div class="boxed boxed-border">
                        <img src="/storage/{{$d->image}}" height="300px" class="img--fullwidth" style="object-fit: cover; object-position: center;">

                        {!! nl2br($d->text)!!}

                    </div>
                    @endforeach
                </article>
            </div>
        </div>
    </div>
</section>
@endsection