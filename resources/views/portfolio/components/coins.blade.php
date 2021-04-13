<div class="mb-4">
	@label(['text' => 'My coins', 'color' => 'primary', 'mb' => 2])

	@foreach(auth()->user()->portfolio->coins->unique() as $coin)
		<div class="d-flex align-items-center justify-content-between mb-2">
			<div class="d-flex align-items-center">
				@include('coins.components.logo') 
				<div>{{auth()->user()->portfolio->amountOf($coin->uid)}} <small class="text-muted font-weight-bold">{{strtoupper($coin->short)}}</small></div>
			</div>
			<div class="font-weight-bold">{{fiat(auth()->user()->portfolio->valueFor($coin))}}</div>
		</div>
	@endforeach
</div>