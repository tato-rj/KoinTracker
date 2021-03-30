@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div id="screen-overlay">
	<div></div>
</div>
<div id="darken-overlay" class="opacity-2 position-fixed w-100 h-100" style="top: 0; left: 0; z-index: 0; background: black; display: none;"></div>
<div class="container">
	<div class="row mb-4">
		<div class="col-lg-4 col-md-6 col-12 text-white mb-2">
			@include('home.components.name')
			@include('home.components.price')
			@include('home.components.info', ['class' => 'd-none d-md-block'])
		</div>
		<div class="col-lg-8 col-md-6 col-12 mb-2">
			@include('home.components.sentiment')

			@include('home.components.chart')

			@include('home.components.range')

			@include('home.components.info', ['class' => 'd-md-none'])
		</div>
	</div>

	<div class="row mb-6">
		@include('home.components.portfolio')
	</div>

	<div class="row mb-6">
		@include('home.components.description')
	</div>
</div>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script type="text/javascript">
var coin = $('body').data('coin');

$(document).ready(function() {
	$('button[data-range="24h"]').click();
});

$('[name="range-switch"] button').click(function() {
	let button = this;
	let api = new Api(this);

	$(button).parent().children('button').disable();
	
	api.coin(function(data, button) {
	 	(new Frontend(button, data))
		 	.updateMenu()
		 	.setRange()
		 	.setEmoji()
		 	.setInfo()
		 	.setDescription()
		 	.setIcon()
		 	.setDate()
		 	.setPrice()
		 	.setBackground();
	}, coin);

	api.range(function(data) {
		$(button).siblings().enable();
		(new Graph).draw(data);
	}, coin);
});
</script>
<script type="text/javascript">
var ctx = document.getElementById('graph').getContext('2d');
var chart;

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
         ctx.strokeStyle = 'rgba(255,255,255,0.4)';
         ctx.stroke();
         ctx.restore();
      }
   }
});

function buildGraph(data)
{
	let labels = [];
	
	$('#graph').parent().removeClass('pulse');

	if (chart != null)
		chart.destroy();

	chart = new Chart(ctx, {
	    type: 'LineWithLine',
	    data: {
	        labels: data.timestamps,
	        datasets: [{
	            data: data.prices,
	            borderColor: 'white',
	            borderWidth: 4,
	            borderCapStyle: 'round',
				fill: false
	        }]
	    },
	    options: {
	    	legend: {
	    		display: false
	    	},
	    	tooltips: {
	    		enabled: false,
	    		mode: 'index',
	    		intersect: false,
	            custom: function(item) {
	                if (item.opacity === 0) {
	                	$('#darken-overlay').fadeOut();
	                    $('#price').text(currency($('#price').data('original')).format());
	                    $('#price-date').text($('#price-date').data('original'));
	                    $('#price-difference').css('opacity', 0);
	                }
	            },
	            callbacks: {
	                label: function(item, data) {
	                	let initialPrice = data.datasets[0].data[0];
	                	let price = currency(item.value).format();
	                	let difference = item.value - initialPrice;
	                	let percentage = percent(difference, initialPrice) + '%';
	                	let format = $('[name="range-switch"] button.selected').data('sub') == 'year' ? 'ddd, MMMM Do, YYYY' : 'ddd, MMMM Do, h:mm a';
	                	let date = moment(parseInt(item.label)).format(format);

	                	$('#darken-overlay').fadeIn();
	                	$('#price').text(price);
	                	$('#price-date').text(date);

	                	difference = difference < 0 ? currency(difference).format() : '+'+currency(difference).format();
	                	$('#price-difference').text(difference +' ('+ percentage + ')').css('opacity', 1);

						function percent(piece, total) {
						    let percent = Math.abs(piece * 100 / total);

						    return percent.toFixed(2);
						}
	                }
	            }
	    	},
	    	onHover: function() {
	    		// console.log('up');
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
	draw(data) {
		buildGraph(this._filter(data));
	}

	_filter(data) {
		let timestamps = [];
		let prices = [];
		let dataLength = data.prices.length;

		for (var i=0; i < dataLength; i++) {
			if (dataLength > 20) {
				if (i % 10 === 0) {
					timestamps.push(data.prices[i][0]);
					prices.push(data.prices[i][1]);
				}
			} else {
				timestamps.push(data.prices[i][0]);
				prices.push(data.prices[i][1]);
			}
		}

		return {timestamps: timestamps, prices: prices};
	}
}

class Frontend
{
    constructor(button, data) {
    	this.$button = $(button);
        this.data = data;
        this.emojis = ['far fa-sad-cry', 'far fa-sad-tear', 'far fa-meh', 'far fa-smile', 'far fa-laugh-beam'];
        this.themes = ['bg-most-bearish', 'bg-bearish', 'bg-medium', 'bg-bullish', 'bg-bullish'];
    }

    setRange() {
    	this.range = this.$button.data('range');
    	this.score = this._score();

    	this._displayRangeLabel(this.$button.data('label'));
    	this._displayRangePercentage();

    	return this;
    }

    setDate() {
    	let date = this._date();

    	$('#price-date').text(date).attr('data-original', date);
		
		return this;
    }

    setPrice() {
    	$('#price').text(this._price()).attr('data-original', this._price(false));
    	$('.coin-name').text(this.data.name);
		
		return this;
    }

    setEmoji() {
    	let emoji = this.emojis[this.score];

    	$('#price-emoji').removeClass().addClass(emoji).show();

    	return this;
    }

    setDescription() {
    	$('#coin-description').text(stripTags(this.data.description.en));
    	$('#coin-website').text(this.data.links.homepage[0]).attr('href', this.data.links.homepage[0]);

    	return this;
    }

    setInfo() {
    	let max = this.data.market_data.max_supply == null ? 
    				'UNLIMITED' : 
    				numeral(this.data.market_data.max_supply).format('0.0a').toUpperCase() + ' ' + this.data.symbol.toUpperCase();

    	$('[name="coin-info"] .market-cap').text(numeral(this.data.market_data.market_cap.usd).format('($0.00a)').toUpperCase());
    	$('[name="coin-info"] .volume').text(numeral(this.data.market_data.total_volume.usd).format('($0.00a)').toUpperCase());
    	$('[name="coin-info"] .supply').text(numeral(this.data.market_data.circulating_supply).format('0.0a').toUpperCase() + ' ' + this.data.symbol.toUpperCase());
    	$('[name="coin-info"] .max-supply').text(max);

    	return this;
    }

    setIcon() {
    	let filename = this.data.symbol +'.svg';

    	$('.coin-icon').each(function() {
    		$(this).attr('src', $(this).data('folder') + filename);
    	});

    	return this;
    }

    setBackground() {
	 	$('#screen-overlay > div').removeClass().addClass(this._theme()).fadeIn('fast', function() {
	 		$(this).parent().fadeOut();
	 	});

    	$('#app').removeClass().addClass(this._theme());

    	return this;
    }

    updateMenu() {
		this.$button.addClass('selected').siblings('button').removeClass('selected');

    	return this;
    }

    _displayRangePercentage() {
    	let percentage = this._priceChange();
    	let label = (percentage > 0) ? 
    		'+' + percentage.toFixed(2) + '%' : 
    		percentage.toFixed(2) + '%';

    	$('#price-change').text(label);
    }

    _displayRangeLabel(label) {
    	$('#range-label').text(label);
    }

    _score() {
    	let percentage = this._priceChange();

		if (percentage < -1)
			return 0;

		if (percentage < 0)
			return 1;

		if (percentage < 1)
			return 2;

		if (percentage < 4)
			return 3;

		return 4;
    }

    _priceChange() {
		let key = "price_change_percentage_" + this.range + "_in_currency";

		return this.data.market_data[key]['usd'];
    }

    _price(formatted = true) {
    	if (formatted)
	    	return currency(this.data.market_data.current_price.usd).format();

	    return this.data.market_data.current_price.usd;
    }

    _date() {
    	return moment(this.data.last_updated).format('ddd, MMMM Do, h:mm a');
    }

    _theme() {
    	return this.themes[this.score];
    }
}

class Api
{
	constructor(button) {
		this.button = button;
	}

    coin(callback, coin = 'bitcoin') {
    	let obj = this;

		axios.get("https://api.coingecko.com/api/v3/coins/"+coin+"?localization=false")
			 .then(function(response) {
			 	console.log(response.data);
			 	callback(response.data, obj.button);
			 })
			 .catch(function (response) {
			 	console.log(response);
			 });
    }

    range(callback, coin = 'bitcoin') {
		let start = moment().subtract(1, $(this.button).data('sub')).unix();
		let end = moment().unix();

		$('#graph').parent().addClass('pulse');

		axios.get("https://api.coingecko.com/api/v3/coins/"+coin+"/market_chart/range", {params: {vs_currency: 'usd', from: start, to: end}})
		.then(function(response) {
			// console.log(response.data);
			callback(response.data);
		})
		.catch(function (response) {
			console.log(response);
		});
    }
}

window.Api = Api;
window.Frontend = Frontend;
window.Graph = Graph;
</script>
<script type="text/javascript">

</script>
<script type="text/javascript">
tippy('[data-tippy-content]', {
	allowHTML: true,
});
</script>
@endpush