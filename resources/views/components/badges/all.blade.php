@php($points = 0)
<p class="text-grey text-muted">Earn badges as you add transactions and achieve milestones in your investments!</p>
<div class="d-flex justify-content-center mb-4 flex-wrap" id="user-badges">
	@foreach($badges as $badge)
		@include('components.badges.badge')
		@auth
			@php($points += auth()->user()->hasBadge($badge) ? $badge->points : 0)
		@endauth
	@endforeach
</div>
@include('components.badges.bar')