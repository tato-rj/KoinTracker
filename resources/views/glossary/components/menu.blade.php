<div class="position-relative py-2" id="menu-container">
	<div class="p-2 pb-4" id="glossary-menu">
		<div class="rounded border p-2 text-center">
			@foreach($glossary->keys() as $letter)
			<a class="btn btn-raw btn-block font-weight-bold" data-scroll href="#goto-{{$letter}}">{{$letter}}</a>
			@if(! $loop->last)
			<span style="font-size: 16%; vertical-align: middle;">@fa(['icon' => 'circle', 'color' => 'grey', 'mr' => 0])</span>
			@endif
			@endforeach
		</div>
	</div>

	<div class="position-fixed p-2 pb-4 custom-scroll h-100vh" style="overflow-y: scroll;" id="glossary-menu-fixed">
		<div class="rounded border p-2 text-center">
			@foreach($glossary->keys() as $letter)
			<a class="btn btn-raw btn-block font-weight-bold" data-scroll href="#goto-{{$letter}}">{{$letter}}</a>
			@if(! $loop->last)
			<span style="font-size: 16%; vertical-align: middle;">@fa(['icon' => 'circle', 'color' => 'grey', 'mr' => 0])</span>
			@endif
			@endforeach
		</div>
	</div>
</div>