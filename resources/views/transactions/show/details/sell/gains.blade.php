<div class="col-lg-3 col-md-3 col-6 col-3 p-3">
	<div class="border-right border-sm-none">
		@label(['text' => $transaction->isPositive ? 'You could\'ve lost' : 'You could\'ve gained', 'icon' => $transaction->isPositive ? 'glass-cheers' : 'heart-broken', 'bold' => false])
		<h4 class="m-0}}">{{str_replace('-', '', $transaction->difference)}}</h4>
	</div>
</div>