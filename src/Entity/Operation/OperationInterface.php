<?php
namespace App\Entity\Operation;

interface OperationInterface {
    
    public function calculation($firstNumber, $secondNumber);
}
