var chartInstance;

class TinyGraph
{
	run(canvas, data, color) {
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
		    	layout:{
		    		padding: {
		    			left: 10,
		    			right: 10,
		    			top: 5,
		    			bottom: 5
		    		}
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
}

class BigGraph
{
	run(canvas, data, color) {
		if (! data.prices) {
			alert('No data for this data range...');
		} else {
			this._createCustomLine();

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
			    	layout:{
			    		padding: {
			    			left: 10,
			    			right: 10,
			    			top: 5,
			    			bottom: 5
			    		}
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
			            		return currency(item[0].value, '$');
			            	},
			                label: function(item, data) {
			                	let initialPrice = data.datasets[0].data[0];
			                	let price = currency(item.value, '$');
			                	let difference = item.value - initialPrice;
			                	let isPositive = difference >= 0;
			                	let percentage = percent(difference, initialPrice) + '%';
			                	let format = $('[name="range-switch"] button.selected').data('sub') == 'year' ? 'ddd, MMMM Do, YYYY' : 'ddd, MMMM Do, h:mm a';
			                	let date = moment(parseInt(item.label)).format(format);

			                	$('#price').text(price);
			                	$('#price-date').text(date);

			                	difference = difference < 0 ? currency(difference) : '+'+currency(difference);
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
	}

	_createCustomLine() {
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
	}
}

class Graph
{
	constructor(canvas) {
		this.canvas = canvas;
	}

	draw(builder) {
		if (this.canvas.length)
			builder.run(this.canvas[0], this.canvas.data('points'), this.canvas.data('color'));
	}

	_getAxis() {
		let timestamps = [];
		let prices = [];
		let data = this.canvas.data('points');
		let current = data.pop;

		for (var i=0; i < data.length; i++) {
			timestamps.push(data[i][0]);
			prices.push(data[i][1]);
		}

		timestamps.push(current[0]);
		prices.push(current[1]);

		return {timestamps: timestamps, prices: prices};
	}
}

class GraphRange
{
	linkTo(builder) {
		$('[name="range-switch"] button').click(function() {
			let $button = $(this);
			let canvasId = $button.closest('[name="range-switch"]').data('target');

			$button.parent().children('button').disable();

			axios.get($(canvasId).data('url'), {params: {id: $(canvasId).attr('id'), range: $button.data('range')}})
				 .then(function(response) {
				 	$button.addClass('selected').siblings().removeClass('selected');

				 	chartInstance.destroy();

				 	$(canvasId).replaceWith(response.data);

				 	(new Graph($(canvasId))).draw(builder);
				 })
				 .catch(function(response) {
				 	console.log(response);
				 })
				 .then(function() {
					$button.parent().children('button').enable();
				 });
		});
	}
}

window.Graph = Graph;
window.TinyGraph = TinyGraph;
window.BigGraph = BigGraph;
window.GraphRange = GraphRange;