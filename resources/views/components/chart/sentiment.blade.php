@if($prices && $prices->last() && $prices->avg())
@php($priceChange = number_format($prices->last() / $prices->avg(), 4))
@php($priceDifference = diffInPercent($prices->first(), $prices->last()))

<div class="text-right graph-sentiment">
	{{-- {{$priceChange}} --}}
	@if($priceChange < 0.94)
	<div class="text-red font-weight-bold">Oh boy... @fa(['icon' => 'sad-cry', 'mr' => 0, 'size' => 'lg'])</div>
	<div class="text-grey font-weight-bold">We're {{$priceDifference <= 0 ? 'down' : 'up'}} {{$priceDifference}}</div>
	@elseif(between($priceChange, 0.94, 0.96))
	<div class="text-red font-weight-bold">Not so good... @fa(['icon' => 'flushed', 'mr' => 0, 'size' => 'lg'])</div>
	<div class="text-grey font-weight-bold">We're {{$priceDifference <= 0 ? 'down' : 'up'}} {{$priceDifference}}</div>
	@elseif(between($priceChange, 0.96, 0.98))
	<div class="text-red font-weight-bold">Come on... @fa(['icon' => 'grinface', 'mr' => 0, 'size' => 'lg'])</div>
	<div class="text-grey font-weight-bold">We're {{$priceDifference <= 0 ? 'down' : 'up'}} {{$priceDifference}}</div>
	@elseif(between($priceChange, 0.97, 0.99))
	<div class="text-red font-weight-bold">Ugh... @fa(['icon' => 'angry', 'mr' => 0, 'size' => 'lg'])</div>
	<div class="text-grey font-weight-bold">We're {{$priceDifference <= 0 ? 'down' : 'up'}} {{$priceDifference}}</div>

	@elseif(between($priceChange, 0.99, 1))
	<div class="text-warning font-weight-bold">Keep watching @fa(['icon' => 'meh', 'mr' => 0, 'size' => 'lg'])</div>
	<div class="text-grey font-weight-bold">We're {{$priceDifference <= 0 ? 'down' : 'up'}} {{$priceDifference}}</div>

	@elseif(between($priceChange, 1, 1.2))
	<div class="text-warning font-weight-bold">Keep watching @fa(['icon' => 'meh', 'mr' => 0, 'size' => 'lg'])</div>
	<div class="text-grey font-weight-bold">We're {{$priceDifference <= 0 ? 'down' : 'up'}} {{$priceDifference}}</div>

	@elseif(between($priceChange, 1.2, 1.4))
	<div class="text-green font-weight-bold">Lookin' good! @fa(['icon' => 'smile', 'mr' => 0, 'size' => 'lg'])</div>
	<div class="text-grey font-weight-bold">We're {{$priceDifference <= 0 ? 'down' : 'up'}} {{$priceDifference}}</div>
	@elseif(between($priceChange, 1.4, 1.8))
	<div class="text-green font-weight-bold">This is great @fa(['icon' => 'grin', 'mr' => 0, 'size' => 'lg'])</div>
	<div class="text-grey font-weight-bold">We're {{$priceDifference <= 0 ? 'down' : 'up'}} {{$priceDifference}}</div>
	@elseif(between($priceChange, 1.8, 2.2))
	<div class="text-green font-weight-bold">Amazing! @fa(['icon' => 'laugh-beam', 'mr' => 0, 'size' => 'lg'])</div>
	<div class="text-grey font-weight-bold">We're {{$priceDifference <= 0 ? 'down' : 'up'}} {{$priceDifference}}</div>
	@elseif($priceChange >= 2.2)
	<div class="text-green font-weight-bold">To the moon!! @fa(['icon' => 'grin-stars', 'mr' => 0, 'size' => 'lg'])</div>
	<div class="text-grey font-weight-bold">We're {{$priceDifference <= 0 ? 'down' : 'up'}} {{$priceDifference}}</div>
	@endif
</div>
@endif