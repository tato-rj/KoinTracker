@include('transactions.forms.inputs.amount')

<div class="form-row">
	<div class="col-lg-6 col-md-6 col-12">
		@include('transactions.forms.inputs.price')
	</div>
	<div class="col-lg-6 col-md-6 col-12">
		@include('transactions.forms.inputs.fee')
	</div>
</div>

@include('transactions.forms.inputs.date', ['label' => 'When did you buy it?'])

@include('transactions.forms.inputs.comments')

@include('transactions.forms.inputs.total', ['label' => 'Total spent'])