
<style>
  #container {
    width: 100%;
    height: 350px;
    margin: 50px;
    padding: 0;
    border: 1px solid #008374;
  }
  .chart{
    display: inline-flex;
    justify-content: center;
    width: 100%;
    height: 400px;
  }
  #containerS{
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .containerS{
    display: flex;
    align-items: center;
    justify-content: center;
    gap:20px;   
  }
  .chartS{
    height: 400px;
    width: 600px;
    padding: 1.5rem;
    border: 1px solid #008374;
    border-radius: 1rem;
    background: #092918;
    box-shadow: 0 0 16 rgba(0, 0, 0, 8);
  }
  #demandChart{
    color: white;
  }
</style>

<!-- ===== Charting of possible product trends ===== -->
   <section id="chart" class="pricing sections-bg">
      

    <div class="containerS">
        <div class="chartS">
        <p>Single Exponential Smoothing Forecast</p>
        <!-- Add an HTML canvas element for the chart -->
            <canvas id="forecastChart"></canvas>
        </div>
        
        
        <div class="chartS">
        <p style="color:white; display: flex; justify-content:center;">Demand Forecasting using Moving Average</p>
          <canvas id="demandChart"></canvas> <!-- Create a canvas element for the chart -->
          <!-- Rest of your HTML content here -->
        </div>
    </div>
  </section>

  <script>
     // Get the actual and forecasted data from PHP and convert it to JavaScript arrays
     var actual = <?php echo json_encode(array_column($data['demand_data'], 'value')); ?>;
    var forecasted = <?php echo json_encode(array_column($forecasted_data, 'value')); ?>;

    // Create a Chart.js chart
    var ctx = document.getElementById('demandChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:  ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec', 'Jan'],
            datasets: [{
                label: 'Actual Sales',
                data: actual,
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
                data: forecasted,
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