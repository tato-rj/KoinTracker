<div class="form-group {{$grid ?? null}}">
	@include('components.form.label', ['asterisk' => $asterisk ?? null])
	<input 
		class="form-control {{$classes ?? null}} {{validate($errors->$bag, $name)}}" 
		@isset($id)
		id="{{$id}}"
		@endisset
		style="{{$styles ?? null}}" 
		{{$required ?? 'required'}} 
		type="{{$type ?? 'text'}}" 
		@if(! empty($type) && $type == 'number')
		min="0"
		step="{{$step ?? null}}"
		@endif
		name="{{$name}}" 
		@isset($limit)
		maxlength="{{$limit}}"
		max="{{$limit}}"
		@endisset
		placeholder="{{$placeholder ?? ucfirst(snake_str($name, true))}}" 
		@if(old($name))
		value="{{old($name)}}"
		@else
		value="{{$value ?? null}}"
		@endif
	>

	@include('components.form.error', ['bag' => $bag, 'field' => $name])
</div>