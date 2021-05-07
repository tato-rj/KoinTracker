<div class="row">
	<div class="col-12 mb-4 d-flex justify-content-between align-items-end">
		<h4 class="m-0">Top places to buy coins</h4>
		<p class="m-0" style="white-space: nowrap;"><a href="{{route('exchanges')}}">View all @fa(['icon' => 'long-arrow-alt-right', 'mr' => 0])</a></p>
	</div>

	@each('exchanges.card', $exchanges, 'exchange')
</div>