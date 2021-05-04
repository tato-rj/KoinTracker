@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
	<div class="row mb-4">
		<div class="col-12 mb-4 text-center">
			<h4>World of Crypto</h4>
			<p class="text-muted">Showing {{$coins->firstItem()}}-{{$coins->lastItem()}} of {{$coins->total()}} coins out in the market</p>
		</div>

		@include('coins.search.input')

		<div class="col-12 t-2" id="results-container" style="display: none;"></div>
		<div class="col-12 t-2" id="coins-container"> 
			<div class="mb-5">
				@foreach($coins as $coin)
					@include('coins.components.row', ['coin' => $coin, 'animate' => true])
				@endforeach
			</div>
			<div class="d-flex justify-content-center">
				{{$coins->links()}}
			</div>
		</div>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">
$(document).ready(function() {
	var $coins = $('#coins-container');
	var $results = $('#results-container');

	$('input[name="search-coin"]').keyup(function() {
		let url = $(this).data('url');
		let input = $(this).val().toLowerCase();

		if (input.length > 2) {
				$coins.addClass('opacity-6');
				$results.addClass('opacity-6');

				setTimeout(function() {
					axios.get(url, {params: {input: input}})
						 .then(function(response) {
							$coins.hide();
							$results.html(response.data).show();
						 })
						 .catch(function(error) {

						 })
						 .then(function() {
						 	$coins.removeClass('opacity-6');
							$results.removeClass('opacity-6');
						 });
				}, 100);
			} else {
				$coins.removeClass('opacity-6').show();
				$results.removeClass('opacity-6').html('').hide();
			}
	});

	$('.coin-card').each(function() {
		let $card = $(this);

		setTimeout(function() {
			$card.delay().css('opacity', 1);
		}, $card.index() * 25);		
	});
});
</script>
@endpush