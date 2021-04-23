@if(auth()->check() && ! auth()->user()->hasVerifiedEmail())
<div class="alert-warning p-2 text-center">
	@fa(['icon' => 'envelope'])<strong>Thanks for signing up!</strong>
	@include('auth.confirm-password-notice')
</div>
@endif

@include('layouts.menu')

<header style="z-index: 1" class="container position-relative py-5">
	<nav class="row">
		<div class="col-12 d-flex justify-content-between align-items-start">
			<div>
				<a href="{{route('home')}}" class="link-none">
					<div class="d-flex align-items-center">
						@icon
						<h2 class="mb-0 text-primary font-weight-bold" style="margin-left: 2px">OIN<span class="opacity-6">TRACKER</span></h2>
					</div>
					<p class="m-0">Simple. Easy. Fun.</p>
				</a>
			</div>
	        <button class="navbar-toggler border-0" style="margin-top: 6px" type="button" data-toggle="fixed-panel" data-target="#menu-panel">
	          <div class="hamburger-icon"><span></span><span></span><span></span><span></span></div>
	        </button>
		</div>
	</nav>
</header>