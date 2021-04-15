@extends('layouts.app')

@push('head')
@endpush

@section('content')
<div class="container">
	<div class="row mb-4">
		<div class="col-lg-4 col-md-5 col-12 mb-2">
			<div class="d-apart mb-4">
				<div class="d-flex align-items-center">
					<img src="{{$coin->getIcon()}}" class="mr-2" style="width: 40px">
					<div>
						<h4 class="font-weight-bold text-uppercase m-0">{{$coin->name}}</h4>
						<p class="m-0 text-muted" style="line-height: 1; font-size: 86%">{{strtoupper($coin->short)}}</p>
					</div>
				</div>
				<div>
					<button id="toggle-watchlist" class="btn btn-raw">@fa(['fa_type' => 'r', 'icon' => 'star', 'size' => 'lg', 'mr' => 0])</button>
				</div>
			</div>
			<div class="mb-4">
				<div id="price-date" data-original="Price of {{$coin->name}} now" style="font-size: 88%" class="text-muted">Price of {{$coin->name}} now</div>
				<h1 id="price" class="m-0" data-original="{{$coin->fiat}}" style="font-size: 3em">{{$coin->fiat}}</h1>
				@include('portfolios.components.gains', [
					'label' => fiat($coin->priceChangeToday)->format() . ' (' . formatPercent($coin->pastDayChange, false) . ')',
					'isPositive' => $coin->priceChangeToday > 0,
					'id' => 'price-difference'])
			</div>
			@include('coins.components.info', ['class' => 'd-none d-md-block'])

			@include('transactions.components.add-button', ['size' => 'btn-block', 'theme' => 'primary'])

		</div>
		<div class="col-lg-8 col-md-6 col-12 mb-2">
			@include('components.chart.canvas', ['id' => 'chart', 'points' => $coin->range('24h'), 'url' => route('coins.chart', $coin)])

			@include('components.chart.range', ['target' => 'chart'])

			@include('coins.components.info', ['class' => 'd-md-none'])
		</div>
	</div>
	<div class="row">
		<div class="col-lg-9 col-md-8 col-12 mb-4">
			@include('transactions.show.list')
		</div>

		<div class="col-lg-3 col-md-4 col-12 mb-4">
			@component('components.box', ['outline' => true])
				<h5 class="border-bottom mb-2 pb-2">Resources</h5>
				<ul class="list-flat">
					<li class="mb-2">
						@fa(['icon' => 'globe', 'color' => $coin->uid])<a href="{{$coin->website}}" target="_blank">Official website</a>
					</li>
					<li>
						@fa(['fa_type' => 'b', 'icon' => 'reddit', 'color' => $coin->uid])<a href="{{$coin->subreddit}}" target="_blank">Reddit page</a>
					</li>
				</ul>
			@endcomponent

			@component('components.box', ['outline' => true])
				<h5 class="border-bottom mb-2 pb-2">Market info</h5>
				<ul class="list-flat">
					<li>
						@label(['text' => 'Market cap'])
						<p class="font-weight-bold mb-2">{{fiat($coin->marketCap)->format()}}</p>
					</li>
					<li>
						@label(['text' => 'Volume (1D)'])
						<p class="font-weight-bold mb-2">{{fiat($coin->totalVolume)->format()}}</p>
					</li>
					<li>
						@label(['text' => 'Circulating supply'])
						<p class="font-weight-bold mb-2">{{$coin->supply}}</p>
					</li>
					<li>
						@label(['text' => 'Max supply'])
						<p class="font-weight-bold mb-2">{{$coin->maxSupply ?? 'Unlimited'}}</p>
					</li>
				</ul>
			@endcomponent
		</div>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">

</script>
<script type="text/javascript">

</script>
<script type="text/javascript">

$(document).ready(function() {
	$('#coin-transactions').on('show.bs.collapse', function (e) {
		let $icon = $($(e.target).data('icon'));
		$icon.addClass('turn');
	});

	$('#coin-transactions').on('hide.bs.collapse', function (e) {
		let $icon = $($(e.target).data('icon'));
		$icon.removeClass('turn');
	});

	$('#toggle-watchlist').click(function() {
		let $btn = $(this);

		$btn.disable();
		$btn.find('i').toggleClass('far fas');
		$btn.enable();
	});

	(new GraphRange).linkTo(new BigGraph);
	(new Graph($('#chart'))).draw(new BigGraph);
});
</script>
@endpush