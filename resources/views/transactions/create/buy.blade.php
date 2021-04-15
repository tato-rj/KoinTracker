<div class="tab-pane fade show active" id="buy">
	<form method="POST" action="{{route('portfolios.transactions.store', auth()->user()->portfolios->first())}}" disable-on-submit>
		@csrf
		<input type="hidden" name="coin_id" value="{{isset($coin) ? $coin->id : $coins->first()->id}}">
		<input type="hidden" name="type" value="buy">
		
		@include('transactions.forms.buy')

		<button type="submit" class="btn btn-block btn-primary">Add Buy Transaction</button>
	</form>
</div>