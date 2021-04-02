@component('components.modal', ['id' => 'create-transaction-modal', 'header' => 'New transaction'])
@slot('body')
@if(auth()->user()->hasVerifiedEmail())
<div id="add-transaction-container">
	@include('transactions.components.nav')

	<div class="tab-content">
		@include('transactions.create.buy')
		@include('transactions.create.sell')
		@include('transactions.create.transfer')
	</div>
</div>

@else
<div class="bg-light rounded p-3 mb-2">
	@include('auth.confirm-password-notice')
</div>
@endif
@endslot
@endcomponent
