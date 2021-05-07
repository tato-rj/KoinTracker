<div class="mb-2">
	<h4 class="m-0">We're {{$difference <= 0 ? 'down' : 'up'}} <strong>{{$difference}}</strong></h4>
	<div class="text-{{$color}} font-weight-bold">{{$message}} @fa(['icon' => $icon, 'mr' => 0, 'size' => 'lg'])</div>
</div>