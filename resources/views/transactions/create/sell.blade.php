<div class="tab-pane fade" id="sell">
	<form method="POST" action="{{route('portfolios.transactions.store', auth()->user()->portfolios->first())}}">
		@csrf

		<input type="hidden" name="coin" value="{{isset($coin) ? $coin->uid : $coins->first()->uid}}">
		
		<div class="form-row">
			<div class="col-lg-6 col-md-6 col-12">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'coin_amount', 'placeholder' => 0, 'label' => 'Quantity', 'placeholder' => 'How many coins?'])
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'placeholder' => 0, 'label' => 'Price per coin', 'placeholder' => 'How much was 1 coin?'])
			</div>
		</div>

		<div class="form-row">
			<div class="col">
				@datepicker(['bag' => 'default', 'name' => 'transaction_date', 'label' => 'Transaction date', 'placeholder' => 'Pick a date'])
			</div>
			<div class="col">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'placeholder' => 0, 'label' => 'Fee', 'placeholder' => 'Any fees?'])
			</div>
		</div>

		@textarea(['bag' => 'default', 'name' => 'comments', 'placeholder' => 'Any comments on this transaction?', 'label' => 'Comments', 'rows' => 3, 'required' => false])

		<div class="bg-light rounded py-3 px-4 mb-3">
			<label class="mb-1 text-muted"><small class="font-weight-bold">Total received</small></label>
			<h2 class="m-0">$0</h2>
		</div>

		<button type="submit" class="btn btn-block btn-primary">Add Sell Transaction</button>
	</form>
</div>