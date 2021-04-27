@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <h3 class="mb-4">Create your account</h3>
            <form method="POST" action="{{ route('register') }}" class="mb-4" disable-on-submit>
                @csrf

                @input(['bag' => 'default', 'name' => 'first_name', 'placeholder' => 'First name'])
                @input(['bag' => 'default', 'name' => 'last_name', 'placeholder' => 'Last name'])
                @input(['bag' => 'default', 'name' => 'email', 'placeholder' => 'Email'])
                @input(['bag' => 'default', 'name' => 'password', 'type' => 'password',  'placeholder' => 'Password'])
                @input(['bag' => 'default', 'name' => 'password_confirmation', 'type' => 'password',  'placeholder' => 'Confirm your password'])

                <button type="submit" class="btn btn-primary btn-sm-block btn-wide">Create account</button>
            </form>
            <div>
                Already registered? <a href="{{ route('login') }}">Sign in</a>
            </div>
        </div>
    </div>
</div>
@endsection
