<div class="position-fixed w-100 h-100vh fixed-panel" id="menu-panel" style="z-index: 100000000; top: 0; left: 0; display: none;">
	<div class="w-100 h-100 overlay-darkest panel-overlay"></div>

	<div class="bg-white position-absolute h-100 panel-content pl-4 py-4 pr-6" style="right: -100%; transition: .4s;">
		<div class="panel-header mb-3">
			<button type="button" class="btn btn-raw p-0" data-dismiss="fixed-panel" aria-label="Close">
				@fa(['icon' => 'times', 'size' => 'lg', 'mr' => 0, 'color' => 'black'])
			</button>
		</div>

		<div class="panel-body">
			<div class="list-group navbar-nav">
				<div class="nav-item">
					<a href="{{route('home')}}" class="nav-link t-2 rounded px-4 py-3 font-lg text-dark link-none font-weight-bold">@fa(['icon' => 'home', 'classes' => 'opacity-6'])HOME</a>
				</div>
				<div class="nav-item">
					<a href="{{route('home')}}" class="nav-link t-2 rounded px-4 py-3 font-lg text-dark link-none font-weight-bold">@fa(['icon' => 'chart-line', 'classes' => 'opacity-6'])MY PORTFOLIO</a>
				</div>
				<div class="nav-item">
					<a href="{{route('home')}}" class="nav-link t-2 rounded px-4 py-3 font-lg text-dark link-none font-weight-bold">@fa(['icon' => 'eye', 'classes' => 'opacity-6'])WATCHLIST</a>
				</div>
				@auth
					<div class="dropdown-divider"></div>
					<div class="nav-item">
						<a href="{{route('home')}}" class="nav-link t-2 rounded px-4 py-3 font-lg text-dark link-none font-weight-bold">SETTINGS</a>
					</div>
					<div class="nav-item">
						<a href="{{route('home')}}" class="nav-link t-2 rounded px-4 py-3 font-lg text-dark link-none font-weight-bold">HELP</a>
					</div>
				@else
					<div class="nav-item my-2">
						<a href="{{route('home')}}" class="btn btn-block btn-primary">GET STARTED</a>
					</div>
					<div class="nav-item">
						<a href="{{route('home')}}" class="btn btn-block btn-outline-primary">SIGN IN</a>
					</div>
				@endauth
			</div>
		</div>
	</div>
</div>