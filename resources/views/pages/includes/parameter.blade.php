<section class="cover cover-features imagebg text-justify space--sm" data-overlay="6">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-8 col-md-7 col-12">
                <div class="map-container boxed boxed--border">

                    <iframe src="http://maps.google.com/maps?q={{ $geo1['point']['coordinates']  }}&z=5&output=embed"></iframe>
                </div>
            </div>
            <div class="col-lg-4 col-md-7 col-12">
                <div class="feature feature-1 boxed boxed--border bg--dark">
                    <div class="d-flex justify-content-center">
                        <h3> <i class="fa fa-rss-square" aria-hidden="true"></i>
                            </i>Gempa Terkini</h3>
                    </div>
                    <div>
                        <span> Terjadi pada {{ $geo1['Tanggal']  }} - {{ $geo1['Jam']  }} </span><br />
                        <span><i class="fa fa-caret-down" aria-hidden="true"></i>
                            Magnitudo {{ $geo1['Magnitude'] }} &middot; Kedalaman {{ $geo1['Kedalaman'] }} </span></br />
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> Lokasi {{$geo1['Lintang'] }}- {{$geo1['Bujur']}}</span> <br />
                        <span><i class="fa fa-bullseye" aria-hidden="true"></i>
                            {{ $geo1['Wilayah'] }}</i></span><br />
                        <span><i class="fa fa-info-circle" aria-hidden="true"></i> {{ $geo1['Potensi'] }}
                        </span>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="https://itunes.apple.com/id/app/id1114372539?l=id">
                        <img src="/img/appstore.png" height="50px">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.Info_BMKG">
                        <img src="/img/googleplay.png" height="50px">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row">
            @foreach($bmkg as $key => $cuaca)
            <div class="col">
                <div class="feature feature-1 boxed boxed--border bg--dark">
                    <div class="d-flex justify-content-center">
                        @if($cuaca['kodeCuaca'] == '0')
                        <img src="/weather-pack/day_clear.png" height="100">
                        @elseif($cuaca['kodeCuaca'] == '1')
                        <img src="/weather-pack/day_partial_cloud.png" height="100">
                        @elseif($cuaca['kodeCuaca'] == '3')
                        <img src="/weather-pack/cloudy.png" height="100">
                        @elseif($cuaca['kodeCuaca'] == '4')
                        <img src="/weather-pack/angry_cloudy.png" height="100">
                        @elseif($cuaca['kodeCuaca'] == '5')
                        <img src="/weather-pack/mist.png" height="100">
                        @elseif($cuaca['kodeCuaca'] == '10')
                        <img src="/weather-pack/fog.png" height="100">
                        @elseif($cuaca['kodeCuaca'] == '45')
                        <img src="/weather-pack/fog.png" height="100">
                        @elseif($cuaca['kodeCuaca'] == '60')
                        <img src="/weather-pack/day_rain.png" height="100">
                        @elseif($cuaca['kodeCuaca'] == '61')
                        <img src="/weather-pack/rain.png" height="100">
                        @elseif($cuaca['kodeCuaca'] == '63')
                        <img src="/weather-pack/rain_thunder.png" height="100">
                        @else
                        No Image
                        @endif
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="col-md-4 mr-2">
                            <h2 style="font-size: 30pt;">{{$cuaca['tempC']}}<sup>o</sup></h2>
                        </div>
                        <div class="col-md-8">
                            <h5>{{$cuaca['cuaca']}}</h5>
                            <small>Humidity : {{$cuaca['humidity']}}%</small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <small>{{ date('l - d M Y - H:s', strtotime($cuaca['jamCuaca'])) }}</small>
                    </div>
                </div>
            </div>
            @if($key == 4)
            @break
            @endif
            @endforeach
        </div>
    </div>
</section>