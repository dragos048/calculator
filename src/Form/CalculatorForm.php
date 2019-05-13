<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class CalculatorForm extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('firstNumber')
            ->add('operand', ChoiceType::class, [
                'choices' => [
                    '+' => 'plus',
                    '-' => 'minus',
                    '*' => 'multiplication',
                    '/' => 'division'
                ]
            ])
            ->add('secondNumber')
            ->add('Calculate', SubmitType::class);
    }
}
