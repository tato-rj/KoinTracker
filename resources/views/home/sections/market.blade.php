<div class="row">
	<div class="col-12 mb-4">
		<h4 class="m-0">How's the market today</h4>
		<p class="text-muted">Last update {{cache('market_last_updated') ? cache('market_last_updated')->diffForHumans() : 'a little while ago'}}</p>
	</div>
	@each('components.coins.card', $coins, 'coin')
</div>