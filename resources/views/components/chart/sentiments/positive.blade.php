@if(floatval(str_replace(',', '', $priceDifference)) < 2)
	@include('components.chart.sentiments.content', [
		'message' => 'Keep watching', 
		'icon' => 'meh', 
		'difference' => $priceDifference, 
		'color' => 'green'])
@elseif(floatval(str_replace(',', '', $priceDifference)) < 10)
	@include('components.chart.sentiments.content', [
		'message' => 'Lookin\' good!', 
		'icon' => 'smile', 
		'difference' => $priceDifference, 
		'color' => 'green'])
@elseif(floatval(str_replace(',', '', $priceDifference)) < 60)
	@include('components.chart.sentiments.content', [
		'message' => 'This is awesome', 
		'icon' => 'grin', 
		'difference' => $priceDifference, 
		'color' => 'green'])
@elseif(floatval(str_replace(',', '', $priceDifference)) < 100)
	@include('components.chart.sentiments.content', [
		'message' => 'Amazing!', 
		'icon' => 'laugh-beam', 
		'difference' => $priceDifference, 
		'color' => 'green'])
@else
	@include('components.chart.sentiments.content', [
		'message' => 'To the moon!!', 
		'icon' => 'grin-stars', 
		'difference' => $priceDifference, 
		'color' => 'green'])
@endif
