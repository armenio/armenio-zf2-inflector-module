<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'service_manager' => array(
        'factories' => array(
            'Armenio\Inflector' => 'Armenio\Inflector\InflectorServiceFactory',
            'Armenio\Inflector\PtBr' => 'Armenio\Inflector\Inflector\PtBrServiceFactory',
            'Armenio\Inflector\EnUs' => 'Armenio\Inflector\Inflector\EnUsServiceFactory',
        ),
    ),    
);
