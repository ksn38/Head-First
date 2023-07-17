<?php
namespace meteo;

interface Observer {
  public function update($temperature, $humidity, $pressure);
}
