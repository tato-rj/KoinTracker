<div class="tab-pane fade" id="transfer">
	<form method="POST" action="{{route('portfolios.transactions.store', auth()->user()->portfolios->first())}}">
		@csrf

		<input type="hidden" name="coin" value="{{isset($coin) ? $coin->uid : $coins->first()->uid}}">
		
		<div class="form-group">
			@include('components.form.label', ['label' => 'Transfer type'])
			<select name="transfer_type" class="custom-select" required>
				<option selected disabled>Did you send or receive?</option>
				<option value="in">I received it</option>
				<option value="out">I sent it</option>
			</select>
		</div>

		@input(['bag' => 'default', 'type' => 'number', 'name' => 'coin_amount', 'label' => 'Quantity', 'placeholder' => 'How many coins?'])

		<div class="form-row">
			<div class="col">
				@datepicker(['bag' => 'default', 'name' => 'transaction_date', 'label' => 'Transaction date', 'placeholder' => 'Pick a date'])
			</div>
			<div class="col">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'label' => 'Fee', 'placeholder' => 'Any fees?'])
			</div>
		</div>

		@textarea(['bag' => 'default', 'name' => 'comments', 'placeholder' => 'Any comments on this transaction?', 'label' => 'Comments', 'rows' => 3, 'required' => false])

		<button type="submit" class="btn btn-block btn-primary">Add Transfer</button>
	</form>
</div>