@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')

@endsection

@push('js')
<script type="text/javascript">
    // Load exchange rates data via AJAX:
    axios.get('https://openexchangerates.org/api/latest.json?app_id=7d47bb4c49d94ea3b3744a3cc29c0789')
    	 .then(function(response) {
    	 	console.log(response.data);
        	console.log(response.data.rates);
        	console.log(response.data.base);
    	 })
    	 .catch(function(error) {
    	 	console.log(error);
    	 });
</script>
@endpush