<!DOCTYPE html>
<html>
<head>
    <title>Demand Forecasting</title>
    <!-- Include Chart.js from a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
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
    <h1>Demand Forecasting using Moving Average</h1>
    <div class="chartss">
        <canvas id="demandChart"></canvas> <!-- Create a canvas element for the chart -->
        <!-- Rest of your HTML content here -->
    </div>

   <div class="tbl"></div>
   <table>
        <tr>
            <th>Month</th>
            <th>Forecast Demand</th>
        </tr>
        <tr>
            <td>Jan</td>
            <td><?php echo $data['demand_data'][12]['value']; ?></td>
        </tr>
    </table>
</body>
</html>

<!--   ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec', 'Jan'],  -->


<script>
    // Get the actual and forecasted data from PHP and convert it to JavaScript arrays
    var actualData = <?php echo json_encode(array_column($data['demand_data'], 'value')); ?>;
    var forecastedData = <?php echo json_encode(array_column($forecasted_data, 'value')); ?>;

    // Create a Chart.js chart
    var ctx = document.getElementById('demandChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:  ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec', 'Jan'],
            datasets: [{
                label: 'Actual Sales',
                data: actualData,
                borderColor: function(context) {
                    var index = context.dataIndex;
                    if (index === 12) {
                        return  '#FF5733'; // Change line color for month 12 and 13
                    }
                        return '#f49131'; // Default line color
                },
               // backgroundColor:  'rgba(75, 192, 192, 0.2)',
              backgroundColor: function(context) {
                    var index = context.dataIndex;
                    if ( index === 12) {
                        return  '#FF5733'; // Change line color for month 12 and 13
                    }
                        return '#f49131'; // Default line color
                },
                fill: true



            }, {
                label: 'Forecasted Demand',
                data: forecastedData,
                borderColor:   'rgba(201, 203, 207, 0.2)',
                fill: true,
                backgroundColor:   '#008374',
                //pointBorderColor: 'green', // Change the point color from month 12 onwards
                //pointBackgroundColor: 'green', // Change the point color from month 12 onwards
                //pointRadius: 6, // Adjust the point size
                //pointHoverRadius: 8, // Adjust the point size on hover
            }]
        },
        options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Months'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Sales demand per metric tons'
                        }
                    }
                }
            }
    });
</script>
