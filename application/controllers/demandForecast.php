<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class demandForecast extends CI_Controller {

    /*public function index()
    {
        // Define the historical demand data
        $data['demand_data'] = [
            ['months' => 0, 'value' => 2377],
            ['months' => 1, 'value' => 1859],
            ['months' => 2, 'value' => 1609],
            ['months' => 3, 'value' => 1632],
            ['months' => 4, 'value' =>2506],
            ['months' => 5, 'value' => 2279],
            ['months' => 6, 'value' => 2090],
            ['months' => 7, 'value' => 2034],
            ['months' => 8, 'value' => 1633],
            ['months' => 9, 'value' => 1450],
            ['months' => 10, 'value' => 2081],
            ['months' => 11, 'value' => 2649],
            ['months' => 12, 'value' => 2534]
        ];

        // Calculate the 3-month moving average and project the forecast
        $data['forecast'] = $this->calculate_forecast($data['demand_data']);

        // Load your view to display the forecast results
        $this->load->view('demand', $data);
    }

    private function calculate_forecast($demand_data)
    {
        $forecast = [];
        $data_count = count($demand_data);
        $period = 4;

        for ($i = 0; $i < $data_count + 1; $i++) {
            $sum = 0;
            $count = 0;
        
            // Calculate the moving average for the last 3 months
            for ($j = max(0, $i - $period + 1); $j <= $i && $j < $data_count; $j++) {
                $sum += $demand_data[$j]['value'];
                $count++;
            }
        
            // Calculate the forecast for the next 13 months
            if ($count > 0) {
                $forecast[] = $sum / $count;
            } else {
                // If there is no data for the moving average, set the forecast to the last available demand value
                $lastDemandIndex = $i - $period; // Index of the last month with data
                if ($lastDemandIndex >= 0) {
                    $forecast[] = $demand_data[$lastDemandIndex]['value'];
                } else {
                    $forecast[] = 0; // Default to 0 if there is no historical data at all
                }
            }
        }
        
        return $forecast;*/
        public function index() {
            $data['demand_data'] = [
                ['months' => 1, 'value' => 1859],
                ['months' => 2, 'value' => 1609],
                ['months' => 3, 'value' => 1632],
                ['months' => 4, 'value' => 2506],
                ['months' => 5, 'value' => 2279],
                ['months' => 6, 'value' => 2090],
                ['months' => 7, 'value' => 2034],
                ['months' => 8, 'value' => 1633],
                ['months' => 9, 'value' => 1450],
                ['months' => 10, 'value' => 2081],
                ['months' => 11, 'value' => 2649],
                ['months' => 12, 'value' => 2534],
                ['months' => 13, 'value' => null]
            ];
        
            $window_size = 3;
            $forecasted_data = [];
        
            for ($i = 0; $i < count($data['demand_data']); $i++) {
                $sum = 0;
        
                for ($j = max(0, $i - $window_size + 1); $j <= $i; $j++) {
                    $sum += $data['demand_data'][$j]['value'];
                }
        
                $moving_average = $sum / min($window_size, $i + 1);
        
                $forecasted_data[] = [
                    'months' => $data['demand_data'][$i]['months'],
                    'value' => round($moving_average, 2)
                ];
            }

             // Assign the forecasted value of month 12 as the actual data of month 13
            $data['demand_data'][12]['value'] = $forecasted_data[11]['value'];

            /*
            // Pass data to the view
            $this->load->view('demand', [
                'data' => $data,
                'forecasted_data' => $forecasted_data
            ]);
            */


           
            $this->load->view('demand', [
                'data' => $data,
                'forecasted_data' => array_slice($forecasted_data, 0, 12)  // Exclude month 13
            ]);
            
        }
        
        
        
    }



