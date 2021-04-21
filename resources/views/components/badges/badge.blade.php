<div class="rounded-circle m-2 noselect {{$badge->getTheme()}} d-flex flex-center user-badge" 
	data-tippy-content="<strong>{{$badge->name}}</strong><br>{{$badge->description}}" 
	style="width: 40px; height: 40px;">
	{!! $badge->element !!}
</div>