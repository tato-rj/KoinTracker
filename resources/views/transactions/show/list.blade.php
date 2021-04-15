@auth
<div>
  <h5 class="mb-4">My{{isset($coin) ? ' ' . $coin->name : null}} transactions</h5>
  <div class="accordion" id="coin-transactions">
    @forelse(auth()->user()->transactionsOf($coin)->latest()->get() as $transaction)
      @include('transactions.show.transaction')
    @empty
		@include('transactions.components.empty')
    @endforelse
  </div>
</div>
@else
    @include('transactions.components.empty')
@endauth