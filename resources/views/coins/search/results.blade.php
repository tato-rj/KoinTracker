@foreach($coins as $coin)
	@include('coins.components.row', ['coin' => $coin, 'animate' => false])
@endforeach