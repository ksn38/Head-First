<?php
namespace meteo;

interface Subject{
  public function registerObserver($o);
  public function removeObserver($o);
  public function notifyObservers($temperature, $humidity, $pressure);
}

