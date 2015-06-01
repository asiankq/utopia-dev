<?php

return array(
    'doctrine' => array(
        'driver' => array(
            // overriding zfc-user-doctrine-orm's config
            'zfcuser_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => __DIR__ . '/../src/UserModule/Entity',
            ),
            'orm_default' => array(
                'drivers' => array(
                    'UserModule\Entity' => 'zfcuser_entity',
                ),
            ),
        ),
    ),
    'zfcuser' => array(
        // telling ZfcUser to use our own class
        'user_entity_class' => 'UserModule\Entity\User',
        // telling ZfcUserDoctrineORM to skip the entities it defines
        'enable_default_entities' => false,
    ),
    'bjyauthorize' => array(
        // Using the authentication identity provider, which basically reads the roles from the auth service's identity
        'identity_provider' => 'BjyAuthorize\Provider\Identity\AuthenticationIdentityProvider',
        'role_providers' => array(
            // using an object repository (entity repository) to load all roles into our ACL
            'BjyAuthorize\Provider\Role\ObjectRepositoryProvider' => array(
                'object_manager' => 'doctrine.entity_manager.orm_default',
                'role_entity_class' => 'UserModule\Entity\Role',
            ),
        ),
    ),
    'form_elements' => array(
        'factories' => array(
            'DoctrineModule\Validator\UniqueObject' => function($sm){
                return 'shiiit';
            },
        ),
        
    ),
                    
    'view_manager' => array(
        'template_path_stack' => array(
            'zfcuser' => __DIR__ . '/../view',
        ),
    ),
                    
    'controllers' => array(
        'invokables' => array(
            'UserModule\Controller\Index' => 'UserModule\Controller\IndexController',
            'UserModule\Controller\Address' => 'UserModule\Controller\AddressController',
        ),
    ),
                    
    'service_manager' => array(
        'invokables' => array(
            'UserService' => 'UserModule\Service\UserService'
        ),
    )
);
/*
'DoctrineModule\Validator\UniqueObject' => function ($sm){
                $uniqueObject = new DoctrineModule\Validator\NoObjectExists(array(
                    'fields' => 'email',
                    'object_repository' => $sm->get('Doctrine\ORM\EntityManager')->getRepository('UserModule\Entity\User'),
                    'object_manager' => $sm->get('Doctrine\ORM\EntityManager'),
                ));
                return $uniqueObject;
            }
 *  */