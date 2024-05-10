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