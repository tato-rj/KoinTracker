@textarea([
	'bag' => 'default',
	'name' => 'comments',
	'placeholder' => 'Any comments on this transaction?',
	'label' => 'Comments',
	'rows' => 3, 
	'required' => false, 
	'value' => isset($transaction) ? $transaction->comments : null])