@if($prices && $prices->last() && $prices->avg())
	@php($priceDifference = diffInPercent($prices->first(), $prices->last()))

	<div class="text-right graph-sentiment">
		@if(floatval($priceDifference) < 1)
			@include('components.chart.sentiments.negative')
		@else
			@include('components.chart.sentiments.positive')
		@endif
	</div>
@endif