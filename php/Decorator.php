<?php
abstract class Tile
{
  abstract public function getWealthFactor(): int;
}

abstract class TileDecorator extends Tile
{
  protected Tile $tile;
  
  public function __construct(Tile $tile)
  {
    $this->tile = $tile;
  }
}

class Plains extends Tile
{
  private int $wealthFactor = 2;
  
  public function getWealthFactor(): int
  {
    return $this->wealthFactor;
  }
}

class DiamondDecorator extends TileDecorator
{
  public function getWealthFactor(): int
  {
    return $this->tile->getWealthFactor() + 2 ;
  }
}

class PollutionDecorator extends TileDecorator
{
  public function getWealthFactor(): int
  {
    return $this->tile->getWealthFactor() - 4;
  }
}

$tile = new Plains();
print $tile->getWealthFactor() . "\n";
$tile = new DiamondDecorator(new Plains());
print $tile->getWealthFactor() . "\n";
$tile = new PollutionDecorator(new DiamondDecorator(new Plains()));
print $tile->getWealthFactor() . "\n";
