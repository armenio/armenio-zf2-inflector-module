<?php
/**
 * Rafael Armenio <rafael.armenio@gmail.com>
 *
 * @link http://github.com/armenio for the source repository
 */
 
namespace Armenio\Inflector;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 *
 *
 * InflectorServiceFactory
 * @author Rafael Armenio <rafael.armenio@gmail.com>
 *
 *
 */
class InflectorServiceFactory implements FactoryInterface
{
    /**
     * zend-servicemanager v2 factory for creating Inflector instance.
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @returns Inflector
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $inflector = new Inflector();
        return $inflector;
    }
}
