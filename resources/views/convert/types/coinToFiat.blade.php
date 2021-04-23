<form method="GET" action="{{route('convert.coin-fiat')}}" class="col-12">
    @csrf

    <div class="mb-6">
        <div class="row align-items-center mb-2">
            @include('convert.components.coin')
            <div class="col-2 text-center">
                <h2 class="m-4 text-grey">TO</h2>
            </div>
            @include('convert.components.fiat')
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 text-center mx-auto bg-light rounded p-4">
            <input type="number" step="any" name="amount" class="form-control border-bottom rounded-0 bg-transparent mb-4" placeholder="How many coins?" style="border: 0" autocomplete="off">
            <button type="submit" class="btn btn-primary btn-block">CONVERT</button>
        </div>
    </div>
</form>