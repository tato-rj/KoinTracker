@extends('layouts.app')

@push('head')
@endpush

@section('content')
<div class="container">
	<div class="row mb-4">
		<div class="col-lg-4 col-md-6 col-12 mb-2">
			<div class="d-apart mb-4">
				<div class="d-flex align-items-center">
					<img src="{{$coin->getIcon()}}" class="mr-2" style="width: 40px">
					<div>
						<h4 class="font-weight-bold text-uppercase m-0">{{$coin->name}}</h4>
						<p class="m-0 text-muted" style="line-height: 1; font-size: 86%">{{strtoupper($coin->short)}}</p>
					</div>
				</div>
				<div>
					<button id="toggle-watchlist" class="btn btn-raw">@fa(['fa_type' => 'r', 'icon' => 'star', 'size' => 'lg'])</button>
				</div>
			</div>
			<div class="mb-3">
				<div id="price-date" data-original="Price of {{$coin->name}} now" style="font-size: 88%" class="text-muted">Price of {{$coin->name}} now</div>
				<h1 id="price" class="m-0" data-original="{{usd($coin->price)}}" style="font-size: 3em">{{usd($coin->price)}}</h1>
				@include('components.portfolio.badge', [
					'label' => usd($coin->priceChangeToday) . ' (' . formatPercent($coin->pastDayChange, false) . ')',
					'isPositive' => $coin->priceChangeToday > 0,
					'id' => 'price-difference'])
			</div>
			@include('coin.components.info', ['class' => 'd-none d-md-block'])
		</div>
		<div class="col-lg-8 col-md-6 col-12 mb-2">
			{{-- @include('home.components.sentiment') --}}

			@include('components.chart.canvas', ['id' => 'chart', 'points' => $coin->range('24h'), 'url' => route('coins.chart', $coin)])

			@include('components.chart.range', ['target' => 'chart'])

			@include('coin.components.info', ['class' => 'd-md-none'])
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-md-6 col-12 mb-4">
			@component('components.box')
			<h5 class="border-bottom mb-2 pb-2">Learn about {{$coin->name}}</h5>
			<p style="white-space: pre-wrap;">{{$coin->description}}</p>
			@endcomponent
		</div>

		<div class="col-lg-4 col-md-6 col-12 mb-4">
			@component('components.box', ['outline' => true])
				<h5 class="border-bottom mb-2 pb-2">Market info</h5>
				<ul class="list-flat">
					<li>
						@label(['text' => 'Market cap'])
						<p class="font-weight-bold mb-2">{{usd($coin->marketCap)}}</p>
					</li>
					<li>
						@label(['text' => 'Volume (1D)'])
						<p class="font-weight-bold mb-2">{{usd($coin->totalVolume)}}</p>
					</li>
					<li>
						@label(['text' => 'Circulating supply'])
						<p class="font-weight-bold mb-2">{{$coin->supply}}</p>
					</li>
					<li>
						@label(['text' => 'Max supply'])
						<p class="font-weight-bold mb-2">{{$coin->maxSupply ?? 'Unlimited'}}</p>
					</li>
				</ul>
			@endcomponent
		</div>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">

</script>
<script type="text/javascript">

</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#toggle-watchlist').click(function() {
		let $btn = $(this);

		$btn.disable();
		$btn.find('i').toggleClass('far fas');
		$btn.enable();
	});

	$('[name="range-switch"] button').click(function() {
		let $button = $(this);
		let $canvas = $($button.closest('[name="range-switch"]').data('target'));

		$button.parent().children('button').disable();

		axios.get($canvas.data('url'), {params: {id: $canvas.attr('id'), range: $button.data('range')}})
			 .then(function(response) {
			 	$button.addClass('selected').siblings().removeClass('selected');

			 	chartInstance.destroy();

			 	$canvas.replaceWith(response.data);

			 	(new Graph($('#chart'))).draw();
			 })
			 .catch(function(response) {
			 	console.log(response);
			 })
			 .then(function() {
				$button.parent().children('button').enable();
			 });
	});

	(new Graph($('#chart'))).draw();
});
</script>
<script type="text/javascript">
var chartInstance;
Chart.defaults.LineWithLine = Chart.defaults.line;
Chart.controllers.LineWithLine = Chart.controllers.line.extend({
   draw: function(ease) {
      Chart.controllers.line.prototype.draw.call(this, ease);

      if (this.chart.tooltip._active && this.chart.tooltip._active.length) {
         var activePoint = this.chart.tooltip._active[0],
             ctx = this.chart.ctx,
             x = activePoint.tooltipPosition().x,
             topY = this.chart.legend.bottom,
             bottomY = this.chart.chartArea.bottom;

         // draw line
         ctx.save();
         ctx.beginPath();
         ctx.moveTo(x, topY);
         ctx.lineTo(x, bottomY);
         ctx.lineWidth = 2;
         ctx.strokeStyle = 'rgba(0,0,0,0.4)';
         ctx.stroke();
         ctx.restore();
      }
   }
});

function buildGraph(canvas, data, color)
{
	chartInstance = new Chart(canvas, {
	    type: 'LineWithLine',
	    data: {
	        labels: data.timestamps,
	        datasets: [{
	            data: data.prices,
	            borderColor: color,
	            borderWidth: 4,
	            borderCapStyle: 'round',
	            backgroundColor: convertHex(color,6),
				fill: false
	        }]
	    },
	    options: {
	    	legend: {
	    		display: false
	    	},
	    	tooltips: {
	    		titleFontSize: 16,
	    		titleFontFamily: "Segoe UI",
	    		mode: 'index',
	    		intersect: false,
	            custom: function(item) {
	                if (item.opacity === 0) {
	                    $('#price').text($('#price').data('original'));
	                    $('#price-date').text($('#price-date').data('original'));
	                    $('#price-difference').text($('#price-difference').data('original'))
	                    					  .removeClass('alert-red alert-green')
	                    					  .addClass($('#price-difference').data('theme'));
	                }
	                item.displayColors = false;
	            },
	            callbacks: {
	            	title: function(item, data) {
	            		return currency(item[0].value).format();
	            	},
	                label: function(item, data) {
	                	let initialPrice = data.datasets[0].data[0];
	                	let price = currency(item.value).format();
	                	let difference = item.value - initialPrice;
	                	let isPositive = difference >= 0;
	                	let percentage = percent(difference, initialPrice) + '%';
	                	let format = $('[name="range-switch"] button.selected').data('sub') == 'year' ? 'ddd, MMMM Do, YYYY' : 'ddd, MMMM Do, h:mm a';
	                	let date = moment(parseInt(item.label)).format(format);

	                	$('#price').text(price);
	                	$('#price-date').text(date);

	                	difference = difference < 0 ? currency(difference).format() : '+'+currency(difference).format();
	                	$('#price-difference').text(difference +' ('+ percentage + ')')
	                						  .removeClass(isPositive ? 'alert-red' : 'alert-green')
	                						  .addClass(isPositive ? 'alert-green' : 'alert-red');

	                	return date;

						function percent(piece, total) {
						    let percent = Math.abs(piece * 100 / total);

						    return percent.toFixed(2);
						}
	                }
	            }
	    	},
		   hover: {
		      mode: 'index',
		      intersect: false
		   },
	        elements: {
	            point:{
	                radius: 0
	            }
	        },
	        scales: {
		        xAxes: [{
		            gridLines: {
		                display:false
		            },
	                ticks: {
	                    display: false
	                }
		        }],
		        yAxes: [{
		            gridLines: {
		                display:false
		            },
	                ticks: {
	                    display: false
	                }
		        }]
	        }
	    }
	});
}
</script>
<script type="text/javascript">
class Graph
{
	constructor(canvas) {
		this.canvas = canvas;
	}

	draw() {
		buildGraph(this.canvas[0], this._getAxis(), this.canvas.data('color'));
	}

	_getAxis() {
		let timestamps = [];
		let prices = [];
		let data = this.canvas.data('points');

		for (var i=0; i < data.length; i++) {
			if (data.length > 20) {
				if (i % 10 === 0) {
					timestamps.push(data[i][0]);
					prices.push(data[i][1]);
				}
			} else {
				timestamps.push(data[i][0]);
				prices.push(data[i][1]);
			}
		}

		return {timestamps: timestamps, prices: prices};
	}
}
window.Graph = Graph;
</script>
@endpush