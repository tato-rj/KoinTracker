@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <h4>Forgot your password?</h4>
            <p>No problem! Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
    
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                @input(['bag' => 'default', 'name' => 'email', 'placeholder' => 'Email'])

                <button type="submit" class="btn btn-primary btn-sm-block btn-wide">Email Password Reset Link</button>
            </form>
        </div>
    </div>
</div>
@endsection
