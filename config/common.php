<?php
/**
 * Fixin Framework
 *
 * Copyright (c) Attila Jenei
 *
 * http://www.fixinphp.com
 */
return array_replace_recursive(require "$fixinPath/config/web.php", [
    'loader' => [
        'prefixes' => [
            'App' => "$topPath/classes/App",
            'Fixin' => "$fixinPath/classes",
        ]
    ],
    'resourceManager' => [
        'definitions' => [
            'templateFileResolver' => [
                'options' => [
                    'paths' => [
                        "$topPath/templates",
                    ]
                ]
            ]
        ],
        'abstractFactories' => [
            'namespaceFallback' => [
                'options' => [
                    'searchOrder' => ['App', 'Fixin']
                ]
            ]
        ]
    ]
]);
