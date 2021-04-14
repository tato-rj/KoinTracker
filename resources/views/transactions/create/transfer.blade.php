<div class="tab-pane fade" id="transfer">
	<form method="POST" action="{{route('portfolios.transactions.store', auth()->user()->portfolios->first())}}" disable-on-submit>
		@csrf

		<input type="hidden" name="coin_id" value="{{isset($coin) ? $coin->id : $coins->first()->id}}">
		<input type="hidden" name="type" value="transfer">
		
		@select([
			'bag' => 'default',
			'name' => 'transfer_type',
			'label' => 'Transfer type',
			'options' => [
				'Did you send or receive?' => ['', 'selected', 'disabled'],
				'I received it' => ['in'],
				'I sent it' => ['out']
			]
		])

		<div class="form-row">
			<div class="col"> 
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'coin_amount', 'label' => 'Quantity', 'placeholder' => 'How many coins?'])
			</div>
			<div class="col">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'label' => 'Fees', 'placeholder' => 'Did you pay fees?', 'required' => false])
			</div>
		</div>

		@include('transactions.components.date')

		@textarea(['bag' => 'default', 'name' => 'comments', 'placeholder' => 'Any comments on this transaction?', 'label' => 'Comments', 'rows' => 3, 'required' => false])

		<button type="submit" class="btn btn-block btn-primary">Add Transfer</button>
	</form>
</div>