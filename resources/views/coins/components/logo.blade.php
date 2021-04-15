@if(isset($link) && $link)
<a class="link-none" href="{{route('coins.show', $coin)}}">
	<img src="{{$coin->getIcon()}}" class="mr-{{$mr ?? 2}}" style="width: 30px;">
</a>
@else
	<img src="{{$coin->getIcon()}}" class="mr-{{$mr ?? 2}}" style="width: 30px;">
@endif