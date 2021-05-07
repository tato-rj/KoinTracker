@if(floatval(str_replace(',', '', $priceDifference)) > -2)
	@include('components.chart.sentiments.content', [
		'message' => 'Not looking great', 
		'icon' => 'frown', 
		'difference' => $priceDifference, 
		'color' => 'red'])
@elseif(floatval(str_replace(',', '', $priceDifference)) > -5)
	@include('components.chart.sentiments.content', [
		'message' => 'Ugh...', 
		'icon' => 'angry', 
		'difference' => $priceDifference, 
		'color' => 'red'])
@elseif(floatval(str_replace(',', '', $priceDifference)) > -10)
	@include('components.chart.sentiments.content', [
		'message' => 'Come on...', 
		'icon' => 'grimace', 
		'difference' => $priceDifference, 
		'color' => 'red'])
@elseif(floatval(str_replace(',', '', $priceDifference)) > -20)
	@include('components.chart.sentiments.content', [
		'message' => 'Really?!', 
		'icon' => 'flushed', 
		'difference' => $priceDifference, 
		'color' => 'red'])
@else
	@include('components.chart.sentiments.content', [
		'message' => 'Oh boy...', 
		'icon' => 'sad-cry', 
		'difference' => $priceDifference, 
		'color' => 'red'])
@endif
