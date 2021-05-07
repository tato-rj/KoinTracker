@auth
<button data-tippy-content="Add {{$name}} to your watchlist" 
		data-url="{{route('watchlist.update', ['coin_id' => $id])}}" 
		class="toggle-watchlist btn btn-raw">@fa(['fa_type' => auth()->user()->watchlist()->hasCoin($id) ? 's' : 'r', 'icon' => 'star', 'size' => 'lg', 'mr' => 0])</button>
@else
<a data-tippy-content="Add {{$name}} to your watchlist" href="{{route('login')}}" class="btn btn-raw">
	@fa(['fa_type' => 'r', 'icon' => 'star', 'size' => 'lg', 'mr' => 0])
</a>
@endauth