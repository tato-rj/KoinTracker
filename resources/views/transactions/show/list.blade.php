@if(auth()->check() && auth()->user()->portfolios()->exists())
@php($transactions = isset($coin) ? auth()->user()->transactionsOf($coin) : auth()->user()->portfolio->transactions())
<div class="row mb-5">
	<div class="col-12 mb-4">
		<div class="d-flex justify-content-between align-items-end flex-wrap">
			<div class="mb-2">
				<h4 class="m-0">My {{isset($coin) ? $coin->name . ' ' : null}}transactions</h4>
				<p class="text-muted m-0">You have {{$transactions->count()}} {{str_plural('transaction', $transactions->count())}}</p>
			</div>
			<div class="d-flex  mb-2" id="sort-transactions">
				<div>
					<select id="sort-field" class="custom-select">
						<option selected disabled value="">Sort by</option>
						<option value="coin">Coin</option>
						<option value="type">Type</option>
						<option value="date">Date</option>
						<option value="price">Price per coin</option>
						<option value="amount">Coin amount</option>
						<option value="fees">Fees</option>
						<option value="gains">Gains</option>
					</select>
				</div>
				<button class="btn btn-raw">@fa(['icon' => 'sort-amount-down-alt', 'mr' => 0])</button>
				<button class="btn btn-raw" style="display: none;">@fa(['icon' => 'sort-amount-up-alt', 'mr' => 0])</button>
			</div>
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
@endif