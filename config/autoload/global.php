<?php

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;

return [
    'doctrine' => [
        'driver' => [
            'proxposer_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Entity'
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    'ZFBrasil\Proxposer\Entity' => 'proxposer_driver'
                ]
            ]
        ]
    ]
];