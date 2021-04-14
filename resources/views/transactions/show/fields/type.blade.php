<div class="pr-3 d-flex align-items-center">
  <div>
    @include('coins.components.logo', ['mr' => 3, 'coin' => $transaction->coin])
  </div>
  <div>
    <div style="font-size: 80%; line-height: 1">@label(['color' => 'grey', 'text' => 'Type'])</div>
    <div class="clamp-1">{{ucfirst($transaction->type)}}</div>
  </div>
</div>