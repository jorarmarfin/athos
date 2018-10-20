        <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/structure.css') }}">
    <link rel="stylesheet" href="{{ asset('css/be_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @if (Config::get('header.revolution-slider.css'))
        <link rel="stylesheet" href="{{ asset('plugins/rs-plugin/css/settings.css') }}">
    @endif