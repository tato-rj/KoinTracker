@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <h3 class="mb-4">Sign in to {{config('app.name')}}</h3>
            <form method="POST" action="{{ route('login') }}" class="mb-4">
                @csrf

                @input(['bag' => 'default', 'name' => 'email', 'placeholder' => 'Email'])
                @input(['bag' => 'default', 'name' => 'password', 'type' => 'password',  'placeholder' => 'Password'])
                @checkbox(['name' => 'remember', 'text' => 'Remember me on this computer'])

                <button type="submit" class="btn btn-primary btn-sm-block btn-wide">Sign in</button>
            </form>
            <div>
                <div class="mb-1">
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                </div>
                <div>
                    <a href="{{ route('register') }}">Don't have an account?</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection