<div class="row my-5">
	<div class="col-12 mb-4 d-flex justify-content-between align-items-end">
		<div>
			<h4 class="m-0">How's the market today</h4>
			<p class="text-muted m-0">Last update {{cache('market_last_updated') ? cache('market_last_updated')->diffForHumans() : 'a little while ago'}}</p>
		</div>
		<p class="m-0" style="white-space: nowrap;"><a href="{{route('coins.index')}}">More coins @fa(['icon' => 'long-arrow-alt-right', 'mr' => 0])</a></p>
	</div>
	@each('coins.components.card', app()->coins, 'coin')
</div>