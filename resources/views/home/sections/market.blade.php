<div class="row mb-5">
	<div class="col-12 mb-4">
		<h4 class="m-0">How's the market today</h4>
		<p class="text-muted">Last update {{cache('market_last_updated') ? cache('market_last_updated')->diffForHumans() : 'a little while ago'}}</p>
	</div>
	@each('coins.components.card', $coins, 'coin')
</div>