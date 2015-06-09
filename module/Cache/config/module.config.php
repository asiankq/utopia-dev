<?php

return array(
    'service_manager' => array(

        'factories' => array(

            'Cache' => 'Cache\Factory\CacheFactory',

        ),

    ),
    
    'cache' => array(

        'adapter' => array(

            'name' => 'filesystem'

        ),

        'options' => array(

            'cache_dir' => 'data/cache/',
            'namespace' => 'socratemuscache',
            'ttl'       => 3600
            // other options

        ),

    ),
);