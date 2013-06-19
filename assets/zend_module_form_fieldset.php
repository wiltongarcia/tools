<?php
namespace #NAME#\Form;

use Zend\Form\Fieldset;
use Zend\Validator;
use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Stdlib\Hydrator\ClassMethods as ClassMethodsHydrator;

class #FORM#Fieldset extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('#area#'); 

        $this->setLabel('#FORM#');
