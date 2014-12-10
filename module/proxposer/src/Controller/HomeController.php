<?php

namespace ZFBrasil\Proxposer\Controller;

use Zend\Mvc\Controller\AbstractController;
use Zend\Mvc\MvcEvent;

/**
 * @author  Fábio Carneiro <fahecs@gmail.com>
 * @license proprietary
 */
class HomeController extends AbstractController
{
    /**
     * {@inheritDoc}
     */
    public function onDispatch(MvcEvent $e)
    {
        $e->setResult(['fuck' => 'yes']);
    }
}