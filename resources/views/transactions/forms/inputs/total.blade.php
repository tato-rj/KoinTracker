<div class="bg-light rounded py-3 px-4 mb-3">
	<label class="mb-1 text-muted"><small class="font-weight-bold">@fa(['icon' => 'money-bill-wave', 'mr' => 1])Total value</small></label>
	<h2 class="m-0 total-cost">{{ money(isset($transaction) ? $transaction->currency_amount : 0, appCurrencySymbol())}}</h2>
</div>