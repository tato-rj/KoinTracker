@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
	<div class="row mb-5">
		<div class="col-lg-4 col-md-6 col-12">
			<div class="mb-3">
				@label(['text' => 'My portfolio balance', 'icon' => 'piggy-bank'])
				<h1>{{usd(0)}}</h1>
				@include('components.portfolio.badge', ['label' => usd(0) . ' (24h)'])
			</div>
			@include('components.portfolio.holdings')
			@auth
				@if(auth()->user()->transactions()->exists())
				@include('transactions.components.button', ['size' => 'btn-block'])
				@endif
			@endauth
		</div>
		<div class="col-lg-8 col-md-6 col-12">
			@auth
				@if(auth()->user()->transactions()->exists())
					@include('components.chart.canvas', ['id' => 'chart', 'points' => auth()->user()->portfolio->range('24h'), 'url' => route('portfolios.chart', auth()->user()->portfolio)])
					@include('components.chart.range', ['target' => 'chart'])
				@else
					@include('components.chart.empty')
				@endif
			@else
				@include('components.chart.empty')
			@endauth
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-12 text-center">
			<div class="">
				@include('components.badges.all')
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 mb-4">
			<h4 class="m-0">How's the market today</h4>
			<p class="text-muted">Last update {{cache('market_last_updated') ? cache('market_last_updated')->diffForHumans() : 'a little while ago'}}</p>
		</div>
		@each('components.coins.card', $coins, 'coin')
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">
// var chartInstance;

$(document).ready(function() {
	(new GraphRange).linkTo(new BigGraph);
	(new Graph($('#chart'))).draw(new BigGraph);

	$('.coin-card').each(function() {
		let $card = $(this);

		(new Graph($card.find('canvas'))).draw(new TinyGraph);

		setTimeout(function() {
			$card.delay().css('opacity', 1);
		}, $card.index() * 75);		
	});
});
</script>
<script type="text/javascript">


</script>
@endpush