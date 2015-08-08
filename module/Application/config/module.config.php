<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route' => '/:lang[/]',
                    'constraints' => array (
                        'lang' => '[a-z]{2}',
                    ),
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                        'lang'       => 'en'
                    ),
                ),
            ),
            'home_redirect' => array (
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array (
                    'route' => '/',
                    'defaults' => array (
                    'controller' => 'Application\Controller\Intl',
                    'action' => 'index',
                    ),
                ),
            ),
            
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/:lang/application[/:controller[/:action[/:id]]]',
                    'defaults' => array(
                        'lang' => '[a-z]{2}',
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                )
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator'    => 'MvcTranslator',
            'entitymanager' => 'doctrine.entitymanager.orm_default'
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    // 'view_manager' => array(
    //     'display_not_found_reason' => true,
    //     'display_exceptions'       => true,
    //     'doctype'                  => 'HTML5',
    //     'not_found_template'       => 'error/404',
    //     'exception_template'       => 'error/index',
    //     'template_map' => array(
    //         'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
    //         'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
    //         'error/404'               => __DIR__ . '/../view/error/404.phtml',
    //         'error/index'             => __DIR__ . '/../view/error/index.phtml',
    //     ),
    //     'template_path_stack' => array(
    //         __DIR__ . '/../view',
    //     ),
    // ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    
    //Doctine config
    //Load doctrine entities
    'doctrine' => array(
        'driver' => array(
            'app_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => __DIR__ . '/../src/Application/Entity',
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Application\Entity' => 'app_entities',
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
            //'XhrResponseStrategy'
        ),
    ),
);
