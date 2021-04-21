<div class="col-lg-3 col-md-3 col-6 p-3">
	<div class="border-right border-sm-none"> 
		@label(['text' => 'You traded for', 'icon' => 'money-bill-wave', 'bold' => false])
		<h4 class="m-0">{{str_replace('-', '', $transaction->currency_amount)}}</h4>
	</div>
</div>