@input([
	'bag' => 'default',
	'name' => 'price_per_coin',
	'label' => 'Price per coin',
	'placeholder' => '0.00',
	'value' => isset($transaction) ? number_format($transaction->price_per_coin->getValue(), 2) : null, 
	'classes' => 'money-field',
	'prefix' => currency('usd')->getPrefix()])