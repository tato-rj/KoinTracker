@input(['bag' => 'default', 'type' => 'number', 'name' => 'coin_amount', 'placeholder' => 0, 'step' => 'any', 'label' => 'Quantity', 'placeholder' => 'How many coins?', 'value' => isset($transaction) ? $transaction->coin_amount : null])

<div class="form-row">
	<div class="col-lg-6 col-md-6 col-12">
		@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'placeholder' => 0, 'step' => 'any', 'label' => 'Price per coin', 'placeholder' => 'How much was 1 coin?', 'value' => isset($transaction) ? $transaction->price_per_coin : null])
	</div>
	<div class="col-lg-6 col-md-6 col-12">
		@input(['bag' => 'default', 'type' => 'number', 'name' => 'fee', 'placeholder' => 0, 'step' => 'any', 'label' => 'Fees', 'placeholder' => 'Did you pay fees?', 'required' => false, 'value' => isset($transaction) ? $transaction->fee : null])
	</div>
</div>

@include('transactions.forms.date')

@textarea(['bag' => 'default', 'name' => 'comments', 'placeholder' => 'Any comments on this transaction?', 'label' => 'Comments', 'rows' => 3, 'required' => false, 'value' => isset($transaction) ? $transaction->comments : null])

<div class="bg-light rounded py-3 px-4 mb-3">
	<label class="mb-1 text-muted"><small class="font-weight-bold">@fa(['icon' => 'money-bill-wave', 'mr' => 1])Total spent</small></label>
	<h2 class="m-0 total-cost">$0</h2>
</div>