@extends('pages.layouts.page')

@section('content')

<section class="switchable">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-md-7 col-12">
                <div class="map-container boxed boxed--border">
                    <iframe src="http://maps.google.com/maps?q=-5.4851509,122.5729981&z=13&output=embed"></iframe>
                </div>
            </div>
            <div class="col-lg-5 col-md-5">
                <div class="switchable__text">
                    <h3>Komplek Bandar Udara Betoambari<br>Stasiun Meteorologi Betoambari Baubau, Kota Baubau, Sulawesi Tenggara</h3>
                    <p class="lead"> E: <a href="#">stametbaubau@gmail.com</a><br> WA: +62 811-1360-731 </p>
                    <p class="lead"> Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We are open from 9am — 5pm week days. </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection