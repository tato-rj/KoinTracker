<div class="alert-container animate__animated animate__fadeInUp animate__faster {{! empty($temporary) ? 'alert-temporary' : null}} d-flex justify-content-center w-100 alert-{{! empty($floating) ? $floating : null}}">
	<div class="alert rounded border-0 {{! empty($fullX) ? 'w-100' : null}} {{! empty($floating) ? 'm-0' : null}} alert-{{$color}} {{! empty($dismissible) ? 'alert-dismissible' : null}} fade show" role="alert">
		
		{!! $message !!}

		@isset($dismissible)
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			@fa(['icon' => 'times', 'mr' => 0, 'size' => 'sm'])
		</button>
		@endisset
	</div>  
</div>