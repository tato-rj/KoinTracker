<div class="form-group">
	@include('components.form.label', ['asterisk' => $asterisk ?? null])
	<input 
	name="{{$name}}"
	readonly 
		type="text" 
		class="datepicker form-control {{$classes ?? null}} {{validate($errors->$bag, $name)}}"
		placeholder="{{$placeholder ?? ucfirst(snake_str($name, true))}}" 
		style="cursor: pointer;" 
		@isset($transaction)
		value="{{$transaction->transaction_date->format('Y-m-d')}}"
		@else
		value="{{old($name)}}"
		@endif
	>
</div>