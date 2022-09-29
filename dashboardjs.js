var stars = [135850, 52122, 148825, 16939, 9763];
var frameworks = ['React', 'Angular', 'Vue', 'Hyperapp', 'Omi'];
var ctx = document.getElementById('myChart');

var myChart = new Chart(ctx, {
	type: 'bar',
	data: {
		labels: frameworks,
		datasets: [{
			label: 'Popular JavaScript Frameworks',
			data: stars,
			backgroundColor: [
				"rgba(255, 99, 132, 0.2)",
				"rgba(54, 162, 235, 0.2)",
				"rgba(255, 206, 86, 0.2)",
				"rgba(75, 192, 192, 0.2)",
				"rgba(153, 102, 255, 0.2)"
			],
			borderColor: [
				"rgba(255, 99, 132, 1)",
				"rgba(54, 162, 235, 1)",
				"rgba(255, 206, 86, 1)",
				"rgba(75, 192, 192, 1)",
				"rgba(153, 102, 255, 1)",
			],
			borderWidth: 1
		}]
	},
	options: {
		title: {
			display: true,
			text: "Product Sales Report"
		},

		maintainAspectRatio: false,
		responsive: true
	}
}
)

var Chart2 = document.getElementById("ChartNo2").getContext("2d");
var data = {
	type: "horizontalBar",
	data: {
		labels: ['a', 'b', 'c', 'd'],
		datasets: [{
			label: 'product sales',
			data: [1, 3, 5, 4],
			backgroundColor: ['tomato', 'green', 'blue', 'cyan'],
			borderWidth: 1,
			borderColor: 'gray',
			hoverBorderColor: 'black'

		}]
	},
	options: {
		title: {
			display: true,
			text: 'Product Sales Report'
		},
		legend: {
			display: false,
		},
		scales: {
			xAxes: [{
				display: true,
				ticks: {
					beginAtZero: true, steps: 10, stepvalue: 5, max: 6
                }

            }]
		},

		maintainAspectRatio: false,
		responsive: true
	}
};

var Chart2 = new Chart(Chart2, data);


var doughnutChart = document.getElementById("doughnutChart").getContext("2d");
var data = {
	type: "doughnut",
	data: {
		labels: ["red", "yellow", "green", "blue"],
		datasets: [{
			data: [10, 50, 20, 20],
			backgroundColor: ["red", "yellow", "green", "blue"]
		}]
	},
	options: {
		maintainAspectRatio: false,
		responsive: true
	}
};

var doughnutChart = new Chart(doughnutChart, data);

var scatterChart = document.getElementById("scatterChart").getContext("2d");
var data= {
	type: "scatter",
	data: {
		labels: ['Point 1', 'Point 2', 'Point 3'],
		datasets: [{
			label: "scatter dataset",
			data: [{
				x: 2,
				y: 0
			}, {
				x: 0,
				y: 5
			}, {
				x: 5,
				y: 1
				}],
			backgroundColor: "rgb(255, 99, 132)"		
		},
			{
				label: "scatter dataset2",
				data: [{
					x: 4,
					y: 5
				}, {
					x: 2,
					y: 5
				}, {
					x: 8,
					y: 2
				}],
				backgroundColor: "rgb(152,251,152)"

			}],

	},
	options: {
		tooltips: {
			callbacks: {
				label: function (tooltipItem, data) {
					var label = data.labels[tooltipItem.index];
					return label + ': (' + tooltipItem.xLabel + ', ' + tooltipItem.yLabel + ')';
				}
			}},
		maintainAspectRatio: false,
		responsive: true,
		scales: {
			xAxes: [{
				type: "linear",
				position: "bottom",
				ticks: {
					beginAtZero: true, steps: 2, stepvalue: 2, max: 10
				}
			}],
			yAxes: [{
				type: "linear",
				ticks: {
					beginAtZero: true, steps: 2, stepvalue: 2, max: 10
				}
			}]
		}
	}
};

var scatterChart = new Chart(scatterChart, data);