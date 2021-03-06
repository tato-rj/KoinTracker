<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name')}}</title>

        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('favicon/manifest.json')}}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{asset('favicon/ms-icon-144x144.png')}}">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="{{ asset('css/primer.css') }}" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        <style type="text/css">
a .fa-long-arrow-alt-right {
    transition: .2s;
}

a:hover .fa-long-arrow-alt-right {
    transform: translateX(3px);
}

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
                'currency' => [
                    'name' => appCurrency()->getName(),
                    'short' => appCurrency()->getCurrency(),
                    'symbol' => appCurrency()->getSymbol()
                ],
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
        <script src="{{ asset('js/vendor/money.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        let duration = $('#loading-screen span').length * 35;

        setTimeout(function() {
            $($('#loading-screen span').get().reverse()).each(function() {
                let $letter = $(this);

                setTimeout(function() {
                    $letter.fadeOut(200);
                }, $letter.index() * 25);   
            });

            setTimeout(function() {
                $('#loading-screen img').addClass('animate__bounceOut').fadeOut(600, function() {
                    $('#loading-screen').fadeOut('fast', function() {
                        $('#loading-screen').remove();
                    });
                });
            }, duration);
        }, 200);
    });
    </script>
        <script type="text/javascript">
    $(document).on('click', '.toggle-watchlist', function() {
        let $btn = $(this);

        $btn.disable();

        axios.patch($btn.data('url'))
             .then(function(response) {
                $btn.find('i').toggleClass('far fas');
             })
             .catch(function(error) {
                alert(error);
             })
             .then(function() {
                $btn.enable();
             });
    });
        </script>
        <script type="text/javascript">
        $('button#load-transactions').click(function() {
            let $button = $(this);
            let start_at = $(".portfolio-transaction").length;
    
            $button.disable();

            axios.get($(this).data('url'), {params: {start_at: start_at}})
                 .then(function(response) {
                    console.log(response.data);
                    if (response.data) {
                        $('#coin-transactions').append(response.data);
                        $button.enable();
                    } else {
                        $button.text('ALL DONE!');
                    }
                 })
                 .catch(function(error) {
                    console.log(error);
                 });
        });
        </script>
        <script type="text/javascript">
            $('[numeral-format]').shortCurrency();
        </script>
        <script type="text/javascript">
        $("#sort-transactions select#sort-field").change(function() {
            var sortElements = function(a, b) {
                let field = $('#sort-transactions select option:selected').val();

                if (typeof($(a).data(field)) == 'number') {
                    return $(a).data(field) > $(b).data(field) ? -1 : 1;
                } else {
                    return $(a).data(field).toLowerCase().localeCompare($(b).data(field).toLowerCase());
                }
            }
            
            var list = $(".portfolio-transaction").get();
      
            list.sort(sortElements);
            
            for (var i = 0; i < list.length; i++) {
                list[i].parentNode.appendChild(list[i]);
            }
        });

        $('#sort-transactions button').click(function() {
            $(this).hide().siblings('button').show();
            $('#coin-transactions').reverseChildren();
        });
        </script>

        <script type="text/javascript">
        $('.datepicker').each(function() {
            var picker = new Pikaday({
                field: $(this)[0],
                format: 'MM/DD/YYYY'
            });
        });

        $('.money-field').maskMoney();
    
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
                let coinAmount = parseFloat($form.find('[name="coin_amount"]').val().replace(/,/g, ''));
                let coinPrice = parseFloat($form.find('[name="price_per_coin"]').val().replace(/,/g, ''));
                let fee = parseFloat($form.find('[name="fee"]').val().replace(/,/g, ''));

                if (isNaN(fee))
                    fee = 0;

                let cost = (coinAmount * coinPrice) + fee;
                
                if (isNaN(cost))
                    cost = 0;

                $form.find('.total-cost').text(currency(cost, '$'));
            });
        </script>
        @stack('js')
    </body>
</html>
