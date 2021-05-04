<div class="col-3 d-none d-lg-block">
	@include('coins.components.row.label', ['label' => 'MARKET CAP'])
	<div class="clamp-1">{{money($coin['market_cap'], appCurrencySymbol(), true)}}</div>
</div>