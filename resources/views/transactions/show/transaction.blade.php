<div class="mb-3 portfolio-transaction w-100 bg-white" 
            data-coin="{{$transaction->coin->name}}"
            data-type="{{$transaction->type}}"
            data-date="{{$transaction->transaction_date->timestamp}}"
            data-price="{{$transaction->price_per_coin->getValue()}}"
            data-amount="{{$transaction->coin_amount}}"
            data-fees="{{$transaction->fee->getValue()}}"
            data-gains="{{$transaction->gains(true)}}">
  <div class="cursor-pointer p-3 d-flex d-apart shadow rounded" data-toggle="collapse" data-target="#transaction-{{$transaction->id}}">
    @include('transactions.show.fields.type')
    @include('transactions.show.fields.date')
    @include('transactions.show.fields.price')
    @include('transactions.show.fields.amount')
    @include('transactions.show.fields.fees')
    <div class="toggle-icon t-2" id="icon-{{$transaction->id}}">@fa(['icon' => 'plus', 'mr' => 0])</div>
  </div>

  <div id="transaction-{{$transaction->id}}" data-icon="#icon-{{$transaction->id}}" class="collapse" data-parent="#coin-transactions">
    <div class="d-flex flex-wrap flex-center">
      <div class="flex-grow row px-3">
        @include('transactions.show.details.' . $transaction->type . '.investment')
        @include('transactions.show.details.' . $transaction->type . '.gains')
        @include('transactions.show.details.' . $transaction->type . '.value')
        @include('transactions.show.details.' . $transaction->type . '.percentage')
      </div>
      <div>
        <button title="Edit" class="py-0 d-lg-block d-md-block d-inline-block btn btn-raw" 
          data-toggle="modal" data-target="#edit-transaction-{{$transaction->id}}-modal">
          @fa(['icon' => 'edit', 'mr' => 0, 'color' => 'grey'])</button>
        <button title="Delete" class="py-0 d-lg-block d-md-block d-inline-block btn btn-raw" 
          data-toggle="modal" data-target="#delete-transaction-{{$transaction->id}}-modal">
          @fa(['icon' => 'trash-alt', 'mr' => 0, 'color' => 'grey'])</button>
      </div>
    </div>
  </div>
</div>

@include('transactions.actions.edit')
@include('transactions.actions.delete')