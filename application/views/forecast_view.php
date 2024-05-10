<!DOCTYPE html>
<html>
<head>
    <title>Single Exponential Smoothing Forecast</title>
    <!-- Include Chart.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   
</head>
<style>
    .chartJR{
        width: 700px;
        height: 400px;
    }
    tr, th, td{
        border: 1px solid black;
    }
    .chartss{
      height: 400px;
      width: 700px;
      padding: 1rem;
      border: 1px solid #f49131;
      border-radius: 1rem;
      background: #251c35; /*092918 251c35 008374*/
      box-shadow: 0 0 16 rgba(0, 0, 0, 8);
    }
</style>
<body>
    <h1>Single Exponential Smoothing Forecast</h1>
    <div class="chartJR">
    <!-- Add an HTML canvas element for the chart -->
        <canvas id="forecastChart"></canvas>
    </div>



    <table>
        <tr>
            <th>Month</th>
            <th>Actual Value</th>
            <th>Forecasted Value</th>
        </tr>
        <?php foreach ($data as $index => $row) : ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo $row['value'] === null ? 'N/A' : $row['value']; ?></td>
                <td><?php echo $forecast[$index] === null ? 'N/A' : $forecast[$index]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>


    <h2>Last Forecasted Value</h2>
    <table>
        <tr>
            <th>YEAR</th>
            <th>Last Forecasted Value</th>
        </tr>
        <tr>
            <td><?php echo count($data); ?></td>
            <td><?php echo end($forecast) === null ? 'N/A' : end($forecast); ?></td>
        </tr>
    </table>

</body>
</html>

 <!-- JavaScript code to create the chart -->
 <script>
        // Get the canvas element
        var ctx = document.getElementById('forecastChart').getContext('2d');

        // Define your data (actual and forecasted values)
        var actualData = <?= json_encode(array_column($data, 'value')) ?>;
        var forecastData = <?= json_encode($forecast) ?>;

        // ...
// Your existing code for creating the chart
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?= json_encode(array_column($data, 'months')) ?>,
        datasets: [{
            label: 'Actual Sales',
            data: actualData,
            borderColor: function(context) {
                var index = context.dataIndex;
                if (index === actualData.length - 1) {
                    return '#FF5733'; // Change the color for the last data point
                }
                return '#f49131'; // Default line color
            },
            backgroundColor: function(context) {
                var index = context.dataIndex;
                if (index === actualData.length - 1) {
                    return '#FF5733'; // Change the color for the last data point
                }
                return '#f49131'; // Default background color
            },
            fill: true
        }, {
            label: 'Forecasted Demand',
            data: forecastData,
            backgroundColor: function(context) {
                var index = context.dataIndex;
                if (index === actualData.length - 1) {
                    return '#FF5733'; // Change the color for the last data point
                }
                return '#008374'; // Default background color
            },
            borderColor: function(context) {
                var index = context.dataIndex;
                if (index === actualData.length - 1) {
                    return '#FF5733'; // Change the color for the last data point
                }
                return 'rgba(201, 203, 207, 0.2)'; // Default line color
            },
            fill: true
        }]
    },
    options: {
        scales: {
            x: {
                title: {
                    display: true,
                    text: 'months'
                }
            },
            y: {
                title: {
                    display: true,
                    text: 'VALUE IN METRIC TONS'
                }
            }
        }
    }
});
// ...

    </script>




<!--

    <!DOCTYPE html>
<html>
<head>
    <title>Holt-Winters Exponential Smoothing Forecast</title>
</head>
<body>
    <h1>Holt-Winters Exponential Smoothing Forecast</h1>

    <table border="1">
        <tr>
            <th>Year</th>
            <th>Quarter</th>
            <th>Actual Value</th>
            <th>Forecasted Value</th>
        </tr>
        <?php foreach ($data as $index => $quarter): ?>
            <tr>
                <td><?= $quarter['year'] ?></td>
                <td><?= $quarter['quarter'] ?></td>
                <td><?= $quarter['value'] ?></td>
                <td><?= isset($forecasted_data[$index]) ? $forecasted_data[$index] : 'N/A' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

        -->