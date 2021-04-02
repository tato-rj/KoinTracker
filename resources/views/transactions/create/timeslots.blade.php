<div class="form-group">
	@include('components.form.label', ['label' => 'At what time?'])
	<select name="transaction_time" required class="custom-select {{validate($errors->default, 'transaction_time')}}">
		<option selected disabled>Pick a time</option>
		@foreach($timeslots as $period => $times)
		<optgroup label="{{ucfirst($period)}}">
			@foreach($times as $time)
			<option value="{{$time}}">{{$time}}</option>
			@endforeach
		</optgroup>
		@endforeach
	</select>
	@include('components.form.error', ['bag' => 'default', 'field' => 'transaction_time'])
</div>