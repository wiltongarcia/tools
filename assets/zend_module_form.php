<?php
namespace #NAME#\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class #FORM#Form extends Form
{
    public function __construct()
    {
        parent::__construct('#FORM#'); 

        $this->setAttributes(array(
            'method' => 'post',
            'enctype' => 'multipart/form-data',
        ));

        $this->add(array(
            'type' => '#NAME#\Form\#FORM#Fieldset',
            'options' => array(
                'use_as_base_fieldset' => true
            )
        ));
 
        //adiciona o submit
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type' => 'submit',
                'tabindex' => 3
            )
        )); 
    }
}
