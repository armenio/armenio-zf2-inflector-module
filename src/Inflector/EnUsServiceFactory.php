<?php
/**
 * Rafael Armenio <rafael.armenio@gmail.com>
 *
 * @link http://github.com/armenio for the source repository
 */
 
namespace Armenio\Inflector\Inflector;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 *
 *
 * EnUsServiceFactory
 * @author Rafael Armenio <rafael.armenio@gmail.com>
 *
 *
 */
class EnUsServiceFactory implements FactoryInterface
{
    /**
     * zend-servicemanager v2 factory for creating EnUs instance.
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @returns EnUs
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $enUs = new EnUs();
        return $enUs;
    }
}
