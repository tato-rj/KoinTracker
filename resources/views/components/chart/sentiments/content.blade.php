<div class="mb-2">
	<div class="text-{{$color}} font-weight-bold mb-1">{{$message}} @fa(['icon' => $icon, 'mr' => 0, 'size' => 'lg'])</div>
	<h6 class="m-0 text-muted">{{$difference <= 0 ? 'Down' : 'Up'}} <strong class="text-primary">{{$difference}}</strong> in the past {{rangeToHumans($range)}}</h6>
</div>