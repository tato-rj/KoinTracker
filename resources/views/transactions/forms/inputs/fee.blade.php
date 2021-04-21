		@input([
			'bag' => 'default',
			'name' => 'fee',
			'step' => 'any',
			'label' => 'Fees',
			'placeholder' => '0.00',
			'required' => false, 
			'value' => isset($transaction)  && $transaction->fee ? $transaction->fee->getValue() : null, 
			'classes' => 'money-field',
			'prefix' => currency('usd')->getPrefix()])