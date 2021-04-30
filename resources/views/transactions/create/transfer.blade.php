<div class="tab-pane fade" id="transfer">
	<form method="POST" action="{{route('portfolios.transactions.store', auth()->user()->portfolios->first())}}" disable-on-submit>
		@csrf
		<input type="hidden" name="coin_id" value="{{isset($coin) ? $coin->id : app()->coins->first()->id}}">
		<input type="hidden" name="type" value="transfer">

		@include('transactions.forms.transfer')

		<button type="submit" class="btn btn-block btn-primary">Add Transfer</button>
	</form>
</div>