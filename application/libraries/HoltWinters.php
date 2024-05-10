<?php

class HoltWinters {
    private $alpha; // Smoothing parameter for level
    private $beta;  // Smoothing parameter for trend
    private $gamma; // Smoothing parameter for seasonality
    private $seasonality; // Seasonality period
    private $data; // Historical data

    public function __construct($alpha, $beta, $gamma, $seasonality) {
        $this->alpha = $alpha;
        $this->beta = $beta;
        $this->gamma = $gamma;
        $this->seasonality = $seasonality;
    }

    public function forecast($data, $periods) {
        $this->data = $data;
        $n = count($data);
        $level = $this->initializeLevel($data, $this->seasonality);
        $trend = $this->initializeTrend($data, $this->seasonality);

        $forecast = [];

        for ($i = 0; $i < $n + $periods; $i++) {
            if ($i < $n) {
                $value = $data[$i];
            } else {
                // If we run out of historical data, use forecasted values for subsequent periods
                $value = $level + $i * $trend + $this->getSeasonalComponent($i);
            }

            $forecast[] = $value;

            // Update level and trend
            $previousLevel = $level;
            $level = $this->alpha * ($value - $this->getSeasonalComponent($i)) + (1 - $this->alpha) * ($level + $trend);
            $trend = $this->beta * ($level - $previousLevel) + (1 - $this->beta) * $trend;
        }

        return array_slice($forecast, $n, $periods);
    }

    private function initializeLevel($data, $seasonality) {
        // Initialize level with the average of the first seasonality periods
        return array_sum(array_slice($data, 0, $seasonality)) / $seasonality;
    }

    private function initializeTrend($data, $seasonality) {
        // Initialize trend with the average slope of the first seasonality periods
        $sum = 0;
        for ($i = 0; $i < $seasonality; $i++) {
            $sum += ($data[$i + $seasonality] - $data[$i]) / $seasonality;
        }
        return $sum / $seasonality;
    }

    private function getSeasonalComponent($index) {
        // Calculate the seasonal component using the gamma parameter
        $seasonalIndex = $index % $this->seasonality;
        return $this->gamma * ($this->data[$index] - $this->level - $this->trend) + (1 - $this->gamma) * $this->data[$seasonalIndex];
    }
}
