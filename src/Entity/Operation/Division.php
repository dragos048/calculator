<?php
namespace App\Entity\Operation;

class Division implements OperationInterface {
    
    /*
     * @param integer $firstNumber
     * @param integer $secondNumber
    */
    public function calculation($firstNumber, $secondNumber) {
        
        return $firstNumber / $secondNumber;
    }
}
