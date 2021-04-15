		<div class="text-center">
			<img src="{{asset('images/empty.svg')}}" style="width: 200px" class="my-4 opacity-6">
			<p class="text-muted">Looks like you haven't added any {{isset($coin) ? $coin->name . ' ' : null}}transactions yet...</p>
		</div>