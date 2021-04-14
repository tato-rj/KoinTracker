@isset($label)
	@php($color = $isPositive ? 'green' : 'red')
	@php($sign = $isPositive ? '+' : '')
@else
	@php($gain = fiat($latest)->subtract(fiat($original)))
	@php($percent = diffInPercent($original, $latest))

	@if($gain->isZero())
		@php($color = 'grey')
		@php($sign = '')
	@else
		@php($color = $gain->isPositive() ? 'green' : 'red')
		@php($sign = $gain->isPositive() ? '+' : '')
	@endif
	
	@php($label = $sign . $gain . ' (' . $percent . ')')
@endif

<div class="badge alert-{{$color}}" id="{{$id ?? null}}" data-theme="alert-{{$color}}" data-original="{{$label}}">{{$label}}</div>