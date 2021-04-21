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

        @stack('head')

        <script type="text/javascript">
            window.app = <?php echo json_encode([
                'csrfToken' => csrf_token(),
                'url' => \Request::root()
            ]); ?>
        </script>
    </head>

    <body>
        <div id="app">

            @yield('content')

        </div>

        @if($popup = session('popup'))
            @include('components.popups.' . $popup)
        @endif

        @if($message = session('success'))
        @alert([
            'color' => 'green',
            'message' => '<strong class="mr-2">Success |  </strong>' . $message,
            'dismissible' => true,
            'floating' => 'top'])
        @endif

        @if($message = session('error') ?? $errors->first())
        @alert([
            'color' => 'red',
            'message' => '<strong class="mr-2">Sorry |  </strong>' . $message,
            'dismissible' => true,
            'floating' => 'top'])
        @endif

        <script src="{{ mix('js/app.js') }}"></script>
        @stack('js')
    </body>
</html>
