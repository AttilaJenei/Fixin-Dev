<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

return array_replace_recursive(require "$fixinPath/config/web.php", [
    'loader' => [
        'prefixes' => [
            'App' => "$topPath/classes/App",
            'Fixin' => "$fixinPath/classes/Fixin",
        ]
    ],
    'resourceManager' => [
        'definitions' => [
            'System\Group\Repository' => [ // TODO entity/repository abstract factory
                'options' => [
                    'name' => 'system__groups',
                    'storage' => 'dbStorage',
                    'entityPrototype' => 'System\Group\Entity',
                    'entityCache' => 'Model\Entity\Cache\RuntimeCache',
                ]
            ],
            'System\User\Repository' => [ // TODO entity/repository abstract factory
                'options' => [
                    'name' => 'system__users',
                    'storage' => 'dbStorage',
                    'entityPrototype' => 'System\User\Entity',
                    'entityCache' => 'Model\Entity\Cache\RuntimeCache',
                ]
            ],

            'viewFileResolver' => [
                'options' => [
                    'paths' => [
                        "$topPath/views",
                    ]
                ]
            ]
        ],
        'abstractFactories' => [
            'prefixFallback' => [
                'options' => [
                    'searchOrder' => ['App', 'Fixin']
                ]
            ]
        ]
    ]
]);