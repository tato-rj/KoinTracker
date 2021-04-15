<div class="{{$class ?? null}} mb-4">
	{{get_sentences($coin->description, 2)}} <a data-target="#coin-modal" href="" data-toggle="modal" class="text-{{$coin->uid}} text-underline">Read more</a>
</div>

@component('components.modal', ['id' => 'coin-modal'])
@slot('header')
<div class="d-flex align-items-center">
	@include('coins.components.logo', ['mr' => 2])
	<div>About {{$coin->name}}</div>
</div>
@endslot

@slot('body')
<p class="m-0" style="white-space: pre-wrap;">{{$coin->description}}</p>
@endslot
@endcomponent
