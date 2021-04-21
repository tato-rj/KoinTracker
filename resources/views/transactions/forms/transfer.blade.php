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

@include('transactions.forms.inputs.amount')

<div class="form-row">
	<div class="col">
		@include('transactions.forms.inputs.price')
	</div>
	<div class="col">
		@include('transactions.forms.inputs.fee')
	</div>
</div>

@include('transactions.forms.inputs.date')

@include('transactions.forms.inputs.comments')