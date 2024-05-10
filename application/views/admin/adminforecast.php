<!DOCTYPE html>
<html>
<head>
    <title>Double Exponential Smoothing Forecast</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
   /*
    .containerSsS{
      outline: 1px dashed red;
       width: min(320vm, 100%);
        width: 100%;
        height: 550px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        
    }*/
    
    #CamSc {
        width: 100%;
        height: auto;
        display: flex;
        justify-content: space-between;
    }
    .place{
        width: 47%;
    }

    .both{
      margin-top: 102px;
      width: cover;

      border: 1px solid #008374;
    }
    p{
      display: flex;
      justify-content: center;
    }
</style>
<body>

<div class="containerSsS">
    <!--
    <div id="CamSc">
        <div class="place">
          <p><strong>San Clemente</strong></p>
          <canvas id="SanClemente" style="border: 1px solid #008374;"></canvas>
        </div>
        
        <div class="place">
          <p><strong>Camiling</strong></p>
          <canvas id="Camiling" style="border: 1px solid #008374;"></canvas>
        </div>
    </div>

    <div id="both" style="margin-top: 50px;">
        <p><strong>Camiling & San Clemente</strong></p> 
        <canvas id="Joined" style="border: 1px solid #008374;"></canvas>
    </div>-->

    <div class="chartss" id="div1" style="display: block;">
        <canvas id="ricechart"></canvas>
    </div>
    <div class="chartss" id="div2">
        <canvas id="forecastChart"></canvas>
    </div>
    <div class="chartss" id="div3">
        <canvas id="Mango"></canvas>
    </div>
    <div class="chartss" id="div4">
        <canvas id="Chart"></canvas>
    </div>
</div>

<!--
    <script>

    // Chart Set 1
        var chart1Ctx = document.getElementById('SanClemente').getContext('2d');
        new Chart(chart1Ctx, {
            type: 'line',
            data: {
                labels: [<?php foreach ($data1 as $entry) echo "'" . $entry['year'] . "', "; ?>],
                datasets: [
                    {
                        label: 'Original Data',
                        data: [<?php foreach ($data1 as $entry) echo $entry['value'] . ", "; ?>],
                        borderColor: getRandomColor(),
                        fill: false
                    },
                    {
                        label: 'Forecasted Data',
                        data: [<?php foreach ($forecast1 as $entry) echo $entry['value'] . ", "; ?>],
                        borderColor: getRandomColor(),
                        fill: false
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Year'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Produce'
                        }
                    }
                }
            }
        });


        // Chart Set 2
        var chart1Ctx = document.getElementById('Camiling').getContext('2d');
        new Chart(chart1Ctx, {
            type: 'line',
            data: {
                labels: [<?php foreach ($data2 as $entry) echo "'" . $entry['year'] . "', "; ?>],
                datasets: [
                    {
                        label: 'Original Data',
                        data: [<?php foreach ($data2 as $entry) echo $entry['value'] . ", "; ?>],
                        borderColor: getRandomColor(),
                        fill: false
                    },
                    {
                        label: 'Forecasted Data',
                        data: [<?php foreach ($forecast2 as $entry) echo $entry['value'] . ", "; ?>],
                        borderColor: getRandomColor(),
                        fill: false
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Year'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Produce'
                        }
                    }
                }
            }
        });


        // Chart Set 3
        var chart1Ctx = document.getElementById('Joined').getContext('2d');
        new Chart(chart1Ctx, {
            type: 'line',
            data: {
                labels: [<?php foreach ($data3 as $entry) echo "'" . $entry['year'] . "', "; ?>],
                datasets: [
                    {
                        label: 'Original Data',
                        data: [<?php foreach ($data3 as $entry) echo $entry['value'] . ", "; ?>],
                        borderColor: getRandomColor(),
                        fill: false
                    },
                    {
                        label: 'Forecasted Data',
                        data: [<?php foreach ($forecast3 as $entry) echo $entry['value'] . ", "; ?>],
                        borderColor: getRandomColor(),
                        fill: false
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Year'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Produce'
                        }
                    }
                }
            }
        });

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
        return color;
        }

        function chartOnHide(){
            display: show;
        }
    </script>-->
</body>
</html>
<script>
      var riceChart, cornChart, bananaChart, mangoChart;
    
    // Get the canvas elements for each chart
    var riceCtx = document.getElementById('ricechart').getContext('2d');
    var cornCtx = document.getElementById('forecastChart').getContext('2d');
    var mangoCtx = document.getElementById('Mango').getContext('2d');
    var bananaCtx = document.getElementById('Chart').getContext('2d');
    
    // Define your data (actual and forecasted values)
    var forecastrice = <?= json_encode($forecastrice) ?>;
    var forecastcorn = <?= json_encode($forecast) ?>;
    var forecastMango = <?= json_encode($forecastMango) ?>;
    var forecastbanana = <?= json_encode($forecastbanana) ?>;

    // Define your data (actual and forecasted values)
    var actualRice = <?= json_encode(array_column($dataProduce, 'value')) ?>;
    var actualCorn = <?= json_encode(array_column($dataCORN, 'value')) ?>;
    var actualMango = <?= json_encode(array_column($Mango, 'value')) ?>;
    var actualBanana = <?= json_encode(array_column($dataBanana, 'value')) ?>;
    
    // Create the initial charts with the default type (bar)
    riceChart = createChart(riceCtx, 'line', actualRice, 'Annual Rice Production in TARLAC', forecastrice, 'Forecast Production Value');
    cornChart = createChart(cornCtx, 'line', actualCorn, 'Annual Corn Production in TARLAC', forecastcorn, 'Forecast Production Value');
    bananaChart = createChart(bananaCtx, 'line', actualBanana, 'Annual Ginger Production in TARLAC', forecastbanana, 'Forecast Production Value');
    mangoChart = createChart(mangoCtx, 'line', actualMango, 'Annual Mango Production in TARLAC', forecastMango, 'Forecast Production Value');
    
    function createChart(ctx, chartType, data, label, data2, label2) {
        var borderColor = function(context) {
            var index = context.dataIndex;
            if (index === data.length - 1) {
                return '#FF5733'; // Change the color for the last data point
            }
            return '#f49131'; // Default line color
        };

        var backgroundColor = function(context) {
            var index = context.dataIndex;
            if (index === data.length - 1) {
                return 'transparent'; // Change the color for the last data point #FF5733
            }
            return '#f49131'; // Default background color
        };

        var borderColor2 = function(context) {
            var index = context.dataIndex;
            if (index === data.length - 1) {
                return 'rgba(17, 122, 101, 1)'; // Change the color for the last data point
            }
            return 'rgba(17, 122, 101, 1)'; // Default line color
        };

        var backgroundColor2 = function(context) {
            var index = context.dataIndex;
            if (index === data.length - 1) {
                return 'rgba(17, 122, 101, 0.2)'; // Change the color for the last data point
            }
            return 'rgba(17, 122, 101, 0.2)'; // Default background color
        };

        var chartData = {
            labels: <?= json_encode(array_column($dataProduce, 'year')) ?>,
            datasets: [{
                label: label,
                data: data,
                borderColor:borderColor,
                backgroundColor: backgroundColor,
                fill: false
            },{label: label2,
                data: data2,
                borderColor: borderColor2,
                backgroundColor: backgroundColor2,
                fill: true
            }]
        };

        var chartOptions = {
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Year'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'VALUE IN METRIC TONS'
                    }
                }
            }
        };

        return new Chart(ctx, {
            type: chartType,
            data: chartData,
            options: chartOptions
        });
    }

</script>