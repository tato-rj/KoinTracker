<div class="col-lg-2 col-md-3 d-none d-md-block">
	@include('coins.components.row.label', ['label' => 'PRICE A WEEK AGO'])
	<div class="coin-price mr-2">{{money($coin['sparkline_in_7d']['price'][0], appCurrencySymbol(), true)}}</div>
</div>