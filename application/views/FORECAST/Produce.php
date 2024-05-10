 <!-- JavaScript code to create the chart -->
 <script>
        // Get the canvas element
        var ctx = document.getElementById('forecastChart').getContext('2d');

        // Define your data (actual and forecasted values)
        var actualData = <?= json_encode(array_column($data, 'value')) ?>;
        var forecastData = <?= json_encode($forecast) ?>;

        // Create the chart
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?= json_encode(array_column($data, 'year')) ?>,
                datasets: [{
                    label: 'Rice Production',
                    data: actualData ,
                    backgroundColor:  'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 0.2)',
                    fill: true
                }, {
                    label: 'Times series forecast data',
                    data: forecastData,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 0.2)' ,
                    fill: true
                }]
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
                            text: 'VALUE IN METRIC TONS '
                        }
                    }
                }
            }
        });
    </script>