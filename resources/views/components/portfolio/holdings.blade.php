<div class="mb-4">
	<div class="mb-2">
		@label(['text' => 'Total profit', 'color' => 'primary'])
		<div class="d-apart">
			<div>{{usd(0)}}</div>
			@include('components.portfolio.badge', ['label' => percentage(0, 0, false)])
		</div>
	</div>
	<div class="mb-2">
		@label(['text' => 'Best transaction', 'color' => 'green'])
		<div class="d-apart">
			<div>{{usd(0)}}</div>
			@include('components.portfolio.badge', ['label' => percentage(0, 0, false)])
		</div>
	</div>
	<div class="mb-2">
		@label(['text' => 'Worst transaction', 'color' => 'red'])
		<div class="d-apart">
			<div>{{usd(0)}}</div>
			@include('components.portfolio.badge', ['label' => percentage(0, 0, false)])
		</div>
	</div>
</div>