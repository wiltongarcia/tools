<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonAuthentication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
    'controllers' => array(
        'invokables' => array(
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            '#name#' => __DIR__ . '/../view',
        ),
    ),

    'traceFile' => 'data/trace',
);
