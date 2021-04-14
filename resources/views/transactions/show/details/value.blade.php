<div class="col-lg-3 col-md-3 col-6 p-3">
	<div class="border-right">
		@label(['color' => 'muted', 'text' => 'Worth now', 'icon' => 'wallet'])
		<h4 class="m-0">{{fiat($transaction->current_value)}}</h4>
	</div>
</div>