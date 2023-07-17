<?php
namespace meteo;

interface DisplayElement {
  public function display($temperature, $humidity, $pressure);
}
