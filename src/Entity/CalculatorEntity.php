<?php
namespace App\Entity;

use App\Entity\Operation\Plus;
use App\Entity\Operation\Minus;
use App\Entity\Operation\Multiplication;
use App\Entity\Operation\Division;

class CalculatorEntity {
    
    public $firstNumber;
    public $secondNumber;
    public $operand;
    
    /**
     * @return integer
     */
    public function getFirstNumber() {
        return $this->firstNumber;
    }
    /**
     * @param integer $firstNumber
     */
    public function setFirstNumber($firstNumber) {
        $this->firstNumber = $firstNumber;
    }
    /**
     * @return integer
     */
    public function getSecondNumber() {
        return $this->secondNumber;
    }
    /**
     * @param integer $secondNumber
     */
    public function setSecondNumber($secondNumber) {
        $this->secondNumber = $secondNumber;
    }
    /**
     * @return integer
     */
    public function getOperand() {
        return $this->operand;
    }
    /**
     * @param integer $operand
     */
    public function setOperand($operand) {
        $this->operand = $operand;
    }
    public function doCalculation() {
        switch ($this->getOperand()) {
            case "plus":
                $operation = new Plus();
                break;
            case "minus":
                $operation = new Minus();
                break;
            case "multiplication":
                $operation = new Multiplication();
                break;
            case "division":
                $operation = new Division();
                break;
        }
        return $operation->calculation($this->getFirstNumber(), $this->getSecondNumber());
    }
}
