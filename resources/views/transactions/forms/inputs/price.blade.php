@input([
	'bag' => 'default',
	'name' => 'price_per_coin',
	'label' => 'Price per coin',
	'placeholder' => '0.00',
	'value' => isset($transaction) ? $transaction->price_per_coin->getValue() : null, 
	'classes' => 'money-field',
	'prefix' => currency('usd')->getPrefix()])