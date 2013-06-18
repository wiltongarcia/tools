<?php
/**
 * Silika - CMS
 *
 * @copyright Copyright (c) 2012 Silika (http://silika.com.br)
 */
namespace #NAME#\Controller;

use Zend\View\Model\ViewModel;
use Base\Controller\BaseController;
use #NAME#\Form\#CONTROLLER#Form;

class #CONTROLLER#Controller extends BaseController
{
    /**
     * Nome do modulo atual, tudo eh configurado a partir do nome do modulo
     *
     * @var string
     **/
    protected $_module = '#name#';

    /**
     * Nome da área
     *
     * @var string
     **/
    protected $_areaName = '#AREA#';

    /**
     * undocumented class variable
     *
     * @var string
     **/
    protected $_formName = '#NAME#\Form\#CONTROLLER#Form';

    /**
     * Determina quais as colunas que serão exibidas nas listagens
     * deste controlador
     *
     * @var associative array
     **/
    protected $_tableColumns = array(
       
