<canvas id="{{$id}}" 
		data-url="{{$url ?? null}}" 
		data-color="{{$color ?? '#212529'}}" 
		data-points="{{json_encode($points)}}" 
		style="height: {{$height ?? null}}" class="w-100 mb-4"></canvas>