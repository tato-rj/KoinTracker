<div class="row">
	<div class="col-12 mb-4">
		<h4 class="m-0">Top places to buy coins</h4>
	</div>
	@foreach($exchanges as $exchange)
	<div class="col-lg-3 col-md-6 col-12 mb-4">
		<a href="{{$exchange->url}}" class="link-none" target="_blank">
			<div class="d-flex align-items-center">
				<img src="{{$exchange->icon}}" class=" mr-2" style="width: 30px; height: 30px; border-radius: .25rem">
				<div>
					<div style="line-height: 1; font-size: 80%" class="text-muted">{{$exchange->country}}</div>
					<h6 class="m-0 font-weight-bold">{{$exchange->name}}</h6>
				</div>
			</div>
		</a>
	</div>
	@endforeach
</div>