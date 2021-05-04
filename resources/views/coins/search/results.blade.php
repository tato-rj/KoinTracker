<div class="col-12 text-center mb-3 text-muted">We found {{$coins->count()}} {{str_plural('coin', $coins->count())}} matching your search</div>

@forelse($coins as $coin)
	@include('coins.components.row', ['coin' => $coin, 'animate' => false])
@empty
<div class="text-center my-6">
	<h1 class="text-grey opacity-6" style="font-size: 3.4rem">@fa(['icon' => 'box-open', 'mr' => 0])</h1>
</div>
@endforelse