<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

return array_replace_recursive(require "$fixinPath/config/web.php", [
    'loader' => [
        'prefixes' => [
//            'App' => "$topPath/classes/App",
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