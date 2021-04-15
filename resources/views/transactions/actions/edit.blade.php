@component('components.modal', ['id' => 'edit-transaction-'.$transaction->id.'-modal', 'header' => 'Edit transaction'])
@slot('body')
<form method="POST" action="{{route('portfolios.transactions.update', ['portfolio' => $transaction->portfolio, 'transaction' => $transaction])}}" disable-on-submit>
	@csrf
	@method('PATCH')

	@include('transactions.forms.' . $transaction->type)

	<button type="submit" class="btn btn-block btn-primary">Update my transaction</button>
</form>
@endslot
@endcomponent
