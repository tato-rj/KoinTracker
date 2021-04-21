<div class="col-lg-3 col-md-3 col-6 p-3">
	<div class=""> 
		@label(['text' => 'Percentage', 'icon' => 'chart-area', 'bold' => false])
		<h4 class="m-0 text-{{$transaction->isPositive ? 'green' : 'red'}}">@caret(['state' => $transaction->isPositive]){{$transaction->gains()}}</h4>
	</div>
</div>