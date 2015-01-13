<?php

use ZFBrasil\Proxposer;
use ZFBrasil\RepositoryManager;
use ZFBrasil\Proxposer\Api;
use ZFBrasil\Proxposer\Api\Repository;

return [
    'modules' => [
        RepositoryManager::class,
        ZF\DevelopmentMode::class,
        'DoctrineModule',
        'DoctrineORMModule',
        ZF\Apigility\Provider::class,
        'AssetManager',
        ZF\ApiProblem::class,
        ZF\MvcAuth::class,
        ZF\OAuth2::class,
        ZF\Hal::class,
        ZF\ContentNegotiation::class,
        ZF\ContentValidation::class,
        ZF\Rest::class,
        ZF\Rpc::class,
        ZF\Versioning::class,
        ZF\Configuration::class,
        ZF\Apigility::class,
        Proxposer::class,
        Api::class,
        Repository::class,
    ],
    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],
        'config_glob_paths' => [
            'config/autoload/{,*.}{global,local}.php',
        ],
    ],
];

