<?php
namespace meteo;
require_once('Observer.php');
require_once('DisplayElement.php');
require_once('WeatherData.php');

use meteo\Observer;
use meteo\DisplayElement;
use meteo\WeatherData;

class CurrentConditionsDisplay implements Observer, DisplayElement {
  private $temperature;
  private $humidity;
  private $pressure;
  private $weatherData;
  
  public function __construct($weatherData) {
    $this->weatherData = new WeatherData();
    $weatherData->registerObserver($this);
  }
  
  public function update($temperature, $humidity, $pressure) {
    $this->temperature = $temperature;
    $this->humidity = $humidity;
    $this->pressure = $pressure;
    $this->display($temperature, $humidity, $pressure);
  }
  
  public function display($temperature, $humidity, $pressure) {
    print_r("Current conditions: " . $temperature . "F degrees and " . $humidity . "% humidity" . "\n");
  }
}

