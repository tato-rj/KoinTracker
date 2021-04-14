<div class="tab-pane fade show active" id="buy">
	<form method="POST" action="{{route('portfolios.transactions.store', auth()->user()->portfolios->first())}}" disable-on-submit>
		@csrf

		<input type="hidden" name="coin_id" value="{{isset($coin) ? $coin->id : $coins->first()->id}}">
		<input type="hidden" name="type" value="buy">

		@input(['bag' => 'default', 'type' => 'number', 'name' => 'coin_amount', 'placeholder' => 0, 'step' => 'any', 'label' => 'Quantity', 'placeholder' => 'How many coins?'])

		<div class="form-row">
			<div class="col-lg-6 col-md-6 col-12">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'placeholder' => 0, 'step' => 'any', 'label' => 'Price per coin', 'placeholder' => 'How much was 1 coin?'])
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'fee', 'placeholder' => 0, 'step' => 'any', 'label' => 'Fees', 'placeholder' => 'Did you pay fees?', 'required' => false])
			</div>
		</div>

		@include('transactions.components.date')

		@textarea(['bag' => 'default', 'name' => 'comments', 'placeholder' => 'Any comments on this transaction?', 'label' => 'Comments', 'rows' => 3, 'required' => false])

		<div class="bg-light rounded py-3 px-4 mb-3">
			<label class="mb-1 text-muted"><small class="font-weight-bold">@fa(['icon' => 'money-bill-wave', 'mr' => 1])Total spent</small></label>
			<h2 class="m-0 total-cost">$0</h2>
		</div>

		<button type="submit" class="btn btn-block btn-primary">Add Buy Transaction</button>
	</form>
</div>