<?php
namespace pizza;
require_once('Pizza.php');

use pizza\Pizza;

class CheesePizza extends Pizza{
    public $name;
    public $dough;
    public $sauce;
    public $toppings = [];
    
    function __construct(){
        $this->name = "Cheese Pizza";
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        array_push($this->toppings, "Grated Reggiano Cheese", "maspo");
    }
}
