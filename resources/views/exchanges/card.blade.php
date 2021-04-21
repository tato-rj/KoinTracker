<div class="col-lg-3 col-md-3 col-6 mb-4">
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