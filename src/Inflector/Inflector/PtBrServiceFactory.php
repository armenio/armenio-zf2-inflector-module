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
 * PtBrServiceFactory
 * @author Rafael Armenio <rafael.armenio@gmail.com>
 *
 *
 */
class PtBrServiceFactory implements FactoryInterface
{
    /**
     * zend-servicemanager v2 factory for creating PtBr instance.
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @returns PtBr
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $ptBr = new PtBr();
        return $ptBr;
    }
}
