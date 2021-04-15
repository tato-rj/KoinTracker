	
		@input(['bag' => 'default', 'type' => 'number', 'name' => 'coin_amount', 'placeholder' => 0, 'label' => 'Quantity', 'placeholder' => 'How many coins?'])

		<div class="form-row">
			<div class="col-lg-6 col-md-6 col-12">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'placeholder' => 0, 'label' => 'Price per coin', 'placeholder' => 'How much was 1 coin?'])
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'placeholder' => 0, 'label' => 'Fees', 'placeholder' => 'Did you pay fees?', 'required' => false])				
			</div>
		</div>

		@include('transactions.forms.date')

		@textarea(['bag' => 'default', 'name' => 'comments', 'placeholder' => 'Any comments on this transaction?', 'label' => 'Comments', 'rows' => 3, 'required' => false])
		<div class="bg-light rounded py-3 px-4 mb-3">
			<label class="mb-1 text-muted"><small class="font-weight-bold">@fa(['icon' => 'money-bill-wave', 'mr' => 1])Total received</small></label>
			<h2 class="m-0 total-cost">$0</h2>
		</div>