<?php
/**
 * @author  Fábio Carneiro <fahecs@gmail.com>
 * @license proprietary
 */
use Zend\Mvc\Router\Http\Literal;

return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => HomeController::class
                    ]
                ]
            ]
        ]
    ],
    'controllers' => [
        'factories' => [

        ]
    ]
];