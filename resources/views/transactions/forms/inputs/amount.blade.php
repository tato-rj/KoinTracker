@input([
	'bag' => 'default',
	'type' => 'number',
	'name' => 'coin_amount',
	'step' => 'any',
	'label' => 'Quantity',
	'placeholder' => 'How many coins?',
	'value' => isset($transaction) ? abs($transaction->coin_amount) : null, 
	'prefix' => isset($transaction) ? strtoupper($transaction->coin->short) : null])