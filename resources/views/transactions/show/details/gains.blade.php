<div class="col-lg-3 col-md-3 col-6 col-3 p-3">
	<div class="border-right border-sm-none">
		@label(['text' => $transaction->isPositive ? 'You gained' : 'You lost', 'icon' => 'glass-cheers'])
		<h4 class="m-0 text-{{$transaction->isPositive ? 'green' : 'red'}}">{{$transaction->isPositive ? '+' : null}}{{fiat($transaction->difference)}}</h4>
	</div>
</div>