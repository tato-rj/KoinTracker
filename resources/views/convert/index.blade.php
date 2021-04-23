@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
    @title(['title' => 'Convert currencies', 'description' => 'Convert a cryptocurrency into a fiat currency to find out how much it\'s worth.'])
	<div class="row">
        <button id="switch-conversion" class="btn btn-outline-primary rounded mx-auto mb-4 btn-lg" style="font-size: 2rem">@fa(['icon' => 'exchange-alt', 'mr' => 0])</button>
		@include('convert.types.coinToFiat')
        @include('convert.types.fiatToCoin')
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">
$('#switch-conversion').click(function() {
    $(this).parent().find('form').toggle();
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
    // axios.get('https://openexchangerates.org/api/latest.json?app_id=7d47bb4c49d94ea3b3744a3cc29c0789')
    // 	 .then(function(response) {
    // 	 	console.log(response.data);
    //     	console.log(response.data.rates);
    //     	console.log(response.data.base);
    // 	 })
    // 	 .catch(function(error) {
    // 	 	console.log(error);
    // 	 });
</script>
@endpush