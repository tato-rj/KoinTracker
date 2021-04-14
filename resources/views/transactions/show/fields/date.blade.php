    <div class="pr-3">
      <div style="font-size: 80%; line-height: 1">@label(['color' => 'grey', 'text' => 'Date'])</div>
      <div class="d-none d-md-block"><span class="clamp-1">{{$transaction->transaction_date->format('M j, Y, g:i A')}}</span></div>
      <div class="d-md-none"><span class="clamp-1">{{$transaction->transaction_date->format('n/j/y')}}</span></div>
    </div>