<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name')}}</title>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="{{ asset('css/primer.css') }}" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <style type="text/css">


.bg-most-bullish {
    background: #1D976C!important;
    background: -webkit-linear-gradient(to right, #93F9B9, #1D976C)!important;
    background: linear-gradient(to right, #93F9B9, #1D976C)!important;
}

.bg-bullish {
    background: #1D976C!important;
    background: -webkit-linear-gradient(to right, #93F9B9, #1D976C)!important;
    background: linear-gradient(to right, #93F9B9, #1D976C)!important;
}

.bg-medium {
    background: #F09819!important;
    background: -webkit-linear-gradient(to right, #EDDE5D, #F09819)!important;
    background: linear-gradient(to right, #EDDE5D, #F09819)!important;
}

.bg-bearish {
    background: #9a090e!important;
    background: -webkit-linear-gradient(to right, #f3322c, #9a090e)!important;
    background: linear-gradient(to right, #f3322c, #9a090e)!important;
}

.bg-most-bearish {
    background: #9a090e!important;
    background: -webkit-linear-gradient(to right, #f3322c, #9a090e)!important;
    background: linear-gradient(to right, #f3322c, #9a090e)!important;
}

.animate__animated.animate__fadeInUp {
  --animate-duration: .4s;
}

@-webkit-keyframes opacityPulse {
    0% {opacity: 0.1;}
    50% {opacity: 0.4;}
    100% {opacity: 0.1;}
}

.pulse {
    animation: opacityPulse 1s ease-out;
    animation-iteration-count: infinite;
    opacity: 0.1; 
}

.bg-most-bearish .btn-outline-light:hover, .bg-most-bearish .btn-outline-light:active {
    color: #9a090e !important;
}

.bg-bearish .btn-outline-light:hover, .bg-bearish .btn-outline-light:active {
    color: #9a090e !important;
}

.bg-medium .btn-outline-light:hover, .bg-medium .btn-outline-light:active {
    color: #F09819 !important;
}

.bg-bullish .btn-outline-light:hover, .bg-bullish .btn-outline-light:active {
    color: #1D976C !important;
}

.bg-most-bullish .btn-outline-light:hover, .bg-most-bullish .btn-outline-light:active {
    color: #1D976C !important;
}

.user-badge i {
    opacity: 0.6;
    transition: .2s;
}

.user-badge:hover i {
    opacity: 1;
}
        </style>
        @stack('head')

        <script type="text/javascript">
            window.app = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                'url' => \Request::root()
            ]); ?>
        </script>
    </head>

    <body data-coin="{{$coin ?? null}}">
        <div id="app">
            @include('layouts.header')

            @yield('content')
            
            @include('layouts.footer')
        </div>
        <script src="https://unpkg.com/currency.js@~2.0.0/dist/currency.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script src="{{ mix('js/app.js') }}"></script>

        <script type="text/javascript">
        tippy('[data-tippy-content]', {
            allowHTML: true,
        });
        </script>
        @stack('js')
    </body>
</html>
