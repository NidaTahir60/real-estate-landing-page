<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Real estate</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Explore premium real estate listings with expert guidance, featuring homes, apartments, and commercial properties to suit all your needs. Find your dream property today">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendors.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/icon.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/demos/real-estate/real-estate.css') }}" />
    </head>
    <body data-mobile-nav-style="classic">
        
        @include('real-estate.partials.header')
        
        @yield('content')
        

        @include('real-estate.partials.footer')
        
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>

        <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/vendors.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    </body>
</html>