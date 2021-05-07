@if(auth()->check() && auth()->user()->portfolios()->exists())
@php($transactions = isset($coin) ? auth()->user()->transactionsOf($coin) : auth()->user()->portfolio->transactions())
<div class="row">
	<div class="col-12 mb-4">
		<div class="d-flex justify-content-between align-items-end flex-wrap">
			<div class="mb-2">
				<h4 class="m-0">My {{isset($coin) ? $coin->name . ' ' : null}}transactions</h4>
				<p class="text-muted m-0">You have {{$transactions->count()}} {{str_plural('transaction', $transactions->count())}}</p>
			</div>
			@sort(['id' => 'sort-transactions', 'fields' => [
				'coin' => 'Coin',
				'type' => 'Type',
				'date' => 'Date',
				'price' => 'Price per coin',
				'amount' => 'Coin amount',
				'fees' => 'Fees',
				'gains' => 'Gains'
			]])
		</div>
	</div>
	<div class="col-12">
	  <div class="accordion" id="coin-transactions">
	    @forelse($transactions->take(5)->get() as $transaction)
	    	@include('transactions.show.transaction')
		@empty
			@include('transactions.components.empty')
	    @endforelse
	  </div>
	  @if($transactions->count() > 5)
	  <button class="mt-4 btn btn-block btn-outline-secondary" id="load-transactions" 
	  	data-url="{{route('portfolios.transactions', ['portfolio' => $transaction->portfolio, 'coin' => isset($coin) ? $coin : null])}}">LOAD MORE</button>
	  @endif
	</div>
</div>
@else
<div class="mb-2">
	<h4 class="m-0">My {{isset($coin) ? $coin->name . ' ' : null}}transactions</h4>
	<p class="text-muted m-0">You have 0 transactions</p>
</div>
@include('transactions.components.empty')
@endif