@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
@unless(auth()->check())
@include('components.loading')
@endunless

<div class="container">
	@include('home.sections.summary')

	@include('home.sections.badges')

	@include('transactions.show.list')

	@include('home.sections.market')

	@include('exchanges.highlights')
</div>

@auth
@include('transactions.create.modal')
@endauth
@endsection

@push('js')
<script type="text/javascript">
$(document).ready(function() {
	(new GraphRange).linkTo(new BigGraph);
	(new Graph($('#chart'))).draw(new BigGraph);

	$('.coin-card').each(function() {
		let $card = $(this);

		(new Graph($card.find('canvas'))).draw(new TinyGraph);

		setTimeout(function() {
			$card.delay().css('opacity', 1);
		}, $card.index() * 75);		
	});
});
</script>

<script type="text/javascript">

</script>
@endpush