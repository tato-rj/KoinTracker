<div class="col-3 col-md-2 d-none d-sm-block">
	@include('coins.components.row.label', ['label' => 'MARKET CAP'])
	<div class="clamp-1" numeral-format="($0.00 a)" numeral-value="{{$coin['market_cap']}}"></div>
</div>