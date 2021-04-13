@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
	@include('home.sections.summary')

	@include('home.sections.badges')

	@include('home.sections.market')
</div>
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
@endpush