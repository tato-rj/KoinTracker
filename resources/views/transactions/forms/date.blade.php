<div class="form-row">
	<div class="col">
		@datepicker(['bag' => 'default', 'name' => 'transaction_date', 'label' => 'When did you buy it?', 'placeholder' => 'Pick a date'])
	</div>
	<div class="col">
		<div class="form-group">
			@include('components.form.label', ['label' => 'At what time?'])
			<select name="transaction_time" required class="custom-select {{validate($errors->default, 'transaction_time')}}">
				<option selected disabled>Pick a time</option>
				@foreach($timeslots as $period => $times)
				<optgroup label="{{ucfirst($period)}}">
					@foreach($times as $time)
					@isset($transaction)
					<option value="{{$time}}" {{$transaction->time == $time ? 'selected' : null}}>{{$time}}</option>
					@else
					<option value="{{$time}}" {{old('transaction_time') == $time ? 'selected' : null}}>{{$time}}</option>
					@endisset
					@endforeach
				</optgroup>
				@endforeach
			</select>
			@include('components.form.error', ['bag' => 'default', 'field' => 'transaction_time'])
		</div>
	</div>
</div>