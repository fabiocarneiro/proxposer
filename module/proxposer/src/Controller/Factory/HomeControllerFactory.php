<?php

namespace ZFBrasil\Proxposer\Controller\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZFBrasil\Proxposer\Controller\HomeController;

/**
 * @author  Fábio Carneiro <fahecs@gmail.com>
 * @license proprietary
 */
class HomeControllerFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new HomeController();
    }
}