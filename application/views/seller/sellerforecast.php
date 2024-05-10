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
    </div>
</div>


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
    </script>
</body>
</html>
