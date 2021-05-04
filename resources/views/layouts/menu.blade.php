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
				<div class="nav-item my-2">
					<a href="{{route('home')}}" class="nav-link t-2 rounded px-4 py-2 font-lg text-dark link-none font-weight-bold">@fa(['icon' => 'home', 'classes' => 'opacity-6'])HOME</a>
				</div>
				<div class="nav-item my-2">
					<a href="{{route('coins.index')}}" class="nav-link t-2 rounded px-4 py-2 font-lg text-dark link-none font-weight-bold">@fa(['icon' => 'coins', 'classes' => 'opacity-6'])COINS</a>
				</div>
				<div class="nav-item my-2">
					<a href="{{route('exchanges')}}" class="nav-link t-2 rounded px-4 py-2 font-lg text-dark link-none font-weight-bold">@fa(['icon' => 'university', 'classes' => 'opacity-6'])EXCHANGES</a>
				</div>
				<div class="nav-item my-2">
					<a href="{{route('convert.index')}}" class="nav-link t-2 rounded px-4 py-2 font-lg text-dark link-none font-weight-bold">@fa(['icon' => 'random', 'classes' => 'opacity-6'])CONVERT</a>
				</div>
				<div class="nav-item my-2">
					<a href="{{route('glossary')}}" class="nav-link t-2 rounded px-4 py-2 font-lg text-dark link-none font-weight-bold">@fa(['icon' => 'book-open', 'classes' => 'opacity-6'])GLOSSARY</a>
				</div>
				<div class="dropdown-divider"></div>
				<div class="nav-item my-2">
					<a href="{{route('home')}}" class="nav-link t-2 rounded px-4 py-2 font-lg text-dark link-none font-weight-bold">SETTINGS</a>
				</div>
				<div class="nav-item my-2">
					<a href="{{route('home')}}" class="nav-link t-2 rounded px-4 py-2 font-lg text-dark link-none font-weight-bold">HELP</a>
				</div>
				@auth
					<div class="nav-item my-2">
						<a class="nav-link t-2 rounded px-4 py-2 font-lg text-dark link-none font-weight-bold" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>LOGOUT
						</a>
					</div>
				@else
					<div class="nav-item my-2">
						<a href="{{route('register')}}" class="btn btn-block btn-primary">GET STARTED</a>
					</div>
					<div class="nav-item my-2">
						<a href="{{route('login')}}" class="btn btn-block btn-outline-primary">SIGN IN</a>
					</div>
				@endauth
			</div>
		</div>
	</div>
</div>