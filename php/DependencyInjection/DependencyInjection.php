<?php
abstract class ApptEncoder
{
  abstract public function encode(): string;
}

class BloggsApptEncoder extends ApptEncoder
{
  public function encode(): string
  {
    return "Данные о встрече в формате BloggsCal \n";
  }
}

class MegaApptEncoder extends ApptEncoder
{
  public function encode(): string
  {
    return "Данные о встрече в формате MegaCal\n";
  }
}

class AppointmentMaker2
{
  public function __construct(private ApptEncoder $encoder)
  {
  }
  public function makeAppointment(): string
  {
    return $this->encoder->encode();
  }
}

class ObjectAssembler
{
  private array $components = [];
  
  public function __construct(string $conf)
  {
    $this->configure($conf);
  }
  private function configure(string $conf): void
  {
    $data = simplexml_load_file($conf);
  
    foreach ($data->class as $class)
    {
      $name = (string)$class['name'];
      $resolvedname = $name;
    
      if (isset($class->instance))
      {
        if (isset($class->instance[0]['inst']))
        {
          $resolvedname = (string)$class->instance[0]['inst'] ;
        }
      }
      $this->components[$name] = function() use($resolvedname)
      {
        $rclass = new \ReflectionClass($resolvedname);
        return $rclass->newInstance();
      };
    }
  }
  public function getComponent(string $class): object
  {
    if (isset($this->components[$class]))
    {
      $inst = $this->components[$class]();
    }
    else
    {
      $rclass = new \ReflectionClass($class);
      $inst = $rclass->newInstance();
    }
    return $inst;
  }
}

$assembler = new ObjectAssembler("objects.xml");
$encoder = $assembler->getComponent(ApptEncoder::class);
$apptmaker = new AppointmentMaker2($encoder);
$out = $apptmaker->makeAppointment();
print $out;

$assembler = new ObjectAssembler("objects.xml");
$encoder = $assembler->getComponent(MegaApptEncoder::class);
$apptmaker = new AppointmentMaker2($encoder);
$out = $apptmaker->makeAppointment();
print $out;

