@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
	<div class="row mb-4">
		<div class="col-12 mb-4 text-center">
			<h4>Watchlist</h4>
			<p class="text-muted">You are following {{auth()->user()->watchlist->count()}} {{str_plural('coins', auth()->user()->watchlist->count())}}</p>
		</div>

		<div class="col-12 t-2" id="coins-container">
			@foreach(auth()->user()->watchlist as $record)
				@include('coins.components.row', ['coin' => $record->coin(), 'animate' => true])
			@endforeach
		</div>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">
$(document).ready(function() {
	$('.coin-card').each(function() {
		let $card = $(this);

		setTimeout(function() {
			$card.delay().css('opacity', 1);
		}, $card.index() * 25);		
	});
});
</script>
@endpush