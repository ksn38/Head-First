<?php
namespace meteo;
require_once('Subject.php');

use meteo\Subject;

class WeatherData implements Subject {
  private $observers = array(); //array
  private $temperature;
  private $humidity;
  private $pressure;
  
  function __construct() {
    $observers = array();
  }
  
  public function registerObserver($o) {
    array_push($this->observers, $o);
  }
  
  public function removeObserver($o) {
    unset($this->observers, $o);
  }
  
  public function notifyObservers($temperature, $humidity, $pressure) {
    foreach ($this->observers as $observer) {
      $observer->update($temperature, $humidity, $pressure);
    }
  }
  
  public function setMeasurements($temperature, $humidity, $pressure) {
    $this->temperature = $temperature;
    $this->humidity = $humidity;
    $this->pressure = $pressure;
    $this->notifyObservers($temperature, $humidity, $pressure);
  }
}
