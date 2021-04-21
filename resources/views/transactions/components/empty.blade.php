		<div class="text-center my-5">
			<h1 class="text-grey opacity-6" style="font-size: 3.4rem">@fa(['icon' => 'box-open', 'mr' => 0])</h1>
			{{-- <img src="{{asset('images/empty.svg')}}" style="width: 200px" class="my-4 opacity-6"> --}}
			<p class="text-muted">You haven't added any {{isset($coin) ? $coin->name . ' ' : null}}transactions yet...</p>
		</div>