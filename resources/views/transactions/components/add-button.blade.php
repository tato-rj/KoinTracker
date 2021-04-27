<a data-target="#create-transaction-modal" 
@auth
data-toggle="modal"
@else
href="{{route('login')}}" 
@endauth
class="btn btn-{{$theme}} btn-wide {{$class ?? null}} {{$size ?? 'btn-sm-block'}}">@fa(['icon' => 'plus'])ADD A TRANSATION</a>