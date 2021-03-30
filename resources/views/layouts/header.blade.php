@include('layouts.menu')
<header style="z-index: 1" class="container position-relative py-5">
	<nav class="row">
		<div class="col-12 d-flex justify-content-between align-items-start">
			<div>
				<a href="{{route('home')}}" class="link-none">
					<h2 class="m-0 font-weight-bold">TRACK<span class="opacity-6">CRYPTO</span></h2>
					<p class="m-0">Simple. Easy. Fun.</p>
				</a>
			</div>
	        <button class="navbar-toggler border-0" style="margin-top: 6px" type="button" data-toggle="fixed-panel" data-target="#menu-panel">
	          <div class="hamburger-icon"><span></span><span></span><span></span><span></span></div>
	        </button>
		</div>
	</nav>
</header>