<form method="GET" action="{{route('convert.fiat-coin')}}" class="col-12" style="display: none;">
    @csrf

    <div class="mb-6">
        <div class="row align-items-center mb-2">
            @include('convert.components.fiat')
            <div class="col-2 text-center">
                <h2 class="m-4 text-grey">TO</h2>
            </div>
            @include('convert.components.coin')
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 text-center mx-auto bg-light rounded p-4">
            <div class="d-flex align-items-center mb-4">
                @foreach($fiats as $fiat)
                    <div class="text-muted noselect fiat-logo fiat-{{$fiat->id}}" style="display: {{$fiat->is('usd') ? 'block' : 'none'}}">{{$fiat->getCurrency()->getSymbol()}}</div>
                @endforeach
                <input type="text" name="amount" class="money-field form-control border-bottom rounded-0 bg-transparent" placeholder="How much money?" style="border: 0;" autocomplete="off">
                
            </div>
            <button type="submit" class="btn btn-primary btn-block">CONVERT</button>
        </div>
    </div>
</form>