<?php
namespace ducks;
require('MallardDuck.php');
require('ModelDuck.php');

use ducks\MallardDuck;


$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();
$mallard->display();
$mallard->swim();
$model = new ModelDuck();
$model->performFly();
$model->performQuack();


