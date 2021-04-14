<div>
  <h5 class="mb-4">My{{isset($coin) ? ' ' . $coin->name : null}} transactions</h5>
  <div class="accordion" id="coin-transactions">
    @forelse(auth()->user()->transactionsOf($coin)->latest()->get() as $transaction)
      @include('transactions.show.transaction')
    @empty
		<div class="text-center">
			<img src="{{asset('images/empty.svg')}}" style="width: 200px" class="my-4 opacity-6">
			<p class="text-muted">Looks like you haven't added any {{$coin->name}} transactions yet...</p>
		</div>
    @endforelse
  </div>
</div>