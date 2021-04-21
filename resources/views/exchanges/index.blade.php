@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 mb-4 text-center">
			<h4>Where can I buy coins?</h4>
			<p class="text-muted">Here's a list of the top {{$exchanges->count()}} exchanges from around the world</p>
		</div>
		@each('exchanges.card', $exchanges, 'exchange')
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">

</script>
@endpush