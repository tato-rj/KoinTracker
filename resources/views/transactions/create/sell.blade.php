<div class="tab-pane fade" id="sell">
	<form method="POST" action="{{route('portfolios.transactions.store', auth()->user()->portfolios->first())}}" disable-on-submit>
		@csrf
		<input type="hidden" name="coin_id" value="{{isset($coin) ? $coin->id : $coins->first()->id}}">
		<input type="hidden" name="type" value="sell">
		
		@include('transactions.forms.sell')

		<button type="submit" class="btn btn-block btn-primary">Add Sell Transaction</button>
	</form>
</div>