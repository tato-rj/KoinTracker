@php($percent = percentage($points, \App\Models\Badge::sum('points')))

<div class="d-flex align-items-center">
	<div>
		<small class="font-weight-bold">LEVEL {{ceil(intval($percent) / 10)}}</small>
	</div>
	<div class="flex-grow rounded mx-3" style="background-color: rgba(0,0,0,0.05); height: 9px">
		<div class="rounded bg-primary h-100" style="width: {{$percent}}"></div>
	</div>
	<div>
		<small class="font-weight-bold">{{$points}} XP</small>		
	</div>
</div>