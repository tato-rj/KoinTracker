<div class="col-lg-3 col-md-6 col-12 mb-4 coin-card t-2" id="{{$coin->uid}}-card" style="opacity: 0;">
	<a href="{{route('coins.show', $coin)}}" class="link-none">
		<div class="rounded shadow p-3">
			<div class="d-flex align-items-center mb-3">
				@include('coins.components.logo')
				<div>
					<h6 class="m-0">{{$coin->name}}</h6>
					<p class="m-0 text-muted" style="line-height: 1; font-size: 86%">{{strtoupper($coin['short'])}}</p>
				</div>
			</div>
			<div class="mb-2">
				<canvas id="{{$coin->uid}}-canvas" data-color="{{$coin->color('24h')}}" data-points="{{json_encode($coin->range('24h'))}}" class="w-100 chart-canvas" style="height: 80px"></canvas>
			</div>
			<div class="d-flex d-apart">
				<div class="coin-price">{{$coin->market()->get('current_price')}}</div>
				<div class="coin-percentage {{$coin->pastDayChange > 0 ? 'text-green' : 'text-red'}}">{!! formatPercent($coin->pastDayChange) !!}</div>
			</div>
		</div>
	</a>
</div>