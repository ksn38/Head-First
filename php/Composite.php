<?php
abstract class Unit
{
  public function addUnit(Unit $unit): void
  {
    throw new UnitException(get_class($this) . " является листом");
  }
  public function removeUnit(Unit $unit): void
  {
    throw new UnitException(get_class($this) . " является листом");
  }
  abstract public function bombardStrength(): int;
}

class Archer extends Unit
{
  public function bombardStrength () : int
  {
    return 4;
  }
}

class LaserCannonUnit extends Unit
  {
  public function bombardStrength(): int
  {
    return 44;
  }
}

class Army
{
  private array $units = [];
  
  public function addUnit(mixed $unit): void
  {
    if (in_array($unit, $this->units, true))
    {
      return;
    }
    $this->units[] = $unit;
  }
  public function removeUnit(mixed $unit): void
  {
    $idx = array_search($unit, $this->units, true);
    if (is_int($idx))
    {
      array_slice($this->units, $idx, 1, []);
    }
  }
  public function bombardStrength(): int
  {
    $ret = 0;
    foreach ($this->units as $unit)
    {
      $ret += $unit->bombardStrength();
    }
    return $ret;
  }
}

// Создание армии
$main_army = new Army();
// Добавление юнитов
$main_army->addUnit(new Archer());
$main_army->addUnit(new LaserCannonUnit());
// Создание новой армии
$sub_army = new Army();
// Добавление юнитов
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
// Добавление второй армии в первую
$main_army->addUnit($sub_army);
// Все вычисления выполняются " за кулисами "
print " Атака с силой: {$main_army->bombardStrength()}\n";
