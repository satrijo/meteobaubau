@extends('pages.layouts.page')

@section('content')

<section class="bg--secondary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <article>
                    <div class="article__title text-center">
                        <h1 class="h2">Peta Cuaca</h1> <span>MeteoBaubau </span>
                    </div>
                    <div class="article__body">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-6">
                                <img src="https://cdn.bmkg.go.id/DataMKG/MEWS/angin/streamline_d0.jpg" alt="">
                            </div>
                            <div class="col-md-6">
                                <img src="https://cdn.bmkg.go.id/DataMKG/MEWS/angin/streamline_d1.jpg" alt="">
                            </div>
                        </div>
                        <p><iframe src="https://signature.bmkg.go.id/" width="100%" height="650" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection