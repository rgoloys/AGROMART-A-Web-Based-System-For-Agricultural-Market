<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forecast_Model extends CI_Model {

    public function SanClemente() { //RICE
        return array(
            //array('year' => 2019, 'value' => 10500),
            //array('year' => 2020, 'value' => 20000),
            array('year' => 2021, 'value' => 17145),
            array('year' => 2022, 'value' => 15994),
            //array('year' => 2023, 'value' => 10000)
        );
    }

    public function Camiling() { //POULTRY
        return array(
            array('year' => 1, 'value' => 39),
            array('year' => 2, 'value' => 44),
            array('year' => 3, 'value' => 40),
            array('year' => 4, 'value' => 45),
            array('year' => 5, 'value' => 38),
            array('year' => 6, 'value' => 43),
            array('year' => 7, 'value' => 39),
            array('year' => 8, 'value' => null)
        );
    }

    public function Joined() { //YELLOW CORN
        return array(
            array('year' => 2021, 'value' => 66465),
            array('year' => 2022, 'value' => 67800),
            array('year' => 2023, 'value' => 0)
        );
    }


    public function indexS() {
        // Your dataset
        $data = array(
            array('year' => 2017, 'value' => 579013),
            array('year' => 2018, 'value' => 568862),
            array('year' => 2019, 'value' => 595463),
            array('year' => 2020, 'value' => 573337),
            array('year' => 2021, 'value' => 605131),
            array('year' => 2022, 'value' => 599577),
            array('year' => 2023, 'value' => null)
        );

        // Perform single exponential smoothing
        $alpha = 0.2; // Adjust the smoothing parameter as needed
        $forecast = $this->singleExponentialSmoothing($data, $alpha);
        //$lastForecast = end($forecast);
        $lastForecast = end($forecast);
        $data[count($data) - 1]['value'] = $lastForecast;

        $forecastData = $forecast; // Forecasted data (already calculated)

                // Calculate the squared errors and keep track of the count
                $squaredErrors = 0;
                $count = 0;
                $actualData = array(579013, 568862, 595463, 573337, 605131, 599577, null); // Actual data
                foreach ($actualData as $key => $actualValue) {
                    // Skip if the actual value is missing
                    if ($actualValue === null) {
                        continue;
                    }

                    // Calculate the error (actual - forecast)
                    $error = $actualValue - $forecastData[$key];

                    // Square the error and add it to the total
                    $squaredErrors += $error * $error;

                    // Increment the count
                    $count++;
                }

                // Calculate the MSE
                if ($count > 0) {
                    $mse = $squaredErrors / $count;

                    echo "Calculate the error (actual - forecast):". $error;
                    echo "Square the error and add it to the total:".  $squaredErrors;
                    echo "Mean Squared Error (MSE): " . $mse;
                } else {
                    echo "No valid data for MSE calculation.";
                }

    

        $this->load->view('template/header');
        // Load a view to display the forecast
        $this->load->view('forecast_view', 
            
            array('data' => $data, 'forecast' => $forecast)
           
        );

        $this->load->view('template/footer');
    }

    private function singleExponentialSmoothing($data, $alpha) {
        $forecast = array();
        $last_value = null;

        foreach ($data as $row) {
            $current_value = $row['value'];

            if ($current_value === null) {
                // If the value is missing, continue with the forecast
                $forecast[] = $last_value;
            } else {
                // Calculate the forecast using the single exponential smoothing formula
                if ($last_value === null) {
                    // Initialize the first forecast with the first actual value
                    $forecast[] = $current_value;
                } else {
                    $forecast[] = $alpha * $current_value + (1 - $alpha) * $last_value;
                }

                $last_value = $forecast[count($forecast) - 1];
            }
        }

        return $forecast;
    }
}
