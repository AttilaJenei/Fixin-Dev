<?php
/**
 * @link       http://www.attilajenei.com
 * @copyright  Copyright (c) 2016 Attila Jenei
 */

return array_replace_recursive(require "{$fixinPath}/config/default.php", [
    'loader' => [
        'prefixes' => [
            'App' => "{$topPath}/classes/App",
            'Fixin' => "{$fixinPath}/classes/Fixin",
        ]
    ],
]);