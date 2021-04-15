	
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

		@include('transactions.forms.date')

		@textarea(['bag' => 'default', 'name' => 'comments', 'placeholder' => 'Any comments on this transaction?', 'label' => 'Comments', 'rows' => 3, 'required' => false])