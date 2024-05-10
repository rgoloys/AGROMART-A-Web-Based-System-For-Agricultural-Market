<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForecastController extends CI_Controller {

    /* For SES */
    public function index() {
      
        $data = array( //Bnana
            array('year' => 2010, 'value' => 4845),
            array('year' => 2011, 'value' => 4909),
            array('year' => 2012, 'value' => 4889),
            array('year' => 2013, 'value' => 4932),
            array('year' => 2014, 'value' => 4195),
            array('year' => 2015, 'value' => 3866),
            array('year' => 2016, 'value' => 3814),
            array('year' => 2017, 'value' => 4592),
            array('year' => 2018, 'value' => 5158),
            array('year' => 2019, 'value' => 5519),
            array('year' => 2020, 'value' => 5855),
            array('year' => 2021, 'value' => 5629),
            array('year' => 2022, 'value' => 5984),
            array('year' => 2023, 'value' => null)
        );
        
    
        // Define the alpha (smoothing) parameter
        $alpha = 0.6;
    
        // Perform single exponential smoothing
        $forecast = $this->singleExponentialSmoothing($data, $alpha);
    
        // Assign the forecasted value of month 12 as the actual data of month 13
        $data[12]['value'] = $forecast[11];
    
        // Pass data to the view
        $this->load->view('forecast_view', [
            'data' => $data,
            'forecast' => $forecast
        ]);
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
    /*
    public function index() {
        // Your dataset including data for 2023
        $data = array(
            array('year' => 2020, 'quarter' => 1, 'value' => 158069),
            array('year' => 2020, 'quarter' => 2, 'value' => 67313),
            array('year' => 2020, 'quarter' => 3, 'value' => 66521),
            array('year' => 2020, 'quarter' => 4, 'value' => 281433),
    
            array('year' => 2021, 'quarter' => 1, 'value' => 175117),
            array('year' => 2021, 'quarter' => 2, 'value' => 79846),
            array('year' => 2021, 'quarter' => 3, 'value' => 66336),
            array('year' => 2021, 'quarter' => 4, 'value' => 283831),
    
            array('year' => 2022, 'quarter' => 1, 'value' => 171999),
            array('year' => 2022, 'quarter' => 2, 'value' => 75052),
            array('year' => 2022, 'quarter' => 3, 'value' => 69542),
            array('year' => 2022, 'quarter' => 4, 'value' => 282983),
    
            // Include data for 2023
            array('year' => 2023, 'quarter' => 1, 'value' => null), // Add null for the forecasts
            array('year' => 2023, 'quarter' => 2, 'value' => null),
            array('year' => 2023, 'quarter' => 3, 'value' => null),
            array('year' => 2023, 'quarter' => 4, 'value' => null)
        );
    
        // Specify your alpha value for smoothing
        $alpha = 0.2; // You can adjust this value as needed
    
            // Calculate forecasts for 2023
        $forecasted_data = $this->singleExponentialSmoothing($data, $alpha);

        

        // Pass data to the view
        $this->load->view('forecast_view', [
            'data' => $data,
            'forecasted_data' => $forecasted_data
        ]);

    }
    
    /*
    public function index() {
        // Load the database model
        $this->load->model('forecast_model');
        
        // Fetch historical data from the database
        $data = $this->forecast_model->fetch_historical_data();

        // Load the Holt-Winters library (if not already loaded)
        // Make sure you have HoltWinters.php class in your project
        $this->load->library('HoltWinters');
        
        // Perform Holt-Winters forecasting
        $forecast = $this->holtwinters->forecast($data, 2); // 2 periods into the future (Q1 and Q2 of 2023)

        // Load the view and pass the forecast data
        $this->load->view('forecast_view', array('forecast' => $forecast));
    }

    
    private function singleExponentialSmoothing($data, $alpha) {
        $forecast = array();
        $last_value = null;
    
        foreach ($data as $row) {
            $current_value = $row['value'];
    
            if ($current_value === null) {
                // Calculate the forecast using the single exponential smoothing formula
                $forecast[] = $alpha * $last_value + (1 - $alpha) * $last_value;
            } else {
                // Initialize the first forecast with the first actual value
                $forecast[] = $current_value;
            }
    
            $last_value = $forecast[count($forecast) - 1];
        }
    
        return $forecast;
    }
    */







/*
    $data = array(
        array('year' => 2020, 'quarter' => 1, 'value' => 158069),
        array('year' => 2020,  'quarter' =>2, 'value' => 67313),
        array('year' => 2020, 'quarter' => 3, 'value' => 66521),
        array('year' => 2020, 'quarter' => 4, 'value' => 281433),

        array('year' => 2021, 'quarter' => 1, 'value' => 175117),
        array('year' => 2021,  'quarter' =>2, 'value' => 79846),
        array('year' => 2021, 'quarter' => 3, 'value' => 66336),
        array('year' => 2021, 'quarter' => 4, 'value' => 283831),

        array('year' => 2022, 'quarter' => 1, 'value' => 171999),
        array('year' => 2022,  'quarter' =>2, 'value' => 75052),
        array('year' => 2022, 'quarter' => 3, 'value' => 69542),
        array('year' => 2022, 'quarter' => 4, 'value' => 282983)
    );
*/
    
}
