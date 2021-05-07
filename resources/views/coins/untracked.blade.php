@component('components.modal', ['id' => 'untracked-' . $coin['id'] . '-modal', 'header' => 'We\'re not tracking this yet'])
@slot('body')
<div class="d-flex justify-content-between mb-4">
	<div class="d-flex align-items-center">
		<img src="{{$coin['image']}}" class="mr-2" style="width: 40px;">
		<div>
			<h4 class="font-weight-bold text-uppercase m-0">{{$coin['name']}}</h4>
			<p class="m-0 text-muted" style="line-height: 1; font-size: 86%">{{strtoupper($coin['symbol'])}}</p>
		</div>
	</div>
	<div>
		@include('coins.components.star', ['name' => $coin['name'], 'id' => $coin['id']])
	</div>
</div>

<p>We are not tracking this coin yet but you can let us know you want to add transactions with it and we will add it to our list of coins to add next!</p>
<button class="btn btn-block btn-outline-primary">Request this coin</button>
@endslot
@endcomponent