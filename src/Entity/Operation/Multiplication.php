<?php
namespace App\Entity\Operation;

class Multiplication implements OperationInterface {
    
    /*
     * @param integer $firstNumber
     * @param integer $secondNumber
    */
    public function calculation($firstNumber, $secondNumber) {
        
        return $firstNumber * $secondNumber;
    }
}
