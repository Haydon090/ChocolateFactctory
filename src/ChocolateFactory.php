<?php

namespace Vovan\Chocolatefactory;

use Vovan\Chocolatefactory\Snack;

abstract class chocolateFactory
{
  public function orderSnack(string $type): void
  {
    $snack = $this->createSnack($type);
    $snack->prepare()->cut();
  }
  public abstract function createSnack(string $type): Snack;
}
