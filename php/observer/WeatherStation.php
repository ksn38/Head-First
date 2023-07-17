<?php
namespace meteo;
require_once('WeatherData.php');
require_once('CurrentConditionsDisplay.php');

use meteo\WeatherData;
use meteo\CurrentConditionsDisplay;

class WeatherStation {
  public static function main() {
    $weatherData = new WeatherData();
    
    $currentDisplay = new CurrentConditionsDisplay($weatherData);
    //StatisticsDisplay statisticsDisplay = new StatisticsDisplay(weatherData);
    //ForecastDisplay forecastDisplay = new ForecastDisplay(weatherData);
    
    $weatherData->setMeasurements(80, 65, 30.4);
    $weatherData->setMeasurements(82, 70, 29.2);
    $weatherData->setMeasurements(78, 90, 29.2);
  }
}

$test = new WeatherStation();
$test->main();