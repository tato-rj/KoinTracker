@if(auth()->check() && auth()->user()->portfolios()->exists())
<div class="row mb-5">
	<div class="col-12 mb-4">
		<h4 class="m-0">My transactions</h4>
		@php($count = auth()->user()->portfolio->transactions()->count())
		<p class="text-muted">You have {{$count}} {{str_plural('transaction', $count)}}</p>
	</div>
	<div class="col-12">
	  <div class="accordion" id="coin-transactions">
	    @forelse(auth()->user()->portfolio->transactions()->latest()->get() as $transaction)
	    	@include('transactions.show.transaction')
		@empty
			@include('transactions.components.empty')
	    @endforelse
	  </div>
	</div>
</div>
@endif