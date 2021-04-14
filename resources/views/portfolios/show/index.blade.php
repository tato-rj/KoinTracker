@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
	@include('home.sections.summary')

	@include('home.sections.badges')

	<div class="row">
		<div class="col-12">
		  <h5 class="mb-4">My transactions</h5>
		  <div class="accordion" id="coin-transactions">
		    @foreach($portfolio->transactions()->latest()->get() as $transaction)
		      @include('transactions.show.transaction')
		    @endforeach
		  </div>
		</div>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">
$(document).ready(function() {
	(new GraphRange).linkTo(new BigGraph);
	(new Graph($('#chart'))).draw(new BigGraph);
});
</script>
@endpush