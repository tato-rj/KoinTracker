<div class="tab-pane fade" id="transfer">
	<form method="POST" action="{{route('portfolios.transactions.store', auth()->user()->portfolios->first())}}" disable-on-submit>
		@csrf

		<input type="hidden" name="coin" value="{{isset($coin) ? $coin->uid : $coins->first()->uid}}">
		
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
				@input(['bag' => 'default', 'type' => 'number', 'name' => 'price_per_coin', 'label' => 'Fee', 'placeholder' => 'Any fees?'])
			</div>
		</div>

		<div class="form-row">
			<div class="col">
				@datepicker(['bag' => 'default', 'name' => 'transaction_date', 'label' => 'When did you transfer it?', 'placeholder' => 'Pick a date'])
			</div>
			<div class="col">
				@include('transactions.create.timeslots')
			</div>
		</div>

		@textarea(['bag' => 'default', 'name' => 'comments', 'placeholder' => 'Any comments on this transaction?', 'label' => 'Comments', 'rows' => 3, 'required' => false])

		<button type="submit" class="btn btn-block btn-primary">Add Transfer</button>
	</form>
</div>