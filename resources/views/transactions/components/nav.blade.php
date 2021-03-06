<ul class="nav nav-pills nav-fill rounded mb-4" style="background-color: rgba(0,0,0,0.05);">
  <li class="nav-item">
    <a class="nav-link py-1 active" data-toggle="tab" href="#buy">Buy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link py-1" data-toggle="tab" href="#sell">Sell</a>
  </li>
{{--   <li class="nav-item">
    <a class="nav-link py-1" data-toggle="tab" href="#transfer">Transfer</a>
  </li> --}}
</ul>

<div class="form-group d-flex align-items-center">
	<img src="{{isset($coin) ? $coin->getIcon() : app()->coins->first()->getIcon()}}" class="mr-2" style="height: 100%">
	<select id="select-coin" class="custom-select">
		@foreach(app()->coins as $transactionCoin)
		<option data-icon="{{$transactionCoin->getIcon()}}" 
			@isset($coin)
			{{$coin->is($transactionCoin) ? 'selected' : 'foo'}} 
			@else
			{{$loop->first ? 'selected' : null}} 
			@endisset
			value="{{$transactionCoin->id}}">{{$transactionCoin->name}} ({{strtoupper($transactionCoin->short)}})
		</option>
		@endforeach
	</select>
</div>