<div class="col-lg-2 col-md-3 col-sm-4 col-6">
	@include('coins.components.row.label', ['label' => 'PRICE TODAY'])
	<div class="d-flex">
		@if($validCoin)
			@php($trackedCoin = app()->coins->where('uid', $coin['id'])->first())
			<div class="coin-price clamp-1 mr-2">{{$trackedCoin->market()->get('current_price')}}</div>
			<div style="white-space: nowrap;" class="coin-percentage clamp-1 {{$trackedCoin->pastDayChange > 0 ? 'text-green' : 'text-red'}}">{!! formatPercent($trackedCoin->pastDayChange) !!}</div>
		@else
			<div class="coin-price clamp-1 mr-2">{{money($coin['current_price'], appCurrencySymbol(), true)}}</div>
			<div style="white-space: nowrap;" class="coin-percentage clamp-1 {{$coin['price_change_percentage_24h'] > 0 ? 'text-green' : 'text-red'}}">{!! formatPercent($coin['price_change_percentage_24h']) !!}</div>
		@endif
	</div>
</div>