@component('components.modal', ['id' => 'delete-transaction-'.$transaction->id.'-modal', 'header' => 'Delete transaction'])
@slot('body')
  Are you sure you want to delete this transaction?
  <p class="text-danger"><small>This action cannot be undone</small></p>
  <form method="POST" disable-on-submit action="{{route('portfolios.transactions.destroy', ['portfolio' => $transaction->portfolio, 'transaction' => $transaction])}}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-block btn-danger">Yes, I am sure</button>
  </form>
@endslot
@endcomponent
