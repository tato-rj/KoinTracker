<div class="d-flex mb-2" id="{{$id}}">
	<div>
		<select id="sort-field" class="custom-select">
			<option selected disabled value="">Sort by</option>
			@foreach($fields as $value => $name)
			<option value="{{$value}}">{{$name}}</option>
			@endforeach
		</select>
	</div>
	<button class="btn btn-raw">@fa(['icon' => 'sort-amount-down-alt', 'mr' => 0])</button>
	<button class="btn btn-raw" style="display: none;">@fa(['icon' => 'sort-amount-up-alt', 'mr' => 0])</button>
</div>