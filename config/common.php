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
            'Base\Storage\Directory\DirectoryStorage' => [
                'options' => [
                    'path' => "$topPath/workspace/storage"
                ]
            ],
            'System\Group\Repository' => [ // TODO entity/repository abstract factory
                'options' => [
                    'entityPrototype' => 'System\Group\Entity',
                    'entityCache' => 'Model\Entity\Cache\RuntimeCache',
                    'name' => 'system__groups',
                    'storage' => 'dbStorage'
                ]
            ],
            'System\User\Repository' => [ // TODO entity/repository abstract factory
                'options' => [
                    'entityPrototype' => 'System\User\Entity',
                    'entityCache' => 'Model\Entity\Cache\RuntimeCache',
                    'name' => 'system__user',
                    'storage' => 'dbStorage'
                ]
            ],

            'dbStorage' => [
                'class' => 'Model\Storage\Pdo\PdoStorage',
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