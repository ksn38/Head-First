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

abstract class CommsManager
{
  abstract public function getHeaderText(): string;
  abstract public function getApptEncoder(): ApptEncoder;
  abstract public function getFooterText(): string;
}

class BloggsCommsManager extends CommsManager
{
  public function getHeaderText(): string
  {
    return "Верхний колонтитул BloggsCal\n";
  }
  public function getApptEncoder(): ApptEncoder
  {
    return new BloggsApptEncoder();
  }
  public function getFooterText(): string
  {
    return "Нижний колонтитул BloggsCal\n";
  }
}

$mgr = new BloggsCommsManager();
print $mgr->getHeaderText();
print $mgr->getApptEncoder()->encode();
print $mgr->getFooterText();
