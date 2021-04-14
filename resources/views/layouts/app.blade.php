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
.turn {
    transform: rotate(-45deg);
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

    <body>
        <div id="app" class="mb-6">
            @include('layouts.header')

            @yield('content')
        </div>
        
        @include('layouts.footer')

        @auth
            @include('transactions.create.modal')
        @endauth

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

        <script src="https://unpkg.com/currency.js@~2.0.0/dist/currency.min.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
        <script src="{{ mix('js/app.js') }}"></script>

        <script type="text/javascript">
        $('.datepicker').each(function() {
            var picker = new Pikaday({ field: $(this)[0] });
        });
    
        tippy('[data-tippy-content]', {
            allowHTML: true,
        });
        </script>

        <script type="text/javascript">
            $('#coin-transactions').on('show.bs.collapse', function (e) {
                let $icon = $($(e.target).data('icon'));
                $icon.addClass('turn');
            });

            $('#coin-transactions').on('hide.bs.collapse', function (e) {
                let $icon = $($(e.target).data('icon'));
                $icon.removeClass('turn');
            });
        </script>

        <script type="text/javascript">
        $('#select-coin').change(function() {
            let icon = $(this).find(':selected').data('icon');
            let coin = this.value;

            $(this).siblings('img').attr('src', icon);
            $('#add-transaction-container input[name="coin_id"]').val(coin);
        });
        </script>

        <script type="text/javascript">
            $('[name="coin_amount"], [name="price_per_coin"], [name="fee"]').on('change keyup', function() {
                let $form = $(this).closest('form');
                let coinAmount = parseFloat($form.find('[name="coin_amount"]').val());
                let coinPrice = parseFloat($form.find('[name="price_per_coin"]').val());
                let fee = parseFloat($form.find('[name="fee"]').val());
                
                if (isNaN(fee))
                    fee = 0;

                let cost = (coinAmount * coinPrice) + fee;

                if (! isNaN(cost))
                    $form.find('.total-cost').text(cost.toFixed(2));
            });
        </script>
        @stack('js')
    </body>
</html>
