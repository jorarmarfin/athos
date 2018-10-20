<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('themes.partials.css')
    <title>Document</title>
</head>
<body class="page-parent layout-full-width {{ Config::get('header.class') }} sticky-header sticky-white subheader-transparent subheader-title-left">
    <!-- Hidden Top Area -->
    @include('themes.partials.hidden-top-area')
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper">
            <!-- Header -->
            <header id="Header">
                <!-- Header Top -  Info Area -->
                <div id="Action_bar">
                    <div class="container">
                        <div class="column one">
                            <!-- Header - contact info area-->
                            <ul class="contact_details">
                                <li class="slogan">
                                    Have any questions?
                                </li>
                                <li class="phone">
                                    <i class="icon-phone"></i><a href="tel:+61383766284">+61 383 766 284</a>
                                </li>
                                <li class="mail">
                                    <i class="icon-mail-line"></i><a href="mailto:noreply@envato.com">noreply@envato.com</a>
                                </li>
                            </ul>
                            <!--Social info area-->
                            <ul class="social">
                                <li class="skype">
                                    <a href="#" title="Skype"><i class="icon-skype"></i></a>
                                </li>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/Beantown-Themes-653197714728193" title="Facebook"><i class="icon-facebook"></i></a>
                                </li>
                                <li class="googleplus">
                                    <a href="https://plus.google.com/" title="Google+"><i class="icon-gplus"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
                                </li>
                                <li class="vimeo">
                                    <a href="https://vimeo.com/" title="Vimeo"><i class="icon-vimeo"></i></a>
                                </li>
                                <li class="youtube">
                                    <a href="#" title="YouTube"><i class="icon-play"></i></a>
                                </li>
                                <li class="flickr">
                                    <a href="https://www.flickr.com/" title="Flickr"><i class="icon-flickr"></i></a>
                                </li>
                                <li class="pinterest">
                                    <a href="https://www.pinterest.com/" title="Pinterest"><i class="icon-pinterest"></i></a>
                                </li>
                                <li class="dribbble">
                                    <a href="https://dribbble.com" title="Dribbble"><i class="icon-dribbble"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Header -  Logo and Menu area -->
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <!-- Logo-->
                                <div class="logo">
                                    <a id="logo" href="index.html" title="BeTheme - Best Html Theme Ever"><img class="scale-with-grid" src="images/logo1.png" alt="BeTheme - Best Html Theme Ever" />
                                    </a>
                                </div>
                                <!-- Main menu-->
                                @include('themes.header.main-menu')
                                <!-- Secondary menu area - only for certain pages -->
                                @include('themes.header.secundary-menu')
                                <!-- Banner area - only for certain pages-->
                                @include('themes.header.banner-area')
                                <!-- Header Searchform area-->
                                @include('themes.header.search')
                            </div>
                            @include('themes.header.top-bar-right')
                        </div>
                    </div>
                </div>
                <!-- Revolution slider area-->
                <div class="mfn-main-slider" id="mfn-rev-slider">
                    
                </div>
            </header>
        </div>
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
            </div>
        </div>
    </div>
    @include('themes.partials.js')
    
</body>
</html>