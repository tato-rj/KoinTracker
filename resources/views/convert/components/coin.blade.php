<div class="col-5 text-center">
	@foreach($coins as $coin)
	<div class="mb-3 coin-logo" id="coin-{{$coin->uid}}" style="display: {{$coin->is('bitcoin') ? 'block' : 'none'}}">
		@include('coins.components.logo', ['coin' => $coin, 'size' => 120])
	</div>
	@endforeach

	<select class="form-control" name="coin">
	    @foreach($coins as $coin)
	    <option value="{{$coin->id}}" data-target="#coin-{{$coin->uid}}" {{$coin->is('bitcoin') ?'selected' : null}}>{{$coin->name}}</option>
	    @endforeach
	</select>
</div>