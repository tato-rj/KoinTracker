@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container mb-6">
    @title(['title' => 'Convert currencies', 'description' => 'Convert a cryptocurrencies a fiat currencies to find out how much your money is worth.'])
	<div class="row mb-5" id="convert-forms">
    <div class="col-12 text-center">
      <button id="switch-conversion" class="btn btn-outline-primary rounded mx-auto mb-4">@fa(['icon' => 'exchange-alt'])Switch</button>
    </div>
    @include('convert.types.coinToFiat')
    @include('convert.types.fiatToCoin')
	</div>

  <div class="row">
    <div class="col-12">
      <h5 class="text-center">Popular conversions</h5>
      <div class="d-flex flex-wrap justify-content-center">
        @include('convert.components.popular', ['from' => 'bitcoin', 'to' => 'usd'])
        @include('convert.components.popular', ['from' => 'ethereum', 'to' => 'usd'])
        @include('convert.components.popular', ['from' => 'usd', 'to' => 'bitcoin'])
        @include('convert.components.popular', ['from' => 'gbp', 'to' => 'bitcoin'])
        @include('convert.components.popular', ['from' => 'eur', 'to' => 'cardano'])
        @include('convert.components.popular', ['from' => 'ripple', 'to' => 'brl'])
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
      
    </div>
  </div>
</div>

<div class="container">
  @include('exchanges.highlights')
</div>
@endsection

@push('js')
<script type="text/javascript">
$('#switch-conversion').click(function() {
    $('.convert-container').toggle();
    reset();
});

$('select[name="coin"]').change(function() {
    let $coin = $(this).find("option:selected");
    $('.coin-logo').hide();
    $($coin.data('target')).show();
});

$('select[name="currency"]').change(function() {
    let $fiat = $(this).find("option:selected");
    $('.fiat-logo').hide();
    $($fiat.data('target')).show();
});

$('#convert-forms form').on('submit', function(e) {
    e.preventDefault();
    let $resultContainer = $(this).closest('form').find('.convert-result');
    let $button = $(this).find('button[type="submit"]');
    let url = $button.data('url');
    let coin = $(this).find('select[name="coin"] option:selected').val();
    let amount = $(this).find('input[name="amount"]').val();
    let currency = $(this).find('select[name="currency"] option:selected').val();

    $button.disable();

    axios.get(url, {params: {coin: coin, amount: moneyToFloat(amount), currency: currency}})
      .then(function(response) {
        $resultContainer.html(response.data);
      })
      .catch(function(error) {
         console.log(error);
      })
      .then(function() {
        $button.enable();
      });
});

function reset()
{
  $('select[name="currency"]').val('USD').change();
  $('select[name="coin"]').val(1).change();
  $('input[name="amount"]').val('');
}
</script>
@endpush