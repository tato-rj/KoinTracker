<div class="col-5 text-center">
	@foreach($fiats as $fiat)
	<div class="mb-3 fiat-logo fiat-{{$fiat->id}}" style="display: {{$fiat->is('usd') ? 'block' : 'none'}}">
		<h1 class="noselect" style="font-size: 4.62rem">{{$fiat->getCurrency()->getSymbol()}}</h1>
		<p class="text-muted">{{$fiat->getCurrency()->getName()}}</p>
	</div>
	@endforeach

	<select class="form-control" name="currency">
	    @foreach($fiats as $fiat)
	    <option value="{{$fiat->currency}}" data-target=".fiat-{{$fiat->id}}" {{$fiat->is('usd') ? 'selected' : null}}>{{$fiat->currency}}</option>
	    @endforeach
	</select>
</div>