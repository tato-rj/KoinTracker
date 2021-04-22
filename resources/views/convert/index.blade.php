@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12">
            <form method="GET" action="{{route('convert.coin-fiat')}}">
                @csrf
                <div class="form-row">
                    <select class="form-control col" name="coin">
                        @foreach(\App\Models\Coin::all() as $coin)
                        <option value="{{$coin->id}}">{{$coin->name}}</option>
                        @endforeach
                    </select>
                    <select class="form-control col" name="fiat">
                        @foreach(\App\Models\Fiat::all() as $fiat)
                        <option value="{{$fiat->id}}">{{$fiat->currency}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">CONVERT</button>
            </form>
		</div>

        <div class="col-12">
            <form method="GET" action="{{route('convert.fiat-coin')}}">
                @csrf
                <div class="form-row">
                    <select class="form-control col" name="fiat">
                        @foreach(\App\Models\Fiat::all() as $fiat)
                        <option value="{{$fiat->id}}">{{$fiat->currency}}</option>
                        @endforeach
                    </select>
                    <select class="form-control col" name="coin">
                        @foreach(\App\Models\Coin::all() as $coin)
                        <option value="{{$coin->id}}">{{$coin->name}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">CONVERT</button>
            </form>
        </div>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">
    // axios.get('https://openexchangerates.org/api/latest.json?app_id=7d47bb4c49d94ea3b3744a3cc29c0789')
    // 	 .then(function(response) {
    // 	 	console.log(response.data);
    //     	console.log(response.data.rates);
    //     	console.log(response.data.base);
    // 	 })
    // 	 .catch(function(error) {
    // 	 	console.log(error);
    // 	 });
</script>
@endpush