var TimeTickFormatter = function (format, val) {
	var numdays = Math.floor(val / 86400);
	var numhours = Math.floor((val % 86400) / 3600);
	var numminutes = Math.floor(((val % 86400) % 3600) / 60);

<<<<<<< HEAD
	var hoursAndMinutes = numhours + "h " + numminutes + "m ";

	if (numdays > 0) {
		return numdays + "d " + hoursAndMinutes;
	}
	return hoursAndMinutes;
};

function Chart(options) {
=======
	$hoursAndMinutes = numhours + "h " + numminutes + "m ";

	if (numdays > 0) {
		return numdays + "d " + $hoursAndMinutes;
	}
	return $hoursAndMinutes;
};

function Chart() {
>>>>>>> old/master
	var chartDiv = $('#chartdiv');
	var chartIndicator = $('#chart-indicator');

	this.clear = function () {
		chartDiv.empty();
		chartDiv.hide();
	};

	this.generate = function () {
		var resultsDiv = $('#report-results');
		chartDiv.show();
		chartIndicator.show();

		var chartType = resultsDiv.attr('chart-type');

		var series = null;
		if (chartType == 'totalTime') {
			series = new TotalTimeSeries();
		}
		else if (chartType == 'total') {
			series = new TotalSeries();
		}
		else {
<<<<<<< HEAD
			series = new DateSeries(options);
=======
			series = new DateSeries();
>>>>>>> old/master
		}

		$('#report-results>tbody>tr').not(':first').each(function () {
			series.Add($(this));
		});

<<<<<<< HEAD
        var plot = $.jqplot('chartdiv', series.GetData(), {
			axesDefaults:{
				tickRenderer:$.jqplot.CanvasAxisTickRenderer,
				// tickOptions:{
				// 	fontSize:'10pt'
				// }
=======
		var plot = $.jqplot('chartdiv', series.GetData(), {
			axesDefaults:{
				tickRenderer:$.jqplot.CanvasAxisTickRenderer,
				tickOptions:{
					fontSize:'10pt'
				}
>>>>>>> old/master
			},
			seriesDefaults:{
				renderer:series.GetGraphRenderer(),
				rendererOptions:{ fillToZero:true },
				pointLabels:{show:true}

			},
<<<<<<< HEAD
			series: series.GetLabels(),
=======
			series:series.GetLabels(),
>>>>>>> old/master
			legend:series.GetLegendOptions(),
			axes:{
				xaxis:{
					renderer:series.GetXAxisRenderer(),
					tickOptions:{
						angle:-30,
						formatString:series.GetXAxisFormat(),
						formatter:series.GetXAxisFormatter()
<<<<<<< HEAD
					}
					// tickInterval:'1 day',
					// min:series.GetXAxisMin()
				},
				yaxis:{
					// pad:1.05,
					tickOptions:{ formatString:series.GetYAxisFormatString(), formatter:series.GetTickFormatter()},
					min:0
				}
			},
            highlighter: {
                // sizeAdjust: 10,
                tooltipLocation: 'n',
                tooltipAxes: 'y',
                // tooltipFormatString: '%.2f',
                useAxesFormatters: false
            },
            cursor: {
                show: true
            }
=======
					},
					tickInterval:'1 day',
					min:series.GetXAxisMin()
				},
				yaxis:{
					pad:1.05,
					tickOptions:{ formatString:'%d', formatter:series.GetTickFormatter()},
					min:0
				}
			}
>>>>>>> old/master
		});
		plot.replot({resetAxes:true});
		chartIndicator.hide();
	};

	function Series() {
		this.Add = function (row) {
		};

		this.GetData = function () {
			return [];
		};

		this.GetLabels = function () {
			return [];
		};

		this.GetTickFormatter = function () {
			return $.jqplot.DefaultTickFormatter;
		};

		this.GetGraphRenderer = function () {
			return $.jqplot.BarRenderer;
		};

		this.GetXAxisRenderer = function () {
			return $.jqplot.CategoryAxisRenderer;
		};

		this.GetXAxisFormat = function () {
			return "%d";
		};

		this.GetXAxisFormatter = function () {
			return $.jqplot.DefaultTickFormatter;
		};

		this.GetXAxisMin = function () {
			return '';
		};

<<<<<<< HEAD
		this.GetYAxisFormatString = function() {
            return '%d';
        };

=======
>>>>>>> old/master
		this.GetLegendOptions = function () {
			return {
				show:false
			}
		};
	}

	function TotalSeries() {
<<<<<<< HEAD
		this.series = [];
		this.labels = [];
=======
		this.series = new Array();
		this.labels = new Array();
>>>>>>> old/master

		this.Add = function (row) {
			var itemLabel = row.find('td[chart-column-type="label"]').text();
			var val = parseInt(row.find('td[chart-column-type="total"]').attr("chart-value"));
			this.series.push([itemLabel, val]);
		};

		this.GetData = function () {
			return [this.series];
		};

		this.GetLabels = function () {
			return this.labels;
		};
	}

	TotalSeries.prototype = new Series();

	function TotalTimeSeries() {

<<<<<<< HEAD
		this.series = [];
		this.labels = [];
=======
		this.series = new Array();
		this.labels = new Array();
>>>>>>> old/master

		this.GetTickFormatter = function () {
			return TimeTickFormatter;
		};
	}

	TotalTimeSeries.prototype = new TotalSeries();

<<<<<<< HEAD
	function DateSeries(options) {
		this.labels = [];
=======
	function DateSeries() {
		this.labels = new Array();
>>>>>>> old/master
		this.groups = [];
		this.min = null;
		this.first = true;

		this.Add = function (row) {
<<<<<<< HEAD
			var date = new Date(row.find('td[chart-column-type="date"]').attr('chart-value'));
			var groupCell = row.find('td[chart-group="r"],td[chart-group="a"]');
			var groupId = groupCell.attr('chart-value');
			var groupName = groupCell.text();
            var totalValue = row.find('td[chart-column-type="total"]').attr('chart-value');
			var total = _.isEmpty(totalValue) ? 1 : parseInt(totalValue);
=======
			var date = row.find('td[chart-column-type="date"]').attr('chart-value');
			var groupCell = row.find('td[chart-group="r"],td[chart-group="a"]');
			var groupId = groupCell.attr('chart-value');
			var groupName = groupCell.text();
			var total = parseInt(row.find('td[chart-column-type="total"]').attr('chart-value'));
>>>>>>> old/master

			if (!this.groups[groupId]) {
				this.groups[groupId] = new this.GroupSeries(groupName, groupId);
			}
			this.groups[groupId].AddDate(date, total);

			if (this.first) {
				this.min = date;
				this.first = false;
			}
		};

		this.dataLoaded = false;
		this.GetData = function () {
<<<<<<< HEAD
			var data = [];
=======
			var data = new Array();
>>>>>>> old/master
			if (!this.dataLoaded)
			{
				for (var group in this.groups) {
					data.push(this.groups[group].GetData());

					this.labels.push({label:this.groups[group].GetLabel()})
				}
				this.dataLoaded = true;
			}

			return data;
		};

		this.GetLabels = function () {
			if (this.labels.length <= 0) {
				for (var group in this.groups) {
					this.labels.push({label:this.groups[group].GetLabel()})
				}
			}

			return this.labels;
		};

		this.GetLegendOptions = function () {
			return {
				show:true,
				placement:'outsideGrid',
				fontSize:'10pt'
			}
		};

		this.GroupSeries = function (label, groupId) {
			var groupLabel = label;
<<<<<<< HEAD
			var series = [];
			var id = groupId;

			this.AddDate = function (date, count) {
				if (count === '' || count === undefined)
				{
					count = 0;
				}
				if (series[date]) {
					series[date] += count;
=======
			var series = new Array();
			var id = groupId;

			this.AddDate = function (date, count) {
				if (!count)
				{
					count = 1;
				}
				if (series[date]) {
					series[date ]+= count;
>>>>>>> old/master
				}
				else {
					series[date] = count;
				}
			};

			this.GetLabel = function () {
				return groupLabel;
			};

			this.GetData = function () {
<<<<<<< HEAD
				var data = [];
				for (var date in series) {
					data.push([date, series[date]])
				}
				return data;
=======
				var foo = new Array();
				for (var date in series) {
					foo.push([date, series[date]])
				}
				return foo;
>>>>>>> old/master
			};

			this.GetId = function () {
				return id;
			};
		};
<<<<<<< HEAD

        this.GetXAxisRenderer = function () {
            return $.jqplot.DateAxisRenderer;
        };

        this.GetXAxisFormat = function() {
            return options.dateAxisFormat;
        };

        this.GetGraphRenderer = function () {
            return $.jqplot.LineRenderer;
        };
    }
=======
	}
>>>>>>> old/master

	DateSeries.prototype = new Series();
}