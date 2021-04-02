@php($disableFirst = isset($disableFirst) && $disableFirst)

<div class="form-group {{$grid ?? null}}">
	@include('components.form.label', ['asterisk' => $asterisk ?? null])
	<select 
		name="{{$name}}" 
		@isset($id)
		id="{{$id}}"
		@endisset
		style="{{$styles ?? null}}" 
		{{$required ?? 'required'}}		
		class="custom-select {{$classes ?? null}} {{validate($errors->$bag, $name)}}">
		@foreach($options as $label => $attr)
			@if(is_array($attr))
			<option value="{{$attr[0]}}" 
					{{in_array('selected', $attr) ? 'selected' : null}}
					{{in_array('disabled', $attr) ? 'disabled' : null}}>{{$label}}</option>
			@else
			<option value="{{$attr}}" {{$disableFirst && $loop->first ? 'selected disabled' : null}}>{{$attr}}</option>
			@endif
		@endforeach
	</select>

	@include('components.form.error', ['bag' => $bag, 'field' => $name])
</div>