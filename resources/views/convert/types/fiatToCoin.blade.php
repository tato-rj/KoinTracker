<form class="col-lg-6 col-md-8 col-12 mx-auto convert-container" style="display: none;">
    <div class="mb-4 pb-4 border-bottom">
        <div class="row align-items-center mb-2">
            @include('convert.components.fiat')
            <div class="col-2 text-center">
                <h2 class="m-0 text-grey">TO</h2>
            </div>
            @include('convert.components.coin')
        </div>
    </div>
    <div class="text-center">
        <div class="convert-result"></div>    
        <div class="d-flex align-items-center mb-4">
            @foreach($fiats as $fiat)
                <div class="text-muted noselect fiat-logo fiat-{{$fiat->id}}" style="display: {{$fiat->is('usd') ? 'block' : 'none'}}">{{$fiat->getCurrency()->getSymbol()}}</div>
            @endforeach
            <input required type="text" name="amount" style="padding: 1.85rem 1.25rem" class="money-field form-control bg-light ml-2" placeholder="How much money?" style="border: 0;" autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary btn-block" data-url="{{route('convert.fiat-coin')}}">CONVERT</button>
    </div>
</form>