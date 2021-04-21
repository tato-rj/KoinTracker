<div class="form-group {{$grid ?? null}}">
	@include('components.form.label', ['asterisk' => $asterisk ?? null])
	<div class="position-relative">
	@isset($prefix)
		<div class="position-absolute text-muted noselect" style="left: 12px; top: 50%; transform: translateY(-50%);">{{$prefix}}</div>
	@endisset
	<input 
		class="form-control {{$classes ?? null}} {{validate($errors->$bag, $name)}}" 
		@isset($data)
		@foreach($data as $name => $value)
		data-{{$name}}="{{$value}}"
		@endforeach
		@endisset

		@isset($id)
		id="{{$id}}"
		@endisset
		style="{{$styles ?? null}};
		@isset($prefix)
		padding-left: {{18 + (strlen($prefix) * 8)}}px
		@endisset
		" 
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
</div>

	@include('components.form.error', ['bag' => $bag, 'field' => $name])
</div>