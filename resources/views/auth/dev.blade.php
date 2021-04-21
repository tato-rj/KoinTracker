@extends('layouts.raw')

@push('head')
<style type="text/css">
</style>
@endpush

@section('content')
<div class="container">
    <div class="row flex-center h-100vh">
        <div class="col-lg-4 col-md-4 col-8 mx-auto">
            <p><strong>KoinTracker</strong> will go live soon!</p>
            <p class="text-muted">If you're an admin, type your password below to get in.</p>
            <form method="POST" action="{{route('dev.admin')}}" disable-on-submit>
                @csrf
                @input([
                    'bag' => 'default',
                    'name' => 'pass',
                    'type' => 'password',
                    'placeholder' => 'Password'])
                    <button type="submit" class="btn btn-block btn-primary">GO TO THE WEBSITE</button>
            </form>
        </div>
    </div>
</div>
@endsection