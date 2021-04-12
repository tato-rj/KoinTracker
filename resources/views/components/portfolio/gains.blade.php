@isset($isPositive)
@php($color = $isPositive ? 'green' : 'red')
@php($sign = $isPositive ? '+' : null)
@else
@php($color = 'grey')
@php($sign = null)
@endisset

<div class="badge alert-{{$color}}" id="{{$id ?? null}}" data-theme="alert-{{$color}}" data-original="{{$sign . $label}}">{{$sign . $label}}</div>