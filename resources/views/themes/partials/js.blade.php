        <!-- JS -->
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/mfn.menu.js') }}"></script>
    <script src="{{ asset('js/jquery.plugins.js') }}"></script>
    <script src="{{ asset('js/jquery.jplayer.min.js') }}"></script> 
    <script src="{{ asset('js/animations/animations.js') }}"></script>   
    <script src="{{ asset('js/scripts.js') }}"></script> 

    @if (Config::get('header.revolution-slider.js'))
        <script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    @endif