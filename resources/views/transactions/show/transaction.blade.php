<div class="mb-3">
  <div class="cursor-pointer p-3 d-flex d-apart shadow rounded" data-toggle="collapse" data-target="#transaction-{{$transaction->id}}">
    @include('transactions.show.fields.type')
    @include('transactions.show.fields.date')
    @include('transactions.show.fields.price')
    @include('transactions.show.fields.amount')
    @include('transactions.show.fields.fees')
    <div class="toggle-icon t-2" id="icon-{{$transaction->id}}">@fa(['icon' => 'plus', 'mr' => 0])</div>
  </div>

  <div id="transaction-{{$transaction->id}}" data-icon="#icon-{{$transaction->id}}" class="collapse" data-parent="#coin-transactions">
    <div class="row p-3">
      @include('transactions.show.details.investment')
      @include('transactions.show.details.gains')
      @include('transactions.show.details.value')
      @include('transactions.show.details.percentage')
    </div>
  </div>
</div>
