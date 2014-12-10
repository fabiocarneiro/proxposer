<?php
/**
 * @author  Fábio Carneiro <fahecs@gmail.com>
 * @license proprietary
 */
use Zend\Mvc\Router\Http\Literal;
use ZFBrasil\Proxposer;
use ZFBrasil\Proxposer\Controller\Factory\HomeControllerFactory;

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
            HomeController::class => HomeControllerFactory::class
        ]
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'controller_map' => [
            Proxposer::class => true
        ]
    ]
];