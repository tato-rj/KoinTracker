<div class="mb-4">
	<div class="mb-2 d-flex d-apart">
		@label(['text' => 'My coins', 'color' => 'primary'])
		@label(['text' => 'Worth now', 'color' => 'primary'])
	</div>

	@if(auth()->check() && auth()->user()->portfolios()->exists())
	@forelse(auth()->user()->portfolio->coins as $coin)
		<div class="d-flex align-items-center justify-content-between mb-2">
			<div class="d-flex align-items-center">
				@include('coins.components.logo') 
				<div>{{auth()->user()->portfolio->amountOf($coin->uid)}} <small class="text-muted font-weight-bold">{{strtoupper($coin->short)}}</small></div>
			</div>
			<div class="font-weight-bold">{{fiat(auth()->user()->portfolio->valueFor($coin))}}</div>
		</div>
	@empty
	<p>You haven't added any coins yet...</p>
	@endforelse
	@else
	<p>You haven't added any coins yet...</p>
	@endif
</div>