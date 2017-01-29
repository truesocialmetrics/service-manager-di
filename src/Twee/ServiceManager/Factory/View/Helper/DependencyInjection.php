<?php

namespace Twee\ServiceManager\Factory\View\Helper;

use Twee\ServiceManager\Factory\DependencyInjection as FactoryDependencyInjection;
use Zend\ServiceManager\ServiceLocatorInterface;

class DependencyInjection
{
    public function __invoke(ServiceLocatorInterface $serviceLocator, $requestedName)
    {
        return (new FactoryDependencyInjection())->__invoke($serviceLocator, $requestedName);
    }
}