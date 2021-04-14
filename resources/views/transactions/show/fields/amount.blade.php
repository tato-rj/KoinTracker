    <div class="pr-3">
      <div style="font-size: 80%; line-height: 1">@label(['color' => 'grey', 'text' => 'Amount'])</div>
      <div class="clamp-1">{{$transaction->coin_amount}} {{strtoupper($transaction->coin->short)}}</div>
    </div>