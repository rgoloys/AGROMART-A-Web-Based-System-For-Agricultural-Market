anychart.onDocumentReady(function () {
  
  // add data
  var data = [
    ["2021", 25, 30, 15, 30],
    ["2022", 40, 25, 15, 20],
    ["2023", 35, 30, 15, 20],
    ["2024", 38, 25, 15, 22],
  ];
  
  // create a data set
  var dataSet = anychart.data.set(data);

  // map the data for all series
  var firstSeriesData = dataSet.mapAs({x: 0, value: 1});
  var secondSeriesData = dataSet.mapAs({x: 0, value: 2});
  var thirdSeriesData = dataSet.mapAs({x: 0, value: 3});
  var fourthSeriesData = dataSet.mapAs({x: 0, value: 4});

  // create a line chart
  var chart = anychart.line();

  // create the series and name them
  var firstSeries = chart.line(firstSeriesData);
  firstSeries.name("Rice");
  var secondSeries = chart.line(secondSeriesData);
  secondSeries.name("Corn");
  var thirdSeries = chart.line(thirdSeriesData);
  thirdSeries.name("chicken");
   var fourthSeries = chart.line(fourthSeriesData);
  fourthSeries.name("granger");

  // add a legend
  chart.legend().enabled(true);
  
  // add a title
  chart.title("Monthly Data");
  
  // specify where to display the chart
  chart.container("container");
  
  // draw the resulting chart
  chart.draw();
  
});