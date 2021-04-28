@php($priceChange = number_format($prices->last() / $prices->avg(), 4))

<div class="text-right graph-sentiment">
	{{-- {{$priceChange}} --}}
	@if($priceChange < 0.94)
	<div class="text-red font-weight-bold">Oh boy... @fa(['icon' => 'angry', 'mr' => 0, 'size' => 'lg'])</div>
	@elseif(between($priceChange, 0.94, 0.96))
	<div class="text-red font-weight-bold">Not so good... @fa(['icon' => 'angry', 'mr' => 0, 'size' => 'lg'])</div>
	@elseif(between($priceChange, 0.96, 0.98))
	<div class="text-red font-weight-bold">Come on... @fa(['icon' => 'angry', 'mr' => 0, 'size' => 'lg'])</div>
	@elseif(between($priceChange, 0.97, 1))
	<div class="text-red font-weight-bold">Ugh... @fa(['icon' => 'angry', 'mr' => 0, 'size' => 'lg'])</div>

	@elseif(between($priceChange, 1, 1.4))
	<div class="text-green font-weight-bold">Lookin' good! @fa(['icon' => 'grin', 'mr' => 0, 'size' => 'lg'])</div>
	@elseif(between($priceChange, 1.4, 1.8))
	<div class="text-green font-weight-bold">This is great @fa(['icon' => 'grin', 'mr' => 0, 'size' => 'lg'])</div>
	@elseif(between($priceChange, 1.8, 2.2))
	<div class="text-green font-weight-bold">Amazing! @fa(['icon' => 'grin', 'mr' => 0, 'size' => 'lg'])</div>
	@elseif($priceChange >= 2.2)
	<div class="text-green font-weight-bold">To the moon!! @fa(['icon' => 'grin', 'mr' => 0, 'size' => 'lg'])</div>
	@endif
</div>