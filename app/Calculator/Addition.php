<?php

namespace App\calculator;

use App\Calculator\Exceptions\NoOperandsException;

class Addition implements OperationInterface 
{

  protected $operands = [];

  public function setOperands(array $operands) {
    $this->operands = $operands;
  }

  public function calculate() {
    // $result = 0;

    // foreach ($this->operands as $operand) {
    //   $result += $operand;
    // }

    // return $result;

    if (count($this->operands) === 0) {
      throw new NoOperandsException;
    }

    return array_sum($this->operands);
  }
}