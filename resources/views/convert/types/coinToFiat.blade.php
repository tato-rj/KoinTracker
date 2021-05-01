<form class="col-lg-6 col-md-8 col-12 mx-auto convert-container">
    <div class="mb-4 pb-4 border-bottom">
        <div class="row align-items-center mb-2">
            @include('convert.components.coin')
            <div class="col-2 text-center">
                <h2 class="m-4 text-grey">TO</h2>
            </div>
            @include('convert.components.fiat')
        </div>
    </div>
    <div class="text-center">
        <div class="convert-result"></div>
        <input required type="number" step="any" name="amount" style="padding: 1.85rem 1.25rem" class="form-control bg-light mb-4" placeholder="How many coins?" style="border: 0" autocomplete="off">
        <button type="submit" class="btn btn-primary btn-block" data-url="{{route('convert.coin-fiat')}}">CONVERT</button>
    </div>
</form>