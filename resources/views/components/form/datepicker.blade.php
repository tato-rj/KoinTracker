<div class="form-group">
	@include('components.form.label', ['asterisk' => $asterisk ?? null])
	<input 
	name="{{$name}}"
	readonly 
		type="text" 
		class="datepicker form-control {{$classes ?? null}} {{validate($errors->$bag, $name)}}"
		placeholder="{{$placeholder ?? ucfirst(snake_str($name, true))}}" 
		style="cursor: pointer;" 
	>
</div>