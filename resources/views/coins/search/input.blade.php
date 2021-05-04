<div class="col-12 mx-auto mb-4">
	<div class="position-relative">
		<div class="position-absolute h-100 d-flex flex-center" style="top: 1.2px; left: 12px">
			@fa(['icon' => 'search', 'color' => 'grey'])
		</div>
		<input type="text" 
			   name="search-coin" 
			   placeholder="Looking for a specific coin? Search here..." 
			   data-url="{{route('coins.search')}}"
			   class="form-control border-0 bg-light" 
			   style="padding: 1.5rem 1.5rem 1.5rem 2.5rem">
	</div>
</div>