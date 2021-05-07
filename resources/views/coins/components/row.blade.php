@php($validCoin = app()->coins->exists('uid', $coin['id']))
<div class="mb-4 coin-card t-2" id="{{$coin['symbol']}}-card" style="opacity: {{$animate ? 0 : 1}};">
	<a 
	@if($validCoin)
	href="{{route('coins.show', ['coin' => $coin['id']])}}" 
	@else
	data-toggle="modal" data-target="#untracked-{{$coin['id']}}-modal"
	@endif
	class="link-none cursor-pointer">
		<div class="rounded shadow row no-gutters align-items-center p-3">
			@include('coins.components.row.name')
			@include('coins.components.row.market-cap')
			@include('coins.components.row.rank')
			@include('coins.components.row.price-last-week')
			@include('coins.components.row.price')
			@include('coins.components.row.status')
		</div>
	</a>
</div>

@if(! $validCoin)
@include('coins.untracked')
@endif