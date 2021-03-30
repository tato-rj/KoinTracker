@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
@endpush

@section('content')
<div class="container">
	<div class="row mb-5">
		<div class="col-lg-4 col-md-6 col-12">
			<div class="mb-3">
				@label(['text' => 'Portfolio balance', 'icon' => 'piggy-bank'])
				<h1>{{usd(0)}}</h1>
				@include('components.portfolio.badge', ['label' => usd(0) . ' (24h)'])
			</div>
			@include('components.portfolio.holdings')

		</div>
		<div class="col-lg-8 col-md-6 col-12">
		    <img src="{{asset('images/graph-bg.jpg')}}" class="w-100">
			<div class="w-100 h-100 d-flex flex-center position-absolute" style="top: 0; left: 0">
				<div class="text-center">
					<p>Start tracking your investments now</p>
					<button class="btn btn-primary btn-wide">@fa(['icon' => 'plus'])ADD MY FIRST TRANSATION</button>
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-12 text-center">
			<div class="">
				@include('components.badges.all')
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 mb-4">
			<h4 class="m-0">How's the market today</h4>
			<p class="text-muted">Last update {{cache('market_last_updated') ? cache('market_last_updated')->diffForHumans() : 'a little while ago'}}</p>
		</div>
		@each('components.coins.card', $coins, 'coin')
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">
$(document).ready(function() {
	$('.coin-card').each(function() {
		let $card = $(this);

		(new Graph($card.find('canvas'))).draw();

		setTimeout(function() {
			$card.delay().css('opacity', 1);
		}, $card.index() * 75);		
	});
});
</script>
<script type="text/javascript">

function buildGraph(canvas, data, color)
{
	new Chart(canvas, {
	    type: 'line',
	    responsive:true,
	    maintainAspectRatio: false,
	    data: {
	        labels: data.timestamps,
	        datasets: [{
	            data: data.prices,
	            borderColor: color,
	            borderWidth: 3,
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
	    		enabled: false,
	    	},
	        elements: {
	            point:{
	                radius: 0
	            }
	        },
	        scales: {
		        xAxes: [{
	                display:false
		        }],
		        yAxes: [{
	                display:false
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

// class Frontend
// {
//     constructor(button, data) {
//     	this.$button = $(button);
//         this.data = data;
//         this.emojis = ['far fa-sad-cry', 'far fa-sad-tear', 'far fa-meh', 'far fa-smile', 'far fa-laugh-beam'];
//         this.themes = ['bg-most-bearish', 'bg-bearish', 'bg-medium', 'bg-bullish', 'bg-bullish'];
//     }

//     setRange() {
//     	this.range = this.$button.data('range');
//     	this.score = this._score();

//     	this._displayRangeLabel(this.$button.data('label'));
//     	this._displayRangePercentage();

//     	return this;
//     }

//     setDate() {
//     	let date = this._date();

//     	$('#price-date').text(date).attr('data-original', date);
		
// 		return this;
//     }

//     setPrice() {
//     	$('#price').text(this._price()).attr('data-original', this._price(false));
//     	$('.coin-name').text(this.data.name);
		
// 		return this;
//     }

//     setEmoji() {
//     	let emoji = this.emojis[this.score];

//     	$('#price-emoji').removeClass().addClass(emoji).show();

//     	return this;
//     }

//     setDescription() {
//     	$('#coin-description').text(stripTags(this.data.description.en));
//     	$('#coin-website').text(this.data.links.homepage[0]).attr('href', this.data.links.homepage[0]);

//     	return this;
//     }

//     setInfo() {
//     	let max = this.data.market_data.max_supply == null ? 
//     				'UNLIMITED' : 
//     				numeral(this.data.market_data.max_supply).format('0.0a').toUpperCase() + ' ' + this.data.symbol.toUpperCase();

//     	$('[name="coin-info"] .market-cap').text(numeral(this.data.market_data.market_cap.usd).format('($0.00a)').toUpperCase());
//     	$('[name="coin-info"] .volume').text(numeral(this.data.market_data.total_volume.usd).format('($0.00a)').toUpperCase());
//     	$('[name="coin-info"] .supply').text(numeral(this.data.market_data.circulating_supply).format('0.0a').toUpperCase() + ' ' + this.data.symbol.toUpperCase());
//     	$('[name="coin-info"] .max-supply').text(max);

//     	return this;
//     }

//     setIcon() {
//     	let filename = this.data.symbol +'.svg';

//     	$('.coin-icon').each(function() {
//     		$(this).attr('src', $(this).data('folder') + filename);
//     	});

//     	return this;
//     }

//     setBackground() {
// 	 	$('#screen-overlay > div').removeClass().addClass(this._theme()).fadeIn('fast', function() {
// 	 		$(this).parent().fadeOut();
// 	 	});

//     	$('#app').removeClass().addClass(this._theme());

//     	return this;
//     }

//     updateMenu() {
// 		this.$button.addClass('selected').siblings('button').removeClass('selected');

//     	return this;
//     }

//     _displayRangePercentage() {
//     	let percentage = this._priceChange();
//     	let label = (percentage > 0) ? 
//     		'+' + percentage.toFixed(2) + '%' : 
//     		percentage.toFixed(2) + '%';

//     	$('#price-change').text(label);
//     }

//     _displayRangeLabel(label) {
//     	$('#range-label').text(label);
//     }

//     _score() {
//     	let percentage = this._priceChange();

// 		if (percentage < -1)
// 			return 0;

// 		if (percentage < 0)
// 			return 1;

// 		if (percentage < 1)
// 			return 2;

// 		if (percentage < 4)
// 			return 3;

// 		return 4;
//     }

//     _priceChange() {
// 		let key = "price_change_percentage_" + this.range + "_in_currency";

// 		return this.data.market_data[key]['usd'];
//     }

//     _price(formatted = true) {
//     	if (formatted)
// 	    	return currency(this.data.market_data.current_price.usd).format();

// 	    return this.data.market_data.current_price.usd;
//     }

//     _date() {
//     	return moment(this.data.last_updated).format('ddd, MMMM Do, h:mm a');
//     }

//     _theme() {
//     	return this.themes[this.score];
//     }
// }

// window.Frontend = Frontend;
window.Graph = Graph;
</script>
@endpush