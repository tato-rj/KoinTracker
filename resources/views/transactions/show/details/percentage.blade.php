<div class="col-lg-3 col-md-3 col-6 p-3">
	<div class=""> 
		@label(['color' => 'muted', 'text' => 'Percentage', 'icon' => 'chart-area'])
		<h4 class="m-0 text-{{$transaction->isPositive ? 'green' : 'red'}}">{{$transaction->isPositive ? '+' : null}}{{$transaction->gains()}}</h4>
	</div>
</div>