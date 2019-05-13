<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\CalculatorEntity;
use App\Form\CalculatorForm;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends AbstractController {
    
    /**
    * @Route("/calculator")
    */
    
    private $calculator;
    
    /*
     * @param CalculatorEntity $calculator
    */
    public function __construct(CalculatorEntity $calculator) {
        $this->calculator = $calculator;
    }
    
    /*
     * @param Request $request
    */
    public function calculatorAction(Request $request) {
        $form = $this->createForm(CalculatorForm::class, $this->calculator);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $calculator = $form->getData();
            $result = $calculator->doCalculation();
            return $this->render('calculator.html.twig', [
                'form' => $form->createView(),
                'result' => $result
                ]
            );
        }
        return $this->render('calculator.html.twig', ['form' => $form->createView()]);
    }
}
