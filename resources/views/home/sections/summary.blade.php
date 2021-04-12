<div class="row mb-5">
	<div class="col-lg-4 col-md-6 col-12">
		<div class="mb-3">
			@label(['text' => 'My portfolio balance', 'icon' => 'piggy-bank'])
			
			<h1>{{usd(auth()->user()->portfolio->value())}}</h1>
			
			@include('components.portfolio.gains', ['label' => usd(0) . ' (24h)'])
		</div>
	
		@include('components.portfolio.holdings')

		@auth
			@if(auth()->user()->transactions()->exists())
			<a href="{{route('home')}}" class="btn btn-primary mb-2 btn-block">MY PORTFOLIO</a>
			@include('transactions.components.button', ['size' => 'btn-block', 'theme' => 'outline-primary'])
			@endif
		@endauth
	</div>
	<div class="col-lg-8 col-md-6 col-12">
		@if(auth()->check() && auth()->user()->transactions()->exists())
{{-- 			@include('components.chart.canvas', ['id' => 'chart', 'points' => auth()->user()->portfolio->range('24h'), 'url' => route('portfolios.chart', auth()->user()->portfolio)])
			@include('components.chart.range', ['target' => 'chart']) --}}
		@else
			@include('components.chart.empty')
		@endif
	</div>
</div>