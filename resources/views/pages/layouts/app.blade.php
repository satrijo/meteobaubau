<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MeteoBaubau</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('pages.includes.style')
</head>

<body data-smooth-scroll-offset="77">
    @include('pages.includes.header')
    <div class="main-container">
        @include('pages.includes.parameter')
        @yield('content')
        @include('pages.includes.satelit')
        @include('pages.includes.footer')
    </div>
    @include('pages.includes.script')

</body>

</html>