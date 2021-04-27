<div class="row mb-5">
	<div class="col-lg-4 col-md-6 col-12">
		<div class="mb-4">
			@label(['text' => 'My portfolio balance', 'icon' => 'piggy-bank'])
			
			@auth
				@if(auth()->user()->transactions()->exists())
					<h1 id="portfolio-balance">{{money(auth()->user()->portfolio->value())}}</h1>
					@include('portfolios.components.gains', ['original' => auth()->user()->portfolio->originalValue()->getAmount(), 'latest' => auth()->user()->portfolio->value()->getAmount()])
				@else
					<h1>{{money(0)}}</h1>
					@include('portfolios.components.gains', ['original' => 0, 'latest' => 0])
				@endif
			@else
				<h1>{{money(0)}}</h1>
				@include('portfolios.components.gains', ['original' => 0, 'latest' => 0])
			@endauth
		</div>

		@if(auth()->check() && auth()->user()->transactions()->exists())
			@include('portfolios.components.coins')
		@endif

		@auth
			@if(auth()->user()->transactions()->exists())
			@include('transactions.components.add-button', ['class' => 'd-none d-md-block','size' => 'btn-block', 'theme' => 'primary'])
			@endif
		@endauth
	</div>
	<div class="col-lg-8 col-md-6 col-12">
		@if(auth()->check() && auth()->user()->transactions()->exists())
			@include('components.chart.canvas', ['id' => 'chart', 'points' => auth()->user()->portfolio->range('24h'), 'url' => route('portfolios.chart', auth()->user()->portfolio)])
			@include('components.chart.range', ['target' => 'chart'])

			@include('transactions.components.add-button', ['class' => 'd-md-none','size' => 'btn-block', 'theme' => 'primary'])
		@else
			@include('components.chart.empty')
		@endif
	</div>
</div>