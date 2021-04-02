<div class="tab-pane fade show active" id="buy">
	<form method="POST" action="{{route('portfolios.transactions.store', auth()->user()->portfolios->first())}}" disable-on-submit>
		@csrf

		<input type="hidden" name="coin" value="{{isset($coin) ? $coin->uid : $coins->first()->uid}}">

		@input(['bag' => 'default', 'type' => 'number', 'name' => 'coin_amount', 'placeholder' => 0, 'label' => 'Quantity', 'placeholder' => 'How many coins?'])

		<div class="form-row">
			<div class="col-lg-6 col-md-6 col-12">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'placeholder' => 0, 'label' => 'Price per coin', 'placeholder' => 'How much was 1 coin?'])
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'placeholder' => 0, 'label' => 'Fee', 'placeholder' => 'Any fees?'])
			</div>
		</div>

		<div class="form-row">
			<div class="col">
				@datepicker(['bag' => 'default', 'name' => 'transaction_date', 'label' => 'When did you buy it?', 'placeholder' => 'Pick a date'])
			</div>
			<div class="col">
				@include('transactions.create.timeslots')
			</div>
		</div>

		@textarea(['bag' => 'default', 'name' => 'comments', 'placeholder' => 'Any comments on this transaction?', 'label' => 'Comments', 'rows' => 3, 'required' => false])

		<div class="bg-light rounded py-3 px-4 mb-3">
			<label class="mb-1 text-muted"><small class="font-weight-bold">@fa(['icon' => 'money-bill-wave', 'mr' => 1])Total spent</small></label>
			<h2 class="m-0">$0</h2>
		</div>

		<button type="submit" class="btn btn-block btn-primary">Add Buy Transaction</button>
	</form>
</div>